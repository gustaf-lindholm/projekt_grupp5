<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';


 //instansierar varukorgen så att den är tillgänglig över hela sidan
 if (empty($_SESSION['cart']) && !$_SESSION['cart'] instanceof SessionCart) {
 	$_SESSION['cart'] = new SessionCart();
 }

// include header
include '../app/views/header.php';

// Instatiates a new app, i.e the whole page
$app = new App;

// include footer
include '../app/views/footer.php';

//var_dump($_SESSION['cart']);



