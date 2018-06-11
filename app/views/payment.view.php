<h1>Thank you for your purchase</h1>
<div>You have ordered the following products: ***
 <br>We will shortly confirm your payment</div>
<?php
var_dump($_POST);
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 