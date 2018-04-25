<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="../app/models/Login_model.php" method="POST">
			<label for="username-input">Username <span class="text-danger">*</span></label>
			<input type="text" name="[submit][username]" placeholder="Username">
			<label for="password-input">Password <span class="text-danger">*</span></label>
			<input type="password" name="[submit][password]" placeholder="********">
			<button type="submit" name="submit">Login</button>
			<a href="<?php echo URLrewrite::BaseAdminURL('signup/index')?>" class="btn btn-link">Not a member? Signup here</a>
		</form>
	</div>
</section>