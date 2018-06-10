<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

<?php
if(isset($_POST['user']['consent_Checkbox']) && $_POST['user']['consent_Checkbox']="new_Member") {
?>


<h2>Create an account with us, friends!</h2>
                            <input type="hidden" name="member[level_id]" value="1">
                            <label for="member[username]">Username <span class="text-danger">*</span></label>
                            <input type="text" name="member[username]" placeholder="Username">
                            <label for="member[username]t">Password <span class="text-danger">*</span></label>
                            <input type="password" name="member[password]" placeholder="Password">


<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Create"/>
</form>

<?php
}else{
?>

<h2>Click here to continue</h2>
    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" value="Continue"/>
</form>

<?php
}
?>