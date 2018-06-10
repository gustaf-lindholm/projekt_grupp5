<?php
/**
* Class that manges list of SKUs in Session
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

	public function getProdList()
	{
		return $this->products;
	}

	public function removeItem($sku, $amount) 
	{
		unset($this->products[$sku]);
	}

	public function emptyCart($sku, $amount) 
	{
		unset($this->products[$sku]);
	}
}
