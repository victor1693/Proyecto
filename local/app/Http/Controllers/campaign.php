<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaign extends Controller
{
   public function index($token)
   {
   		$vista = View::make('campaign');
   		$vista->token = $token;
   		$vista->artistAside = $this->getArtistAside();
   		$vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside"));
   		return $vista;
   }
}
