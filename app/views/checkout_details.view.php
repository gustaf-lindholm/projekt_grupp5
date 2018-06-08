<?php
echo "</pre>";
//If a user is logged in, autofill all her/his info
if(isset($_SESSION['loggedIn']))
{
  //Attach the data to a variable
  $first_name = $data[0]['fname'];
  $last_name = $data[0]['lname'];
  $telephone_Number = $data[0]['phone'];
  $email_Address = $data[0]['email'];
?>

<div>
    <h1>Hi, <?php 
      echo $_SESSION['loggedIn']['username']?>
    ! <br>The total amount of your order:
    </h1>
</div>

<?php
}
else
{
printf("<div><h1>Hi, Customer!<br>The total amount of your order:</h1></div>");
$first_name = "";
$last_name = "";
$telephone_Number = "";
$email_Address = "";
}
?>