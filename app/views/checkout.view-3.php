<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>
<?php
//Zip input must be a number
$zip = filter_input(INPUT_POST, 'order[zip]', FILTER_VALIDATE_INT);
if($zip == false) {
	//print "Submitted zip is wrong";
}

?>

<div class="container">
			<div class="mb-3 control-group">

              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="order[street_address_1]" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

			<br>
            <div class="mb-3 control-group">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" name="order[street_address_2">
            </div>


			<br>
              <div class="control-group col-md-3 mb-3">
                <label for="zip" class="control-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="order[zip]" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
			</div>

			<div class="control-group col-md-3  mb-3">
			  <label for="order[city]" class="control-label">	
				  City </label>
			  <input name="order[city]" class="form-control" type="text" id="city" required>
			  <div class="invalid-feedback">
                  City required.
                </div>
		 	 </div>
		
			<!--
    			<div class="control-group">
    				<label for="order[street_address]" class="control-label">	
    					Street Address
    				<input name="order[street_address]"  type="text"  id="address"/>
    				</label>
    			</div>
     
    			<div class="control-group">
    				<label for="order[zip]" class="control-label">	
    					Zip Code
    			<input name="order[zip]" type="text" id="zip"/>
                </label>
    			</div>
     
    			<div class="control-group">
    				<label for="order[city]" class="control-label">	
    					City
    				<input name="order[city]" type="text" id="city">
    				</label>
				</div>
-->
<br>
<div class="control-group">			
<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" class="btn btn-success form-control" value="Continue"/>
</div>
</div>
</form>
    		