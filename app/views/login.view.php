<?php
var_dump(URLrewrite::BaseURL().'login/loginUser');
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Login</h2>
		<form class="signup-form" action="<?php echo URLrewrite::BaseURL().'login/loginUser'?>" method="POST">
			<label for="username-input">Username <span class="text-danger">*</span></label>
			<input type="text" name="[submit][username]" placeholder="Username">
			<label for="password-input">Password <span class="text-danger">*</span></label>
			<input type="password" name="[submit][password]" placeholder="********">
			<button type="submit" name="submit">Login</button>
			<a href="<?php echo URLrewrite::BaseURL().'signup'?>" class="btn btn-link">Not a member? Signup here</a>
		</form>
	</div>
</section>