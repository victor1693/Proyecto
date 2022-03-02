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
    	return RQ::get("https://app.venbia.com/v1/artist/catalogue/".$id."?ajax=true");
    }

    public function loadAudienceAnalisys($id)
    {    
    	return RQ::get("https://app.venbia.com/v1/artist/audience-analisys/".$id."?ajax=true");
    }

    public function loadArtistSummary($id)
    {    
    	return RQ::get("https://app.venbia.com/v1/artist/summary/".$id."?ajax=true");
    }

	public function loadAudioAnalysis($id)
    {    
    	return RQ::get("https://app.venbia.com/v1/campaign-audio-analysis/".$id."?ajax=true");
    }

}
