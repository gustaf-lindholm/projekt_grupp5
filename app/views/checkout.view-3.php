<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>
     
    			<div class="control-group">
    				<label for="client[address]" class="control-label">	
    					Street Address
    				
    				<input name="client[address]"  type="text"  id="address"/>
    				</label>
    			</div>
     
    			<div class="control-group">
    				<label for="client[zip]" class="control-label">	
    					Zip Code
    			<input name="client[zip]" type="text" id="zip"/>
                </label>
    			</div>
     
    			<div class="control-group">
    				<label for="client[city]" class="control-label">	
    					City
    				<input name="client[city]" type="text" id="city">
    				</label>
    			</div>
    			
<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Continue"/>
</form>
    		