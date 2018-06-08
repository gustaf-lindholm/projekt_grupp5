<form action="<?= URLrewrite::BaseURL().'checkout'?>" method='post'>
<?php include __DIR__."/checkout_details.view.php"; ?>

  <div id="paymentMethod" class="col-md-12">
    
    <h1> Betalningsalternativ </h1>
        <div>
    <form method="post" action="<?php echo URLrewrite::BaseURL().'payment'?>">
        <label>
        <input type="radio" class="option-input radio" name="client[radio]" value="payPal"> PayPal
            </label><br>
        <label>
        <input type="radio" class="option-input radio" name="cient[radio]" value="klarna"> Klarna</label><br>
        <label>
        <input type="radio" class="option-input radio" name="cient[radio]" value="KreditKort"> Kreditkort</label>
          </div>
       

        <select class="form-control" name="client[type]" id="creditCardInfo" >
        <option selected>Kreditkortstyp</option>
        <option value="1">Visa</option>
        <option value="2">Mastercard</option>
        <option value="3">American express</option>
        </select>

    
 <input type="creditCard" class="form-control" placeholder="Kreditkortnummer" name="creditCard"/> 
  <div class="form-row align-items-center">
    <div id="creditCardOption" class="col-md-3">       
      <select  class="form-control" class="custom-select mb-2 mr-sm-2 mb-sm-0" name="client[month]" id="inlineFormCustomSelect">
        <option selected>Månad</option>
        <option value="1">Decemberg</option><option value="2">Januari</option><option value="3">Februari</option><option value="4">Mars</option><option value="5">April</option><option value="6">Maj</option><option value="7">Juni</option><option value="8">Juli</option><option value="9">Augusti</option><option value="10">September</option><option value="11">Oktober</option><option value="12">November</option>
      </select>
    
   
  </div>
  <div class="form-row align-items-center">
    <div id="creditCardOption" class="col-md-9">       
      <select class="form-control" class="custom-select mb-2 mr-sm-2 mb-sm-0" name="client[year]" id="inlineFormCustomSelect">
        <option selected>År</option>
        <option value="1">2017</option><option value="2">2018</option><option value="3">2019</option><option value="4">2020</option><option value="5">2021</option><option value="6">2022</option>
      </select><br>
    </div>
   
    <input type="hidden" name="stage" value="<?= $stage + 1 ?>"/>
    <input type="submit" value="Done"/>
    </form>