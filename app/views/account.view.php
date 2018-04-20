<html>
<head>
<title> <?php echo $data[0] ['fname']; ?>'s page</title> <!-- prints out the users surname -->
<link rel="stylesheet" href="css/account.css" type="text/css"/>
</head>
<?php 
//include_once 'header.php'
?>
<div class="container">

<?php

var_dump($data);

printf("<h1 class='personTitle'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname

?>

<a class="button" href="/projekt_grupp5/public/account/">My details</a> <a class="button" href="/projekt_grupp5/public/myorderhistory">My Order History</a> <!-- here is the options between the users account and order history -->

<p>Here is the page and info for the users account </p>

<p> Here shall the user-form be with an update/submit to the database to the user table </p>

<?php

foreach ($data[0] as $key => $value) {

    //if($key == 'fname' || $key == 'lname')
    
        continue;
    }

    printf("<ul><li>%s: %s</li></ul>", $key, $value);

?>

<p> Small form (two rows) for the change of password the update/submit button change the account password table</p>

<a class="smbutton">Change password</a>

<p> Delete account - removes the user from the database </p>
        
<a class="smbutton">Delete account</a>

</div>
