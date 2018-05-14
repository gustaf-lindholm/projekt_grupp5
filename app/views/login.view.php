<?php

var_dump($_SESSION['loggedIn']);

//var_dump($_POST);
// echo session_id();
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Login</h2>
		<form class="signup-form" action="<?php echo URLrewrite::BaseURL().'login/loginUser'?>" method="POST">
			<label for="login[username]">Username <span class="text-danger">*</span></label>
			<input type="text" name="login[username]" placeholder="Username">
			<label for="login[password]">Password <span class="text-danger">*</span></label>
			<input type="password" name="login[password]" placeholder="********">
			<button type="submit">Login</button>
			<a href="<?php echo URLrewrite::BaseURL().'signup'?>" class="btn btn-link">Not a member? Signup here</a>
		</form>
	</div>
</section>



