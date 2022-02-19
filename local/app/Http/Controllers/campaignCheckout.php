<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignCheckout extends Controller
{
  public function index($id)
  {
  	$vista = View::make("pay-campaign");
  	$checkout = json_decode(RQ::get("https://app.venbia.com/v1/checkout/".$id));

  	if($checkout->httpCode != "200" ){
  		return Redirect('dashboard');
  	}
  	if(count($checkout->data) == 0){
  		return Redirect('dashboard');
  	} 
  	$vista->checkout = $checkout;
  	$vista->campaign_token = $id;
    $vista->artistAside = $this->getArtistAside(); 
    return $vista;
  }

  public function payWithBalance()
  {
  	if(!isset($_POST['campaign_token'])){
  		return Redirect()->back()->with('info','Es necesario el el token de la campaign');
  	}
  	else if($_POST['campaign_token']==""){
  		return Redirect()->back()->with('info','Es necesario el el token de la campaign');
  	}

  	$data = array('canpaign_token' =>  $_POST['campaign_token']);

  	$checkout = json_decode(RQ::post("https://app.venbia.com/v1/payment/balance",$data));
  	 

 	if($checkout->httpCode == "400"){
 		return Redirect()->back()->with('Error',$checkout->Error);
 	}
 	else if($checkout->data->payment_code == "0"){
 		return Redirect()->back()->with('Error',$checkout->data->payment_info);
 	}
 	
  return Redirect('dashboard');
 	# TERMINAR DE CARGAR LA DATA DEL TRACK
 	 
  }
 
}
