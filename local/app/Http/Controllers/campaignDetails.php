<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Cookie;
class campaignDetails extends Controller
{
    public function index()
    {
    	$vista = View::make("details-campaign");
        $vista->artistAside = $this->getArtistAside(); 
        $vista->data = json_decode(RQ::get("https://app.venbia.com/v1/campaigns-details"));
    	return $vista;
    }

     public function indexPublic()
    {
    	$vista = View::make("public-details-campaign");
        $vista->artistAside = $this->getArtistAside(); 
    	return $vista;
    }

    public function createCampaign()
    {
         
         
        if(!isset($_POST['track_id'])){
            return Redirect()->back()->with('info','Debe colocar el id del track.');
        }
        else if($_POST['track_id'] == ""){
            return Redirect()->back()->with('info','Debe colocar el id del track.');
        }
        else if(!isset($_POST['payment_amount'])){
            return Redirect()->back()->with('info','Debe colocar el monto.');
        }
        else if($_POST['payment_amount'] == ""){
            return Redirect()->back()->with('info','Debe colocar el monto.');
        }
        else if($_POST['payment_amount'] < 50){
            return Redirect()->back()->with('info','La compra minima es de $50.');
        }
        else if(!isset($_POST['start_date'])){
            return Redirect()->back()->with('info','Debe colocar la fecha de inicio.');
        }
        else if($_POST['start_date'] == ""){
            return Redirect()->back()->with('info','Debe colocar la fecha de inicio.');
        } 
        else if(!isset($_POST['generos'])){
            return Redirect()->back()->with('info','Debe colocar almenos un genero.');
        }
        else if($_POST['generos'] == ""){
            return Redirect()->back()->with('info','Debe colocar almenos un genero.');
        } 

        $generosTemp = explode(",", $_POST['generos']);
        $generos = [];
        foreach ($generosTemp as $key) {
            $g = explode("_", $key);
            array_push($generos, $g[0]);
        }

        $generos = implode(",",$generos); 
        $data = array( 
            'ac_token' => session()->get('ac_token'), 
            "payment_flag" =>  $_POST['payment_flag'],
            "track_id" =>  $_POST['track_id'],
            "payment_amount" => $_POST['payment_amount'],
            "payment_type" => $_POST['payment_type'],
            "start_date" =>  $_POST['start_date'],
            "generos" =>  $_POST['generos'],
            "cupon_code" =>  $_POST['cupon_code'],
            "cupon_amount" =>  $_POST['cupon_amount'],
            "payment_status" =>  $_POST['payment_status'],
            "balance" =>  $_POST['balance'],
        ); 
        
        $campaign = "";

        if($_POST['payment_type'] == "balance"){
            $campaign = json_decode(RQ::post("https://app.venbia.com/v1/pay-with-balance",$data)); 
        }  

        if($campaign->campaign->code != "201"){   
            return Redirect()->back()->with('error','Ocurrio un error al crear la campaign.'); 
        } 
        else{
            if(isset($campaign->campaign->info)){
                return Redirect()->back()->with('info',$campaign->campaign->info); 
            } 
            Cookie::queue(Cookie::forget('balance'));
            Cookie::queue(Cookie::forget('cupon_amount'));
            Cookie::queue(Cookie::forget('cupon_code'));
            Cookie::queue(Cookie::forget('cupon_percent'));
            Cookie::queue(Cookie::forget('cupon_tipo')); 

            return Redirect('dashboard?load-information='.$campaign->campaign->items->campaign_token);
        }
    }
}
