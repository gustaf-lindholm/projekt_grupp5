<?php
class Companysignup extends Base_controller
{
	
	public function index() {

        // här kallar vi på vår model 
        $this->initModel('companysignup_model');
        // här kallar vi på metoder i den instanserade modeln
        $this->modelObj->companysignup();
        // kallar på rätt view
        $this->reqView('companysignup');
    }
}