<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class artistAudienceAnalysis extends Controller
{
    public function index($token)
    { 
    	$vista = View::make("audience-analysis");
    	$vista->artistAside = $this->getArtistAside();   
    	$vista->artistSummary =json_decode(RQ::get("http://65.108.135.59/v1/artist/audience-analisys/".$token));
    	 $vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside")); 
    	return $vista;
    }
}
