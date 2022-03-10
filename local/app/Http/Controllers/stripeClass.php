<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class stripeClass extends Controller
{	
	public $customer;
	public $monto;	
    public $email;
    private $privateKey; 
    public $paymentIntent; 
    private $metodo;

    function __construct()
     {
         $this->privateKey = "sk_test_51IcHMdLBCvwwtaP25ICF7loGqL9DcPwMKBAEQFTnl6PiGtkhqJLTbND3jxleJ3GB3qO89AXVI1XlC0bapXi7tY8700E3kbe8kW";
     } 

    public function PaymentIntent()
    { 
        $this->metodo = 'PaymentIntent';
        return $this->executeStripe();  
    }

    public function PaymentIntentVerify() 
    {
        $this->metodo = 'PaymentIntentVerify';
        return $this->executeStripe();
    }

    public function createCustomer()
    {
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\customer::create (['email' => $this->email]);  
        return $customer->id; 
    }

    public function executeStripe()
    {
        try {
            Stripe\Stripe::setApiKey($this->privateKey);  

            # OBTENEMOS UN PI FROM STRIPE
            if($this->metodo == "PaymentIntentVerify"){    
                $paymentIntent = Stripe\PaymentIntent::retrieve($this->paymentIntent,[]);
                return array('status' => true,'data' => $paymentIntent->status); 
                return $paymentIntent->status; 
            }
            # CREAMOS UN PI
            else if($this->metodo == "PaymentIntent"){     
                $paymentIntent = Stripe\PaymentIntent::create([
                    'amount' => $this->monto,
                    'currency' => 'usd',
                    'customer' => session()->get('customer_id'), 
                    'automatic_payment_methods' => [
                    'enabled' => true,
                    ],
                ]);  
                $output = ['clientSecret' => $paymentIntent->client_secret,'amount' => $paymentIntent->amount / 100];
                return array('status' => true,'data' =>  $output);  
            }

            #return Response()->json($paymentIntent); 
        } catch(\Stripe\Exception\CardException $e) {
          return array('status' => false,'msj' => $e->getError()->message);           
        } catch (\Stripe\Exception\RateLimitException $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        } catch (\Stripe\Exception\InvalidRequestException $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        } catch (\Stripe\Exception\AuthenticationException $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        } catch (\Stripe\Exception\ApiConnectionException $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        } catch (\Stripe\Exception\ApiErrorException $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        } catch (Exception $e) {
          return array('status' => false,'msj' => $e->getError()->message);   
        }
    } 
}
