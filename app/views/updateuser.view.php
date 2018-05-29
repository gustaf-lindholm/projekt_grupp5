<!--Users title -->
<?php
printf("<h1 class='text-uppercase text-center'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']); //displays the users surname and lastname
?>

<div class="text-center">
<a  href="<?php echo URLrewrite::BaseURL().'account'?>"><button id="" class="btn btn-primary">My details</button></a> 
<a  href="<?php echo URLrewrite::BaseURL().'orderhistory'?>"><button id="" class="btn btn-primary">My Order History</button></a><!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::BaseURL().'updateuser' ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="<?php echo URLrewrite::BaseURL().'changepassword' ?>"><button class="btn btn-primary updateButton">Change Password</button></a>

<h3>Update <?php echo $data[0] ['fname'] ?>'s Information </h3>


<section class="main-container">
		<form class="update-form" action="<?php echo URLrewrite::BaseURL().'UpdateUser'?>" method="POST">
			<label id="" for="firstname-input">Firstname <span class="text-danger"></span></label>
			<input type="text" name="user[fname]" placeholder="<?php echo $data[0] ['fname'] ?>">
			<label id="" for="lastnamename-input">Lastname <span class="text-danger"></span></label>
			<input type="text" name="user[lname]" placeholder="<?php echo $data[0] ['lname'] ?>">
			<label id="" for="email-input">Email <span class="text-danger"></span></label>
			<input id="emailID" type="text" name="user[email]" placeholder="<?php echo $data[0] ['email'] ?>">
			<label for="telephone-input">Telephone <span class="text-danger"></span></label>
			<input id="phoneID" type="text" name="user[phone]" placeholder="<?php echo $data[0] ['phone'] ?>">
			<button type="submit" class="btn btn-warning" name="submit">Update</button>
		</form>
	</div>
</section>


<?php 

        
        /* $UserForm = new Form();
        $UserForm->textInput('updateU[firstname]','Firstname');
        $UserForm->textAreaInput('updateU[lastname]','Lastname');
        $UserForm->numInput('updateU[phone]','Phonenumber');
        $UserForm->emailInput('updateU[email]','Email');
        $UserForm->button('Save');
        $action = URLrewrite::BaseURL('UpdateUser');
        $UserForm->render($action,'Change User Information', 'g-form'); 
        
        ?>  */