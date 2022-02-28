<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class stripeClass extends Controller
{	
	public $customer;
	public $monto;	

    public function PaymentIntent()
    {
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentIntent = Stripe\PaymentIntent::create ([
        		'amount' => 2348,
                'currency' => 'usd',
		        'customer' => 'cus_KyC0Q3DTY3kKQU', 
		        'automatic_payment_methods' => [
		            'enabled' => true,
		        ],
        ]); 
        $output = ['clientSecret' => $paymentIntent->client_secret];
	    echo json_encode($output); 
    }

    public function PaymentIntentVerify()
    {
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentIntent = Stripe\paymentIntent::retrieve ($_POST['pi'],[]);  
	    //echo json_encode($output); 
    }
}
