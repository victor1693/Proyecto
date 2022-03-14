<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class dashboard extends Controller
{
    public function index()
    {    
    	$vista = View::make("dashboard");
    	$vista->artistAside = $this->getArtistAside(); 
    	$vista->data = json_decode(RQ::get("https://app.venbia.com/v1/dashboard")); 
        $vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside"));
    	return $vista;
    }

    public function loadArtistCatalogue($id)
    {    
    	$r = RQ::get("https://app.venbia.com/v1/artist/catalogue/".$id."?ajax=true");
        if($r == "1"){
            return Redirect('loading-artist-audience/'.$id);
        }
        else{
            return Redirect('dashboard')->with('info','Ocurrio un error al cargar la informacion de Artist Summary');
        }
    }

    public function loadAudienceAnalisys($id)
    {    
    	$r = RQ::get("https://app.venbia.com/v1/artist/audience-analisys/".$id."?ajax=true");
        if($r == "1"){
            return Redirect('loading-artist-analysis/'.$id);
        }
        else{
            return Redirect('dashboard')->with('info','Ocurrio un error al cargar la informacion de Artist Summary');
        }
    }

    public function loadArtistSummary($id)
    {    
    	$r = RQ::get("https://app.venbia.com/v1/artist/summary/".$id."?ajax=true");
        if($r == "1"){
            return Redirect('loading-artist-catalogue/'.$id);
        }
        else{
            return Redirect('dashboard')->with('info','Ocurrio un error al cargar la informacion de Artist Summary');
        }
    }

	public function loadAudioAnalysis($id)
    {    
    	$r =  RQ::get("https://app.venbia.com/v1/campaign-audio-analysis/".$id."?ajax=true");
        if($r == "1"){
            return Redirect('dashboard');
        }
        else{
            return Redirect('dashboard')->with('info','Ocurrio un error al cargar la informacion de Artist Summary');
        }
    }

}
