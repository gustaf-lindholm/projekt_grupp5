<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

<h1>Fill in Your Information</h1>
<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user[first_Name]">Firstname: </label>
                        <input type="text" name="user[first_Name]" class="form-control" value="<?php echo $first_name?>" id="resultOfFirstName" placeholder="<?php echo $first_name?>"  required>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="user[last_Name]">Surname: </label>
                        <input type="text" class="form-control"  name="user[last_Name]" id="lastName" value="<?php echo $last_name?>" placeholder="<?php echo $last_name?>"  required>
                        </div>
</div>

<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user[email_Address]">Email Adress: </label>
                        <input type="email" class="form-control" name="user[email_Address]"  value="<?php echo $email_Address?>" placeholder="<?php echo $email_Address?>" id="resultOfEmailAddress" size="50" required/>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="user[telephone_Number]">Telephone: </label>
                        <input type="tel" class="form-control" name="user[telephone_Number]" value="<?php echo $telephone_Number?>" placeholder="<?php echo $telephone_Number?>"  id="resultOfPhoneNumber" size="50" required/>
                        </div>
</div>


<!-- <div  class="checkbox">
                        <label for="user[consent_Checkbox]">
                        <input type="checkbox" name="user[consent_Checkbox]" id="consent_Checkbox" data-toggle="toggle">
                        Create an account
                        </label>
</div> -->

<?php 
if(isset($_SESSION['loggedIn'])) {
?>
    <input type="hidden" name="stage" value="<?= $stage + 2 ?>"/>
    <input type="submit" value="Next"/>
    </form>
<?php
}else{
?>
<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Next"/>
</form>
<?php 
}
?>