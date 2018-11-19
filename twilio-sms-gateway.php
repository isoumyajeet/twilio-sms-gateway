<?php
include("includes/twilio-php-master/Twilio/autoload.php");
// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
    /******************SMS GATEWAY******************/
// BOTH ID & TOKEN WILL GET FROM THE TWILIO ACCOUNT DASHBOARD
    $sid            =   'YOUR APP ID NUMBER';
    $smstoken       =   'YOUR TOKEN NUMBER';
    $client = new Client($sid, $smstoken);

    //Use the client to do fun stuff like send text messages!
    $client->messages->create(
    //the number you'd like to send the message to
        $contact,
        array(
        //A Twilio phone number you purchased at twilio.com/console
            'from' => 'FROM PHONE NUMBER',
            'body' => 'Please confirm your registration with YOUR COMPANY NAME with OTP  '.$token
        )
    );
    /******************SMS GATEWAY******************/
?>