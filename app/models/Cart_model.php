<?php

/**
* 
*/
class Cart_model extends Base_model
{
	
	public function cartItems()
	{
		// get the array with chosen product(s) with or without session_username set
		// show product(s) from session
		// alter product(s)
		// save final product list to session
	}

	public function updateCart()
	{
		// update the amount of items
	}

	public function updateAmount()
	{
		// update the total amount, might be added to updateCart()
	}

	public function deleteItem()
	{
		// delete one item from session-array
	}

	public function deleteAllItems()
	{
		// delete all items from session array
	}
}