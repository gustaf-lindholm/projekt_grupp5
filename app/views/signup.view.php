

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="/app/models/Signup_model.php" method="POST">
			<input type="hidden" name="[submit][level_id]" value="1">
			<input type="text" name="[submit][fname]" placeholder="Firstname">
			<input type="text" name="[submit][lname]" placeholder="Lastname">
			<input type="text" name="[submit][email]" placeholder="E-mail">
			<input type="text" name="[submit][phone]" placeholder="Telephone">
			<input type="text" name="[submit][username]" placeholder="Username">
			<input type="text" name="[submit][password]" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
