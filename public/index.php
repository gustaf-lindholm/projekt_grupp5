<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';

// Instatiates a new app, i.e the whole page
$app = new App;





