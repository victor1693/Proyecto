<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class artistCatalogue extends Controller
{
    public function index($token)
    {
    	$vista = View::make("artist-catalogue");
    	$vista->artistAside = $this->getArtistAside(); 
    	$vista->artistSummary = json_decode(RQ::get("https://app.venbia.com/v1/artist/catalogue/".$token));  
    	return $vista;
    }
}
