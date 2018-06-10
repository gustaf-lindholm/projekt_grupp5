<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

<?php
if (isset($_POST['orderPayment']['type']) && $_POST['orderPayment']['type'] == 'CreditCard') {
?>
<h2>Credit Card Information</h2>
<select class="form-control" name="order[payment_type]">
        <option value="Visa">Visa</option>
        <option value="2">Mastercard</option>
        <option value="3">American express</option>
</select>

    
<div>
        <label>
            <span>Card Number</span>
        </label>
        <input type="text" size="20" name="payment[card][number]" value="" autocomplete="off" required />
</div>

<div>
<label>
    <span>Expiration Date (MM/YYYY)</span>
</label>
<input type="text" size="2" id="expMonth" name="payment[card][month]" required />
<span> / </span>
<input type="text" size="2" id="expYear" name="payment[card][year]" required />
</div>


<div>
        <label>
            <span>CVC</span>
        </label>
        <input id="cvv" size="4" type="text" value="" name="payment[card][cvv]" autocomplete="off" required />
</div>

<input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
<input type="submit" value="Proceed"/>

<?php
} 

if (isset($_POST['orderPayment']['type']) && $_POST['orderPayment']['type'] == 'PayPal') {
    ?>
    <h2>Pay with PayPal</h2>
    <input id="token" name="token" type="hidden" value="">
    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="">Email Adress: </label>
                        <input type="email" class="form-control" name="payment[paypal][email]" value="<?php echo $email_Address?>" placeholder="<?php echo $email_Address?>" id="resultOfEmailAddress" size="50" required/>
    </div>

                        <div class="form-group col-md-6">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <input type="password" name="payment[paypal][pass]" placeholder="Password">
                        </div>
    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" value="Login"/>
</form>
<?php
}

if (isset($_POST['orderPayment']['type']) && $_POST['orderPayment']['type'] == 'Klarna') {
?>
  <div class="form-group col-md-6">
                        <label for="">Email Adress: </label>
                        <input type="email" class="form-control" name="payment[klarna][email]" value="<?php echo $email_Address?>" placeholder="<?php echo $email_Address?>" id="resultOfEmailAddress" size="50" required/>
     </div>
 
     <div class="control-group">
    				<label for="" class="control-label">	
    					Zip Code
    			<input name="payment[klarna][zip]" type="text" id="zip"/>
                </label>
    			</div>
     
    			<div class="control-group">
    				<label for="" class="control-label">	
    					City
    				<input name="payment[klarna][city]"  type="text" id="city">
    				</label>
    </div>

    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" value="Pay"/>
    <?php
}
?>
</form>