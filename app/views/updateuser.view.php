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


<?php 

if(Registry::getStatus() !== null && Registry::getStatus('UpdateUser') == true)
   {
       echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">User updated!</div>';

   } elseif (Registry::getStatus('UpdateUser') == false) {
       echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to update user!</div>';
   } 

	$uid = $_SESSION['loggedIn']['uid'];
	
	//var_dump($data);

if (isset($_POST['submit'])) { 
    //echo "test";

    //check fields
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
	$phone = ($_POST['phone']);
	$email = ($_POST['email']);

	//echo "$fname/$lname/$phone/$email";


}

	else {

	echo 
	"<div class='form-group'>
    <form action='".URLrewrite::BaseURL().'updateuser/Update/'.$uid."' method='POST'>
    <label for=''>Firstname</label>
    <input type='text' class='form-control' id='' name='fname' placeholder='". $data[0]['fname']."'>
    <label for=''>Lastname</label>
    <input type='text' class='form-control' id='' name='lname' placeholder='". $data[0]['lname']."'>
    <label for=''>Phonenumber</label>
	<input type='text' class='form-control' id='' name='phone' placeholder='". $data[0]['phone']."'>
	<label for=''>Email</label>
	<input type='text' class='form-control' id='' name='email' placeholder='". $data[0]['email']."'>
  <input type='submit' class='btn btn-primary' name='submit' value='Update'>
  </div>
  </form>";
	}




        
        /* $UserForm = new Form();
        $UserForm->textInput('updateU[firstname]','Firstname');
        $UserForm->textAreaInput('updateU[lastname]','Lastname');
        $UserForm->numInput('updateU[phone]','Phonenumber');
        $UserForm->emailInput('updateU[email]','Email');
        $UserForm->button('Save');
        $action = URLrewrite::BaseURL('UpdateUser');
        $UserForm->render($action,'Change User Information', 'g-form'); 
		*/
		
        ?>  