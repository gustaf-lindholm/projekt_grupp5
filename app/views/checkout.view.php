<?php


echo "<div class='col-md-12'><pre>";
var_dump($_SESSION);
var_dump($_POST);
var_dump(unserialize($_POST['order_set']['quantity']));
echo "</pre>";


