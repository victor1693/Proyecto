<?php

require 'vendor/autoload.php'; 
\Stripe\Stripe::setApiKey('sk_test_51IcHMdLBCvwwtaP25ICF7loGqL9DcPwMKBAEQFTnl6PiGtkhqJLTbND3jxleJ3GB3qO89AXVI1XlC0bapXi7tY8700E3kbe8kW');

function calculateOrderAmount(array $items): int { 
    return 1257;
}

header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    // Create a PaymentIntent with amount and currency
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => calculateOrderAmount($jsonObj->items),
        'currency' => 'usd',
        'customer' => 'cus_KyC0Q3DTY3kKQU', 
        'automatic_payment_methods' => [
            'enabled' => true,
        ],
    ]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}