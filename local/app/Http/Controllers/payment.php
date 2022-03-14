<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
class payment extends Controller
{
	private $stripe;

	function __construct()
	{
		$this->stripe = new stripeClass();
	}

	public function updatePaymentIntent()
	{
		$monto = $_POST['monto'] * 100; 
		$this->stripe->monto = $monto; 
		return $this->stripe->PaymentIntent();
	} 

	public function cleanCookie()
	{
		Cookie::queue(Cookie::forget('balance'));
        Cookie::queue(Cookie::forget('cupon_amount'));
        Cookie::queue(Cookie::forget('cupon_code'));
        Cookie::queue(Cookie::forget('cupon_percent'));
        Cookie::queue(Cookie::forget('cupon_tipo'));
        Cookie::queue(Cookie::forget('track_artist'));
        Cookie::queue(Cookie::forget('track_date')); 
        Cookie::queue(Cookie::forget('track_generos'));
        Cookie::queue(Cookie::forget('track_id'));
        Cookie::queue(Cookie::forget('track_img'));
        Cookie::queue(Cookie::forget('track_inversion'));
        Cookie::queue(Cookie::forget('track_name'));
        Cookie::queue(Cookie::forget('track_reach'));
        Cookie::queue(Cookie::forget('track_reach_porcent'));
        Cookie::queue(Cookie::forget('track_stream_porcent'));
        Cookie::queue(Cookie::forget('track_streams')); 
	}

	public function pay()
	{
		 
		$card = false;
		$balance = false;
		$discount = false;

		if (!isset($_GET['id_track'])) {
			return Redirect()->back()->with('info','');
			return "No existe la variable ID Track.";
		} 
		else if ($_GET['id_track']=="") {
			return Redirect()->back()->with('info','');
			return "El ID del Track no puede ser vacio.";
		}

		else if (!isset($_GET['generos'])) {
			return Redirect()->back()->with('info','');
			return "Debe indicar los generos para este Track.";
		} 
		else if ($_GET['generos']=="") {
			return Redirect()->back()->with('info','');
			return "Debe indicar almenos un genero para este track.";
		}
		else if (!isset($_GET['start_date'])) {
			return Redirect()->back()->with('info','');
			return "Debe indicar la fecha de inicio de la campaign.";
		} 
		else if ($_GET['start_date']=="") {
			return Redirect()->back()->with('info','');
			return "La fecha de inicio no puede ser vacia.";
		}

		$generos = [];
 
		foreach (explode(",", $_GET['generos']) as $key) {
			$t = explode("_", $key);
			array_push($generos,$t[0]);
		}

		$_GET['generos'] = implode(",",$generos);

		$generos = implode(",",$generos);

		if(isset($_GET['k_discount'])){
			if($_GET['k_discount']!=""){ 
				$discount = true;
			}
		} 
		 
		if(isset($_GET['k_balance'])){
			if($_GET['k_balance']!=""){ 
				$balance = true;
			}
		}

		if(isset($_GET['k_card'])){
			if($_GET['k_card']!=""){
				$card = true;
			}
		} 

		if ($card == true && $balance == false && $discount == false) { # CARD
			return $this->payWithCard();
		}

		else if ($card == false && $balance == true && $discount == false) { # BALANCE
			return $this->payWithBalance();
		}

		else if ($card == true && $balance == true && $discount == false) { # CARD BALANCE
			 return $this->payWithCardAndBalance();
		}

		else if ($card == true && $balance == false && $discount == true) { # CARD DISCOUNT
			return $this->payWithCardAndDiscount();
		}

		else if ($card == false && $balance == true && $discount == true) { # BALANCE DISCOUNT
			 
			return $this->payWithBalanceAndDiscount();
		}

		else if ($card == true && $balance == true && $discount == true) { # BALANCE DISCOUNT CARD
			return $this->payWithCardAndBalanceDiscount();
		}
		$this->cleanCookie();
		return Redirect()->back()->with('info',''); 
	}

