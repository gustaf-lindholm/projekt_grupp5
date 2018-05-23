<?php
/**
* Class that manges list of PIDs in Session
*/

class SessionCart {
	private $products = [];

	public function add($pid, $amount = 1) {
	
		// if (array_key_exists($pid, $this->products) {
		// 	$this->products[$pid] += $amount;
		// } else {
		// 	$this->products[$pid] = $amount;
		// }


	}	

	public function remove($pid) {
		unset($this->products[$pid]);
	}
}