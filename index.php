<?php
require 'vendor/autoload.php';
require_once("includes/braintree_init.php");

$gateway = new Braintree_Gateway([
    'environment' => getenv('BT_ENVIRONMENT'),
    'merchantId' => getenv('BT_MERCHANT_ID'),
    'publicKey' => getenv('BT_PUBLIC_KEY'),
    'privateKey' => getenv('BT_PRIVATE_KEY')
]);
$support_path = getenv('SUPPORT_PATH');

$app = new \Slim\Slim();

$app->config([
    'templates.path' => 'templates',
]);

// $app->get('/', function () use ($app) {
//     $app->redirect('/checkouts/');
// });

$app->get('/', function () use ($app, $gateway, $support_path) {
    $app->render('checkouts/new.php', [
        'support_path' => $support_path,
        'client_token' => $gateway->clientToken()->generate(),
    ]);
});

$app->post('/', function () use ($app, $gateway, $support_path) {

    $result = $gateway->transaction()->sale([
        "amount" => $app->request->post('amount'),
        "paymentMethodNonce" => $app->request->post('payment_method_nonce'),
        'options' => [
            'submitForSettlement' => True
        ]
    ]);

    if($result->success || $result->transaction) {
        $app->redirect("/$support_path" . $result->transaction->id);
    } else {
        $errorString = "";

        foreach($result->errors->deepAll() AS $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }

        $_SESSION["errors"] = $errorString;
        $app->redirect("/$support_path");
    }
});

$app->get('/:transaction_id', function ($transaction_id) use ($app, $gateway, $support_path) {
    $transaction = $gateway->transaction()->find($transaction_id);

    $transactionSuccessStatuses = [
        Braintree\Transaction::AUTHORIZED,
        Braintree\Transaction::AUTHORIZING,
        Braintree\Transaction::SETTLED,
        Braintree\Transaction::SETTLING,
        Braintree\Transaction::SETTLEMENT_CONFIRMED,
        Braintree\Transaction::SETTLEMENT_PENDING,
        Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
     ];

    if (in_array($transaction->status, $transactionSuccessStatuses)) {
        $header = "Thank you for helping to keep <em>the RAIL</em> ALIVE and FREE!";
        $icon = "success";
        $message = "Your donation toward the Brooklyn Rail been successfully processed.";
    } else {
        $header = "Ooops! Transaction Failed";
        $icon = "fail";
        $message = "Your transaction has a status of " . $transaction->status . ". Try again or e-mail us at manager@brooklynrail.org";
    }

    $app->render('checkouts/show.php', [
        'transaction' => $transaction,
        'header' => $header,
        'icon' => $icon,
        'message' => $message
    ]);
});

$app->run();
