<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="../app/models/Login_model.php" method="POST">
			<label for="username-input">Username/Email <span class="text-danger">*</span></label>
			<input type="text" name="[submit][username]" placeholder="*****">
			<label for="password-input">Password <span class="text-danger">*</span></label>
			<input type="password" name="[submit][password]" placeholder="*****">
			<button type="submit" name="submit">Login</button>
			<a href="<?php echo URLrewrite::URL('signup')?>" class="btn btn-link">Signup</a>
		</form>
	</div>
</section>