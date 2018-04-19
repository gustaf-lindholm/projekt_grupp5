<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';
$app = new App;



