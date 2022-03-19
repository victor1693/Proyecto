<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignNew extends Controller
{   
    private $spotify;

    function __construct()
    {
        $this->spotify = new spotifyAPI();
    }

    public function index()
    {
    	$vista = View::make("campaign-new");
      $vista->artistAside = $this->getArtistAside();
      $vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside"));  
    	return $vista;
    }

    public function indexPublic()
    {
    	$vista = View::make("public-campaign-new");
      $vista->artistAside = $this->getArtistAside();  
    	return $vista;
    }

    # BUSCAR CANCION
    
    public function buscarTrack()
    {
       # EN CASO QUE LA VARIABLE NO EXISTA O ESTE VACIA RETORNAMOS VACIO
       if(!isset($_GET['search'])){return response()->json([],200);}
       if($_GET['search']==""){return response()->json([],200);} 
       $this->spotify->inputSearch = $_GET['search'];
       return $this->spotify->searchTrackAndArtists();
    }
}
