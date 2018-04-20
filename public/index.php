<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';


include_once '../app/views/header.php';


//WHY?
$app = new App;


include '../app/views/footer.php';






