<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>
<?php
//Zip input must be a number
$zip = filter_input(INPUT_POST, 'order[zip]', FILTER_VALIDATE_INT);
if($zip == false) {
	print "Submitted zip is wrong";
}
?>
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
    			
<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Continue"/>
</form>
    		