<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';

// include header
include '../app/views/header.php';

// Instatiates a new app, i.e the whole page
$app = new App;

include "../app/views/Carousel.php";

include '../app/views/filter.view.php';

// include footer
include '../app/views/footer.php';



