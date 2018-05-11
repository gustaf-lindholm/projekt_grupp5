<?php

/**
* 
*/
class Cart extends Base_Controller
{
	
	public function cart() 
	{
		// instansiate new model using the function built in from the Base Controller
        $this->initModel('Cart_model');

        //We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->cartItems();

        //This will be shown on our products page
        $this->reqView('Cart', $data);
	}
}