<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

  <div id="paymentMethod" class="container col-md-12">
    
    <h2>Payment details</h2>
  
    <form class="col-md-12" method="post" action="<?php echo URLrewrite::BaseURL().'payment'?>">
      

     <div class="form-row">
    <label class="radio-inline"><input type="radio" name="orderPayment[type]" value="PayPal">Paypal</label>
    <label class="radio-inline"><input type="radio" name="orderPayment[type]" value="Klarna">Klarna</label>
    <label class="radio-inline"><input type="radio" name="orderPayment[type]" value="CreditCard">Credit Card</label>
    </div>
       
   
    <div class="control-group">			
    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" class="btn btn-success form-control" value="Continue"/>
    </div>
</div>
    </form>