<?php
require_once('../vendor/autoload.php');

\Stripe\Stripe::setApiKey(' SECRET KEY HERE ');

// ensures post request is legitimate
if (!isset($_POST['stripeToken']))
    header('Location: /index.php');
    exit;

try {
    $success = true;
    $error_msg;

    // sanitize post data
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    // create description field
    if (isset($POST['team_name'])) {
        $desc = $POST['desc'].' '.$POST['team_name'];
    } else {
        $desc = $POST['desc'];
    }

    // create stripe Customer object
    $customer = \Stripe\Customer::create([
        'name'   => $POST['firstname'].' '.$POST['lastname'],
        'email'  => $POST['email'],
        'source' => $POST['stripeToken']
    ]);

    // create stripe Charge object to directly charge customer's account
    $charge = \Stripe\Charge::create([
        'amount' => calculateAmount($desc),
        'currency' => 'usd',
        'customer' => $customer->id,
        'receipt_email' => $customer->email,
        'description' => $desc
    ]);

} catch(\Stripe\Exception\CardException $e) {
    // Since it's a decline, \Stripe\Exception\CardException will be caught

    $error_msg = $e->getError()->message;
    $success = false;

} catch (\Stripe\Exception\RateLimitException $e) {
    // Too many requests made to the API too quickly
    $error_msg = $e->getError()->message;
    $success = false;
} catch (\Stripe\Exception\InvalidRequestException $e) {
    // Invalid parameters were supplied to Stripe's API
    $error_msg = $e->getError()->message;
    $success = false;
} catch (\Stripe\Exception\AuthenticationException $e) {
    // Authentication with Stripe's API failed
    // (maybe you changed API keys recently)
    $error_msg = $e->getError()->message;
    $success = false;
} catch (\Stripe\Exception\ApiConnectionException $e) {
    // Network communication with Stripe failed
    $error_msg = $e->getError()->message;
    $success = false;
} catch (\Stripe\Exception\ApiErrorException $e) {
    $error_msg = $e->getError()->message;
    $success = false;
} catch (Exception $e) {
    // Something else happened, completely unrelated to Stripe
    $error_msg = 'An unexpected error occurred.';
    $success = false;
}

if ($success) {
    // success
    header('Location: /src/success.php?tid='.$charge->id.'&product='.$charge->description);
} else {
    // failure
    header('Location: /src/failure.php?error='.$error_msg);
}


function calculateAmount($desc) {
    if ($desc == 'training') {
        return ((100 * 0.029) + 100) * 100;
    } else {
        return ((150 * 0.029) + 150) * 100;
    }
}
?>