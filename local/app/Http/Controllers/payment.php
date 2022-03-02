<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class payment extends Controller
{
	private $stripe;

	function __construct()
	{
		$this->stripe = new stripeClass();
	}

	public function updatePaymentIntent()
	{
		$monto = $_POST['monto'] * 100; 
		$this->stripe->monto = $monto; 
		return $this->stripe->PaymentIntent();
	} 
}
