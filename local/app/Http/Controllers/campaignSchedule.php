<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignSchedule extends Controller
{
    public function index()
    {
    	$vista = View::make("schedule-campaign");
        $vista->generos = json_decode(RQ::get("http://65.108.135.59/v1/generos")); 
        $vista->artistAside = $this->getArtistAside();
        $vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside")); 
    	return $vista;
    }
 
}
