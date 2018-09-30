<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "################################"; //EDIT AND PUT YOUR TWILIO API VALUES
$token  = "################################"; //EDIT AND PUT YOUR TWILIO API VALUES
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+################################", // to 
                           array( 
                               "from" => "+################################",       //EDIT AND PUT YOUR TWILIO API VALUES
                               "body" => "Hello from CHINMAY DESHPANDE CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);