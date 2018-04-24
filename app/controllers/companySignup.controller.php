<?php

/**
* 
*/
class Company_signup extends Base_controller
{
	
	public function index() {

        // här kallar vi på vår model 
        $this->initModel('CompanySignup_model');
        // här kallar vi på metoder i den instanserade modeln
        $this->modelObj->companySignup();
        // kallar på rätt view
        $this->reqView('companysignup');
    }
}