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

		// Hämta alla produkter som finns i $_SESSION['cart']
		// $_SESSION['cart']->getPidList();

//		$sql = SELECT * FROM products WHERE pid IN (1,45,89,123);

//		$sql = SELECT * FROM products WHERE pid IN ($_SESSION['cart']->getPidList());
	
	}

	public function add($pid, $amount = 1) {

		// SELECT count(*) FROM products WHERE pid = :pid

		// Om svaret > 0 så finns produkten i databasen, lägg då till den i carten!

		$_SESSION['cart']->addProduct($pid, $amount);
	}

	public function updateCart()
	{
		// take post data and insert to session-array
		var_dump($_SESSION['cartItem']);
	}

	public function updateAmount()
	{
		// update the total amount, might be added to updateCart()
	}

	public function deleteItem($pid)
	{
		if (isset($_SESSION['cartItem']['pid'])) {
			# code...
		}
	}

	public function deleteAllItems()
	{
		// delete all items from session array
	}
}