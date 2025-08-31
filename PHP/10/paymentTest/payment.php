<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// Sandbox API credentials
$merchantId = "YOUR_SANDBOX_MERCHANT_ID";
$apiKey     = "YOUR_SANDBOX_API_KEY";
$baseUrl    = "https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase";

// Get data from frontend
$amount      = $_POST['amount'];
$invoiceId   = $_POST['invoice_id'];
$description = $_POST['description'];

// Generate hash (HMAC-SHA512)
$data = $merchantId . $invoiceId . $amount . "USD" . $description;
$hash = hash_hmac('sha512', $data, $apiKey);

// Send request to ABA Sandbox
$client = new Client();

try {
    $response = $client->post($baseUrl, [
        'form_params' => [
            'merchant_id' => $merchantId,
            'order_id'    => $invoiceId,
            'amount'      => $amount,
            'currency'    => 'USD',
            'items'       => $description,
            'hash'        => $hash,
            'return_url'  => 'http://localhost/return.php',
            'cancel_url'  => 'http://localhost/cancel.php',
        ]
    ]);

    $result = json_decode($response->getBody(), true);

    echo json_encode([
        "status" => "success",
        "paymentUrl" => $result['data']['url'] ?? ''
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
