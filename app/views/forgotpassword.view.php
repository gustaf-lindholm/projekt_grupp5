<?php

if (isset($_POST['submit']))

//$message = 'Email:' . $_POST['email'];

//echo $message;


?>


<h3 class ='text-center'>Enter the Email of Your Account to Reset New Password</h3><br>

<div class='form-group text-center'>

<form action="<?php echo URLrewrite::BaseURL().'forgotpassword/resetPassword/'?>"  method='POST'>
<input type='email' name='forgot[email]' required placeholder='Please enter your email'>
<div class='send-button'>
<br>
<input type='submit' class='btn btn-primary' name='submit' value='RESET'>
</div>

</form>
</div>