<?php

/**
* 
*/
class Cart extends Base_Controller
{
	
	public function index() 
	{
		// instansiate new model using the function built in from the Base Controller
        $this->initModel('Cart_model');

        //We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->showCart();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}

	public function add() {
		
		
		$this->modelObj->add($sku);

		header("Location: {$_SERVER['HTTP_REFERER']}");
	}

	public function removeItem()
	{
		//We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->removeItem();

        header("Location: {$_SERVER['HTTP_REFERER']}");
	}

	public function emptyCart()
	{
		//We instansiate cartItems method where we save the new array from session
        $this->modelObj->emptyCart();

        header("Location: {$_SERVER['HTTP_REFERER']}");
	}
}

