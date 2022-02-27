<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignAudioAnalysis extends Controller
{
    public function index($token)
    {
    	$vista = View::make("audio-analysis");
    	$vista->artistAside = $this->getArtistAside(); 
    	$vista->data = json_decode(RQ::get("https://app.venbia.com/v1/campaign-audio-analysis/".$token));
    	$vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside")); 
    	$vista->token = $token;
    	return $vista;
    }
}
