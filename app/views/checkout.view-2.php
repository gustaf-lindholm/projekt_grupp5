<form class="signup-form form-signin" action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

<?php
if(isset($_POST['user']['consent_Checkbox']) && $_POST['user']['consent_Checkbox']="new_Member") {
?>

        

<section class="main-container text-center">
	<div class="main-wrapper">
	<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Create an account with us</h1>

    <input type="hidden" name="member[level_id]" value="1">
        <label for="member[username]" class="sr-only">Username <span class="text-danger">*</span></label>
			<input type="text" class="form-control" name="member[username]" placeholder="Username"  required autofocus>
			<label for="member[password]" class="sr-only">Password <span class="text-danger">*</span></label>
			<input type="password" name="member[password]" class="form-control" placeholder="********" required>
			<div class="checkbox mb-3">
			<label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
	</div>
</section>

<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Create"/>

<?php
}else{
?>

<h2>Click here to continue</h2>
    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Continue"/>
</form>

<?php
}
?>