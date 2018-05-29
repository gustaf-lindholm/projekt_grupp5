<?php
if(isset($_SERVER['HTTP_REFERER'])) {
  echo $_SERVER['HTTP_REFERER'];
}
?>

<div id="paymentContainer">
        
<div id="flexContainer">
    <div id="yourInformation" class="col-md-6">
	       <form method="POST" action="#">
	        <h1>Ange Leverans Adress</h1>
                        <div class="form-group">
                        <label for="FullName">First Name: </label>
                        <input type="text" name="FullName" class="form-control"  id="resultOfFirstName" placeholder="Förnamn" required>
                        </div>

                        <div class="form-group">
                        <label for="FullName">Sur Name: </label>
                        <input type="text" class="form-control"  id="lastName" placeholder="Efternamn" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="FullName">Telephone: </label>
                        <input type="tel" class="form-control" name="telephoneNumber" placeholder="Telefon nummer" id="resultOfPhoneNumber" size="50" required/>
                        </div>
                        
                        <div class="form-group">
                        <label for="FullName">Email Adress: </label>
                        <input type="email" class="form-control" placeholder="E-mail address" name="email" id="resultOfEmailAddress" size="50" required/>
                        </div>

                        <button type="submit" value="submit" class="btn btn-default btn-success">Next</button>
      </form>
		</div>
    
	<div id="paymentMethod" class="col-md-6">
		
		<h1> Betalningsalternativ </h1>
			  <div style="flex: inline;">
      
        <label>
        <input type="radio" class="option-input radio" name="example" value="payPal" checked> PayPal
            </label><br>

        <label>
        <input type="radio" class="option-input radio" name="example" value="klarna"> Klarna</label><br>
        <label>
        <input type="radio" class="option-input radio" name="example" value="KreditKort"> Kreditkort</label>
		 
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
  </div>