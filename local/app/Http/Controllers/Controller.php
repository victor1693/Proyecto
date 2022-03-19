<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    # OBETENEMOS LOS ARTISTAS DEL ASIDE 
    
    public function getArtistAside()
    {
    	return RQ::get("http://65.108.135.59/v1/aside/artist");   
    }
}
