<?php

//logout.php

include('configgmail.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:indexgmail.php');

?>