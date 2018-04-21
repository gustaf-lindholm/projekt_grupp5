<?php
ob_start();
require_once '../app/inc/autoloader.inc.php';

session_start();

// includerar init.php som 'startar' sidan

require_once '../app/init.php';

<<<<<<< HEAD

include_once '../app/views/header.php';


//WHY?
$app = new App;
=======
// include header
include '../app/views/header.php';
>>>>>>> a077b0f7416c0034854a307fc64f83b7903e623f

// Instatiates a new app, i.e the whole page
$app = new App;

<<<<<<< HEAD
include '../app/views/footer.php';



=======
// include footer
include '../app/views/footer.php';
>>>>>>> a077b0f7416c0034854a307fc64f83b7903e623f



