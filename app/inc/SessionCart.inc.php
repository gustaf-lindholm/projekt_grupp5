<?php
/**
* Class that manges list of PIDs in Session
*/
class SessionCart {
	private $products = [];

	public function addProduct($sku, $amount = 1) 
	{
	
<<<<<<< HEAD
		if (array_key_exists($sku, $this->products)) {
			$this->products[$sku] += $amount;
		} else {
			$this->products[$sku] = $amount;
		}
=======
		// if (array_key_exists($pid, $this->products) {
		// 	$this->products[$pid] += $amount;
		// } else {
		// 	$this->products[$pid] = $amount;
		// }


>>>>>>> 270f7f359f363fc2aa1339f5f213b11309ecdd04
	}	

	public function remove($sku) 
	{
		unset($this->products[$sku]);
	}
}
