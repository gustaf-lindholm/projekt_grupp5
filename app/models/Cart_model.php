<?php

/**
* 
*/
class Cart_model extends Base_model
{
	
	public function cartItems()
	{
		// get the array with chosen product(s) from session with or without session_username set
		var_dump($_POST['cartItem']);
		$cartItems = $_POST['cartItem'];
		// show product(s) from session
		// alter product(s)
		// save final product list to session
	}
}