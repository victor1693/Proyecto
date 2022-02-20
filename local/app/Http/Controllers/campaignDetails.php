<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignDetails extends Controller
{
    public function index()
    {
    	$vista = View::make("details-campaign");
        $vista->artistAside = $this->getArtistAside(); 
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
         
        if(!isset($_POST['id_track'])){
            return Redirect()->back()->with('info','Debe colocar el id del track.');
        }
        else if($_POST['id_track'] == ""){
            return Redirect()->back()->with('info','Debe colocar el id del track.');
        }
        if(!isset($_POST['inversion'])){
            return Redirect()->back()->with('info','Debe colocar el monto.');
        }
        else if($_POST['inversion'] == ""){
            return Redirect()->back()->with('info','Debe colocar el monto.');
        }
        if(!isset($_POST['date'])){
            return Redirect()->back()->with('info','Debe colocar la fecha de inicio.');
        }
        else if($_POST['date'] == ""){
            return Redirect()->back()->with('info','Debe colocar la fecha de inicio.');
        } 
        if(!isset($_POST['generos'])){
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
            'id_track' => $_POST['id_track'],
            'inversion' => $_POST['inversion'],
            'date' => $_POST['date'],
            'generos' => $generos,
            'ac_token' => session()->get('ac_token')
        ); 
        
        $campaign = json_decode(RQ::post("https://app.venbia.com/v1/campaign",$data)); 
       
        if($campaign->httpCode != "201"){   
            return Redirect()->back()->with('error',$campaign->Error); 
        } 
        else{
            return Redirect('campaign-checkout/'.$campaign->data->campaign_token);
        }
    }
}
