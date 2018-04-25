<html>
<head>
<title> <?php echo $data[0] ['fname']; ?>'s page</title> <!-- prints out the users surname, is currently overrided with the header.php file -->
<link rel="stylesheet" href="css/account.css" type="text/css"/>
</head>
<div class="container">

<?php

var_dump($data);

printf("<h1 class='personTitle'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname

?>

<a class="btn btn-primary" href="/projekt_grupp5/public/account/">My details</a> <a class="btn btn-primary" href="/projekt_grupp5/public/orderhistory">My Order History</a> <!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::URL('updateuser') ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="" class="btn btn-primary">Change password</a>
<p>Here is the page and info for the users account </p>

<?php 

    /*printf($data[0] ['fname']);
    printf($data[0] ['lname']);
    printf($data[0] ['phone']);
    printf($data[0] ['email']); */

    $i = 0; 
    foreach ($data[0] as $key => $value) {
        if ($i++ < 2) { //ignores the first two values in the $data[0]-array 
            continue;
        } 

        print("<ul><li></li></ul> {$value} "); 

    }


    //printf("<ul><li>%s: %s</li></ul>", $key, $value); 

?>




<p> Delete account - removes the user from the database </p>

<form class='delete-form' method='POST' action=''".deletePerson()."''>
<button>Delete Account</button>
</form>
        
<!--<a href="" class="smbutton">Delete account</a> -->

</div>
