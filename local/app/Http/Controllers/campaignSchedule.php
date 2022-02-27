<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignSchedule extends Controller
{
    public function index()
    {
    	$vista = View::make("schedule-campaign");
        $vista->generos = json_decode(RQ::get("https://app.venbia.com/v1/generos")); 
        $vista->artistAside = $this->getArtistAside();
        $vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside")); 
    	return $vista;
    }
 
}
