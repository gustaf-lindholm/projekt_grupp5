<?php
/**
* Class that manges list of PIDs in Session
*/
class SessionCart {
	private $products = [];

	public function addProduct($sku, $amount = 1) 
	{
	
		if (array_key_exists($sku, $this->products)) {
			$this->products[$sku] += $amount;
		} else {
			$this->products[$sku] = $amount;
		}
	}	

	public function remove($sku) 
	{
		unset($this->products[$sku]);
	}
}
