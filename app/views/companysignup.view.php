<?php
var_dump(URLrewrite::BaseURL().'signup/createNewAccount');
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="<?php echo URLrewrite::BaseURL().'signup/createNewAccount'?>" method="POST">
			<label for="company-input">Company <span class="text-danger">*</span></label>
			<input type="text" name="[submit][company]" placeholder="Company">
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
			<input type="text" name="[submit][password]" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
			<select>
			  <option value="[level_id][2]">Employee</option>
			  <option value="[level_id][3]">Admin</option>
			</select>
		</form>
	</div>
</section>