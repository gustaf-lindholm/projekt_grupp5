<?php
//var_dump($data);
echo "<br>";
//var_dump($_SESSION);
if(isset($_SERVER['HTTP_REFERER'])) {
  //echo $_SERVER['HTTP_REFERER'];
}
//var_dump($_SESSION);
if(isset($_SESSION['loggedIn']))
{
  $first_name = $data[0]['fname'];
  $last_name = $data[0]['lname'];
  $telephone_Number = $data[0]['phone'];
  $email_Address = $data[0]['email'];
?>

<div><h1>Hi, <?php 
  echo $_SESSION['loggedIn']['username']?>
  ! <br>The total amount of your order:
</h1></div>

<?php
}
else
{
printf("<div><h1>Hi, Customer!<br>The total amount of your order:</h1></div>");
$first_name = "";
$last_name = "";
$telephone_Number = "";
$email_Address = "";
}

var_dump($_SESSION['cart']);
if($_SESSION['cart']) {
  echo "You have items in your cart!";
}else {
  echo "Please select a product of purchase first";
}
?>

<?php
var_dump($_POST);

?>

<div id="paymentContainer">
        
<div id="flexContainer">
    <div id="yourInformation" class="col-md-12">
	       <form method="POST" action="#" name="first">
	        <h1>Fill in Your Information</h1>
                        <div class="form-group">
                        <label for="first_Name">First Name: </label>
                        <input type="text" name="first_Name" class="form-control" value="<?php echo $first_name?>" id="resultOfFirstName" placeholder="<?php echo $first_name?>"  required>
                        </div>

                        <div class="form-group">
                        <label for="last_Name">Sur Name: </label>
                        <input type="text" class="form-control"  name="last_Name" id="lastName" value="<?php echo $last_name?>" placeholder="<?php echo $last_name?>"  required>
                        </div>
                        
                        <div class="form-group">
                        <label for="telephone_Number">Telephone: </label>
                        <input type="tel" class="form-control" name="telephone_Number" value="<?php echo $telephone_Number?>" placeholder="<?php echo $telephone_Number?>"  id="resultOfPhoneNumber" size="50" required/>
                        </div>
                        
                        <div class="form-group">
                        <label for="email_Address">Email Adress: </label>
                        <input type="email" class="form-control" name="email_Address"  value="<?php echo $email_Address?>" placeholder="<?php echo $email_Address?>" id="resultOfEmailAddress" size="50" required/>
                        </div>
                        <input type="checkbox" name="new_Account" value="consent">Create an account</input>
                        <br>
                        <button type="submit" value="first" name="first_form" class="btn btn-default btn-success">Next</button>
      </form>
		</div>
    

    <?php
      if(isset($_POST['new_Account'])) {
    ?>
      <div id="yourAccountInformation" class="col-md-12">
	    <form method="POST" action="#" name="second">
	    <h1>Fill in Your account Information</h1>
      <label for="username-input">Username <span class="text-danger">*</span></label>
			<input type="text" name="user[username]" placeholder="Username">
			<label for="password-input">Password <span class="text-danger">*</span></label>
      <input type="password" name="user[password]" placeholder="Password">
      <button type="submit" value="second" name="second_form" class="btn btn-default btn-success">Next</button>
      </form>
      <div>
      <?php
      }
      if(isset($_POST['second_form']) )
     {
      ?>

  
	<div id="paymentMethod" class="col-md-12">
		
		<h1> Betalningsalternativ </h1>
			  <div>
      
        <label>
        <input type="radio" class="option-input radio" name="radio" value="payPal" checked> PayPal
            </label><br>
        <label>
        <input type="radio" class="option-input radio" name="radio" value="klarna"> Klarna</label><br>
        <label>
        <input type="radio" class="option-input radio" name="radio" value="KreditKort"> Kreditkort</label>
          </div>
       

        <select class="form-control" id="creditCardInfo" >
        <option selected>Kreditkortstyp</option>
        <option value="1">Visa</option>
        <option value="2">Mastercard</option>
        <option value="3">American express</option>
        </select>

    
 <input type="creditCard" class="form-control" placeholder="Kreditkortnummer" name="creditCard"/> 
	<div class="form-row align-items-center">
    <div id="creditCardOption" class="col-md-3">			 
      <select  class="form-control" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>Månad</option>
        <option value="1">Decemberg</option><option value="2">Januari</option><option value="3">Februari</option><option value="4">Mars</option><option value="5">April</option><option value="6">Maj</option><option value="7">Juni</option><option value="8">Juli</option><option value="9">Augusti</option><option value="10">September</option><option value="11">Oktober</option><option value="12">November</option>
      </select>
    
   
  </div>
  <div class="form-row align-items-center">
    <div id="creditCardOption" class="col-md-9">			 
      <select class="form-control" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>År</option>
        <option value="1">2017</option><option value="2">2018</option><option value="3">2019</option><option value="4">2020</option><option value="5">2021</option><option value="6">2022</option>
      </select><br>
    </div>
   
  </div>

  <?php
    }
    ?>

</div>