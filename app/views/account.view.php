<style>

.container {
    text-align: center;
}

.personTitle {
    text-align: center;

}

.button {
    background-color: #000000;/* Black */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;

}

.smbutton {
    background-color: #afacac;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
}

</style>

<html>
<head>
<title> <?php echo $data[0] ['fname']; ?>'s page</title> <!-- prints out the users surname -->
</head>
<div class="container">

<?php

var_dump($data);

printf("<h1 class='personTitle'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname

?>

<a class="button" href="/projekt_grupp5/public/account/">My details</a> <a class="button" href="/projekt_grupp5/public/myorderhistory">My Order History</a> <!-- here is the options between the users account and order history -->

<p>Here is the page and info for the users account </p>

<p> Here shall the user-form be with an update/submit to the database to the user table, use GET-form </p>

<?php

    foreach ($data[0] as $key => $value) {

        print("<ul><li></li></ul> {$value} "); 
    }

    //printf("<ul><li>%s: %s</li></ul>", $key, $value); 

?>



<p> Small form (two rows) for the change of password the update/submit button change the account password table, use GET-form</p>

<a href="" class="smbutton">Change password</a>

<p> Delete account - removes the user from the database </p>

<form class='delete-form' method='POST' action=''".deletePerson()."''>
<button>Delete Account</button>
</form>
        
<!--<a href="" class="smbutton">Delete account</a> -->

</div>
