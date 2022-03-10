<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

class loading extends Controller
{
	public function loadArtistCatalogue($id)
	{
		$vista = View::make('loading-artist-catalogue');
		$vista->token = $id;
		return $vista;
	}

	public function loadArtistSummary($id)
	{
		$vista = View::make('loading-artist-summary');
		$vista->token = $id;
		return $vista;
	}

	public function loadAudienceAnalisys($id)
	{
		$vista = View::make('loading-audience-analysis');
		$vista->token = $id;
		return $vista;
	}

	public function loadAudioAnalysis($id)
	{
		$vista = View::make('loading-audio-analysis');
		$vista->token = $id;
		return $vista;
	}
}
