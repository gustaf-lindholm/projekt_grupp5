<html>
<head>
<title> <?php echo $data[0] ['fname']; ?>'s page</title> <!-- prints out the users surname, is currently overrided with the header.php file -->
<link rel="stylesheet" href="css/account.css" type="text/css"/>
</head>
<div class="container">

<?php

var_dump($data);

//Users title 

printf("<h1 class='text-uppercase text-center'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname

?>

<a class="btn btn-primary" href="/projekt_grupp5/public/account/">My details</a> <a class="btn btn-primary" href="/projekt_grupp5/public/orderhistory">My Order History</a> <!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::URL('updateuser') ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="" class="btn btn-primary">Change password</a>

<!--- Page info for the users account -->

<h3 class="text-center">Account Details </h3> <br>

<?php 

    printf("<ul><li class='list-unstyled'>Firstname: %s</li></ul>", $data[0] ['fname']);
    printf("<ul><li class='list-unstyled'>Lastname: %s</li></ul>", $data[0] ['lname']);
    printf("<ul><li class='list-unstyled text-center'>Phone: %s</li></ul>", $data[0] ['phone']);
    printf("<ul><li class='list-unstyled'>Email: %s</li></ul>", $data[0] ['email']);

    /*$i = 0; 
    foreach ($data[0] as $key => $value) {
        if ($i++ < 2) { //ignores the first two values in the $data[0]-array 
            continue;
        }         
        //print("<ul><li></li></ul> {$value} "); 

    }*/

?>

<!-- DELETE ACCOUNT BUTTON -->

<a href="<?php echo URLrewrite::BaseURL()."Account/deletePerson"."/".$_SESSION['loggedIn']['uid'] ?>">Delete</a>

<!--<form class='delete-form' method='POST' action=''".deletePerson()."''>
<input type="submit" class="btn btn-danger" placeholder="Delete account"></input>
</form>

<form method="POST" onsubmit="return confirm('Are you sure you want to delete this account?');">
    <input type="hidden" name="_METHOD" value="DELETE">
    <input type="hidden" name="uid" value="<?php echo $uid; ?>"> 
    <button class="btn btn-danger" type="submit">Delete Account</button> <!-- https://stackoverflow.com/questions/16962280/delete-button-and-confirmation -->
</form> 
        
<!--<a href="" class="smbutton">Delete account</a> -->

</div>
