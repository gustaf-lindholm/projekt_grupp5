<html>
<head>
<title> <?php echo $data[0]['fname']; ?>'s page</title> <!-- prints out the users surname, is currently overrided with the header.php file -->
<link rel="stylesheet" href="css/account.css" type="text/css"/>
</head>
<div class="container">

<?php

if(!isset($_SESSION['loggedIn']['uid'])){ //if login in session is not set, return to index-page
    header("Location: index.php");
}

//var_dump($data);

//Users title 

printf("<h1 class='text-uppercase text-center'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname

?>

<a class="btn btn-primary" href="/projekt_grupp5/public/account/">My details</a> <a class="btn btn-primary" href="/projekt_grupp5/public/orderhistory">My Order History</a> <!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::BaseURL().'updateuser' ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="<?php echo URLrewrite::BaseURL().'changepassword' ?>" class="btn btn-primary">Change password</a>

<!--- Page info for the users account -->

<h3 class="text-center">Change password </h3> <br>

<div class="form-group">
    <label for="">New password</label>
    <input type="password" class="form-control" id="" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>

</body>

</html>