<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('814875858117-9jbqeagbabi14epq4km3cqduh01oem14.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('I699aTKR2x5dYmEcLm3WRlwG');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login_php/googlegmaillogin/indexgmail.php');
 
 //header("location: login_php/welcome.php");

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here 