	public function payWithCard()
	{
		if (!isset($_GET['payment_intent'])) {
			return Redirect()->back()->with('info','No existe el PI'); 
		} 
		else if ($_GET['payment_intent']=="") {
			return Redirect()->back()->with('info','La variable PI no puede estar vacia.'); 
		} 
		else if (!isset($_GET['card_amount'])) {
			return Redirect()->back()->with('info','No existe la variable card_amount'); 
		} 
		else if ($_GET['card_amount']=="") {
			return Redirect()->back()->with('info','Debe indicar la cantidad a pagar con la tarjeta'); 
		} 
		else if (!is_numeric($_GET['card_amount'])) {
			return Redirect()->back()->with('info','El monto a pagar debe ser numerico'); 
		} 
		else if ($_GET['card_amount']<=0.5) {
			return Redirect()->back()->with('info','El monto a pagar con tarjeta debe estar entre los minimos aceptados.'); 
		} 

		# VERIFICAMOS EL PI
	    $this->stripe->paymentIntent = $_GET['payment_intent'];
		$pi = $this->stripe->PaymentIntentVerify();
		if($pi['status'] == false){
			return Redirect()->back()->with('info',$pi['msj']); 
		} 

		if($pi['data'] != 'succeeded'){
			return Redirect()->back()->with('info','No se pudo procesar su pago correctamente, coloquese en contacto con nosotros.'); 
		}

		# VERIFICAMOS QUE EL PI NO HAYA SIDO USADO
		$pi = RQ::get("https://app.venbia.com/v1/pi/".$_GET['payment_intent']);
		$pi = json_decode($pi);
		  
		if ($pi->error == true) {
			return Redirect()->back()->with('info','Ocurrio un error al verificar el PI.'); 
		}

		if ($pi->error == false) {
			if (count($pi->items)>0) { 
				return Redirect()->back()->with('info','Ya este pago fue procesado, otro intento y su cuenta sera bloqueada.'); 
			}
		}
		
		# ACTIVAMOS EL CAMPAIGN
	
		
		$campaign = $this->activateCampaign(); 
		 
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.'); 
		}
		$this->cleanCookie(); 
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token); 
	}

	public function payWithCardAndBalance()
	{
		 
		if (!isset($_GET['payment_intent'])) {
			return Redirect()->back()->with('info','No existe el PI'); 
		} 
		else if ($_GET['payment_intent']=="") {
			return Redirect()->back()->with('info','La variable PI no puede estar vacia.'); 
		}

		else if (!isset($_GET['card_amount'])) {
			return Redirect()->back()->with('info','No existe la variable card_amount'); 
		} 
		else if ($_GET['card_amount']=="") {
			return Redirect()->back()->with('info','Debe indicar la cantidad a pagar con la tarjeta'); 
		} 
		else if (!is_numeric($_GET['card_amount'])) {
			return Redirect()->back()->with('info','El monto a pagar debe ser numerico'); 
		} 
		else if ($_GET['card_amount']<=0.5) {
			return Redirect()->back()->with('info','El monto a pagar con tarjeta debe estar entre los minimos aceptados.'); 
		} 

		# VERIFICAMOS EL PI
	    $this->stripe->paymentIntent = $_GET['payment_intent'];
		$pi = $this->stripe->PaymentIntentVerify();
		if($pi['status'] == false){
			return Redirect()->back()->with('info',$pi['msj']); 
		} 

		if($pi['data'] != 'succeeded'){
			return Redirect()->back()->with('info','No se pudo procesar su pago correctamente, coloquese en contacto con nosotros.'); 
		}

		# VERIFICAMOS QUE EL PI NO HAYA SIDO USADO
		$pi = RQ::get("https://app.venbia.com/v1/pi/".$_GET['payment_intent']);
		$pi = json_decode($pi);
		  
		if ($pi->error == true) {
			return Redirect()->back()->with('info','Ocurrio un error al verificar el PI.'); 
		}

		if ($pi->error == false) {
			if (count($pi->items)>0) { 
				return Redirect()->back()->with('info','Ya este pago fue procesado, otro intento y su cuenta sera bloqueada.'); 
			}
		} 

		$balance = $this->validateBalance(); 
		if(!$balance['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		if($balance['balance']<=$_GET['balance']){
			return Redirect()->back()->with('info','No cuenta con el balance suficiente para procesar esta compra.'); 
		} 

		# ACTIVAMOS EL CAMPAIGN
		$campaign = $this->activateCampaign();
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.'); 
		} 
		$this->cleanCookie();
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token);

	}

	public function payWithBalance()
	{
		$balance = $this->validateBalance(); 
		if(!$balance['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		if($balance['balance']<=$_GET['balance']){
			return Redirect()->back()->with('info','No cuenta con el balance suficiente para procesar esta compra.'); 
		} 

		# ACTIVAMOS EL CAMPAIGN
		$campaign = $this->activateCampaign();
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.');  
		}
		$this->cleanCookie(); 
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token);
	}

	public function payWithBalanceAndDiscount()
	{
		$balance = $this->validateBalance(); 
		if(!$balance['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		if($balance['balance']<=$_GET['balance']){
			return Redirect()->back()->with('info','No cuenta con el balance suficiente para procesar esta compra.'); 
		} 

		$discount = $this->verifyDiscount(); 
		if(!$discount['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}

		# ACTIVAMOS EL CAMPAIGN
		$campaign = $this->activateCampaign();
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.'); 
		} 
		$this->cleanCookie();
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token);
	 
	}

	public function payWithCardAndDiscount()
	{
		if (!isset($_GET['payment_intent'])) {
			return Redirect()->back()->with('info','No existe el PI'); 
		} 
		else if ($_GET['payment_intent']=="") {
			return Redirect()->back()->with('info','La variable PI no puede estar vacia'); 
		} 

		# VERIFICAMOS EL PI
	    $this->stripe->paymentIntent = $_GET['payment_intent'];
		$pi = $this->stripe->PaymentIntentVerify();
		if($pi['status'] == false){
			return Redirect()->back()->with('info',$pi['msj']); 
		} 

		if($pi['data'] != 'succeeded'){
			return Redirect()->back()->with('info','No se pudo procesar su pago correctamente, coloquese en contacto con nosotros.'); 
		}

		# VERIFICAMOS QUE EL PI NO HAYA SIDO USADO
		$pi = RQ::get("https://app.venbia.com/v1/pi/".$_GET['payment_intent']);
		$pi = json_decode($pi);
		  
		if ($pi->error == true) {
			return Redirect()->back()->with('info','Ocurrio un error al verificar el PI'); 
		}

		if ($pi->error == false) {
			if (count($pi->items)>0) { 
				return Redirect()->back()->with('info','Ya este pago fue procesado, otro intento y su cuenta sera bloqueada.'); 
			}
		}

		$discount = $this->verifyDiscount(); 
		if(!$discount['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		
		# ACTIVAMOS EL CAMPAIGN
		$campaign = $this->activateCampaign();
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.'); 
		} 
		$this->cleanCookie();
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token); 
	}

	public function payWithCardAndBalanceDiscount()
	{
		if (!isset($_GET['payment_intent'])) { 
			return Redirect()->back()->with('info','No existe el PI');
		} 
		else if ($_GET['payment_intent']=="") {
			return Redirect()->back()->with('info','La variable PI no puede estar vacia.'); 
		} 

		# VERIFICAMOS EL PI
	    $this->stripe->paymentIntent = $_GET['payment_intent'];
		$pi = $this->stripe->PaymentIntentVerify();
		if($pi['status'] == false){
			return Redirect()->back()->with('info',$pi['msj']); 
		} 

		if($pi['data'] != 'succeeded'){
			return Redirect()->back()->with('info','No se pudo procesar su pago correctamente, coloquese en contacto con nosotros.'); 
		}

		# VERIFICAMOS QUE EL PI NO HAYA SIDO USADO
		$pi = RQ::get("https://app.venbia.com/v1/pi/".$_GET['payment_intent']);
		$pi = json_decode($pi);
		  
		if ($pi->error == true) {
			return Redirect()->back()->with('info','Ocurrio un error al verificar el PI.'); 
		}

		if ($pi->error == false) {
			if (count($pi->items)>0) { 
				return Redirect()->back()->with('info','Ya este pago fue procesado, otro intento y su cuenta sera bloqueada.'); 
			}
		}

		$balance = $this->validateBalance(); 
		if(!$balance['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		if($balance['balance']<=$_GET['balance']){
			return Redirect()->back()->with('info','No cuenta con el balance suficiente para procesar esta compra.'); 
		} 


		$discount = $this->verifyDiscount(); 
		if(!$discount['status']){
			return Redirect()->back()->with('info',$balance['msj']); 
		}
		
		# ACTIVAMOS EL CAMPAIGN
		$campaign = $this->activateCampaign();
		if($campaign->httpCode != "201"){
			return Redirect()->back()->with('info','Ocurrio un error al procesar el registro, coloquese en contacto con nosotros.'); 
		} 
		$this->cleanCookie();
		return Redirect('loading-artist-summary/'.$campaign->data->campaign_token); 
	}


	private function validateBalance()
	{
		if(!isset($_GET['balance'])){
			return array('status' => false, 'msj' => 'No existe la variable balance.');
		}
		else if($_GET['balance'] == ""){
			return array('status' => false, 'msj' => 'Es necesario que indique el balance.');
		}
		else if(!is_numeric($_GET['balance'])){
			return array('status' => false, 'msj' => 'El balance no tiene un formato valido.');
		}
		else if($_GET['balance'] <= 0){
			return array('status' => false, 'msj' => 'El balance debe ser > 0');
		}

		$data = array('ac_token' => session()->get('ac_token')); 
		$balance = json_decode(RQ::post("https://app.venbia.com/v1/get-balance",$data));
		if(count($balance) <= 0){
			return array('status' => false, 'msj' => 'Esta cuenta no tiene balance.');
		}
	 
		if(isset($balance->code)){
			return array('status' => false, 'msj' => 'Ocurio un error al obtener el balance.');
		}
		return array('status' => true, 'balance' => $balance[0]->balance);
	}

	private function processPaymentWithBalance()
	{
		#Procesar pago con Balance
	}

	private function verifyDiscount()
	{
		if(!isset($_GET['discount'])){
			return array('status' => false, 'msj' => 'No existe la variable balance.');
		}
		else if($_GET['discount'] == ""){
			return array('status' => false, 'msj' => 'Es necesario que indique el balance.');
		}   
		$data = array('discount' => $_GET['discount']); 
		$discount = json_decode(RQ::post("https://app.venbia.com/v1/get-discount",$data)); 

		if(isset($balance->code)){
			return array('status' => false, 'msj' => 'Ocurio un error al obtener el balance.');
		}
		if(count($discount) == 0){
			return array('status' => false, 'msj' => ' No se pudo verificar ese cupon.');
		}
		return array('status' => true);
	}

	public function response($error,$msj)
	{
		$res = array();
		$res['status'] = $error;
		$res['msj'] = $msj;
		return $res;
	}

	private function activateCampaign()
	{
		

		$pi = "";
		if (isset($_GET['payment_intent'])) {
			$pi = $_GET['payment_intent'];
		}

		$data = array( 
			'id_track' => $_GET['id_track'],
			'ac_token' => session()->get('ac_token'),
			'generos' =>$_GET['generos'],
			'start_date' => $_GET['start_date'], 
			'discount' => $_GET['discount'],
			'balance' => $_GET['balance'],
			'card_amount' => $_GET['card_amount'],
			'pi' => $pi
		);

		$campaign = json_decode(RQ::post("https://app.venbia.com/v1/campaign",$data));
		return $campaign;
	}
}
