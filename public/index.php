<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';

<<<<<<< HEAD
//instansierar varukorgen så att den är tillgänglig över hela sidan
// if (!$_SESSION['cart'] instanceof SessionCart) {
// 	$_SESSION['cart'] = new SessionCart();
// }
=======
 //instansierar varukorgen så att den är tillgänglig över hela sidan
 if (!$_SESSION['cart'] instanceof SessionCart) {
 	$_SESSION['cart'] = new SessionCart();
 }
>>>>>>> 7879c836c8a5ca99f132c5201a4048f1d1631d2e

// include header
include '../app/views/header.php';

// Instatiates a new app, i.e the whole page
$app = new App;

// include footer
include '../app/views/footer.php';

var_dump($_SESSION);



