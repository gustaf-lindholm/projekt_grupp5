<?php

//Figure out what stage to use: post or get
if(($_SERVER['REQUEST_METHOD'] == 'GET') || (! isset($_POST['stage']))) {
    $stage = 1;
}else {
    $stage = (int) $_POST['stage'];
}

//Make sure the number of stage isn't too big or too small
$stage = max($stage, 1);
$stage = min($stage, 4);

//Save any submitted data
if ($stage > 1) {
    foreach ($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
}

include __DIR__."/checkout.view-$stage.php";


echo "<div class='col-md-12'><pre>";
var_dump($_SESSION);
var_dump($_POST['order']);
echo "</pre>";

?>
