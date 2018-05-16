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
        $data = $this->modelObj->cartItems();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}

	public function updateCart()
	{
		//We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->updateCart();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}

	public function updateAmount()
	{
		//We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->updateAmount();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}

	public function deleteItem()
	{
		//We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->deleteItem();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}

	public function deleteAllItems()
	{
		//We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->deleteAllItems();

        //This will be shown on our cart page
        $this->reqView('Cart', $data);
	}
}