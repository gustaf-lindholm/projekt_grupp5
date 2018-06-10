<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>
<h2>Create an account with us, friends!</h2>

                            <label for="username-input">Username <span class="text-danger">*</span></label>
                            <input type="text" name="member[username]" placeholder="Username">
                            <label for="password-input">Password <span class="text-danger">*</span></label>
                            <input type="password" name="member[password]" placeholder="Password">


<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Create"/>
</form>