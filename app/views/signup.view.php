<?php
var_dump(URLrewrite::BaseURL().'signup/createNewAccount');
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="<?php echo URLrewrite::BaseURL().'signup/createNewAccount'?>" method="POST">
			<input type="hidden" name="[submit][level_id]" value="1">
			<label for="firstname-input">Firstname <span class="text-danger">*</span></label>
			<input type="text" name="[submit][fname]" placeholder="Firstname">
			<label for="lastnamename-input">Lastname <span class="text-danger">*</span></label>
			<input type="text" name="[submit][lname]" placeholder="Lastname">
			<label for="email-input">Email <span class="text-danger">*</span></label>
			<input type="text" name="[submit][email]" placeholder="E-mail">
			<label for="telephone-input">Telephone <span class="text-danger">*</span></label>
			<input type="text" name="[submit][phone]" placeholder="Telephone">
			<label for="username-input">Username <span class="text-danger">*</span></label>
			<input type="text" name="[submit][username]" placeholder="Username">
			<label for="password-input">Password <span class="text-danger">*</span></label>
			<input type="password" name="[submit][password]" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
