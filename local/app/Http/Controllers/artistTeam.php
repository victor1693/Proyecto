<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class artistTeam extends Controller
{
    public function index()
    {
    	$vista = View::make("artist-team");
    	$vista->artistAside = $this->getArtistAside(); 
    	return $vista;
    }
}
