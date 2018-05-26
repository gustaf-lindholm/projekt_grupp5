<?php

/**
* 
*/
class Cart_model extends Base_model
{
	
	public function showCart($sku)
	{
		// Hämta alla produkter som finns i $_SESSION['cart']
		$_SESSION['cart']->getProdList($sku);

		$this->sql = 
        "SELECT variant_values.product_id, variant_values.variant_id, product.title, product.info, product.manufacturer,
       product_variants.price, group_concat(DISTINCT value_name order by option_values.option_id separator '/') AS properties, product_variants.sku, product_variants.img_url
       FROM projekt_klon.option_values
       INNER JOIN variant_values ON variant_values.value_id = option_values.value_id
       INNER JOIN product ON product.pid = variant_values.product_id
       INNER JOIN product_variants ON product_variants.product_id = variant_values.product_id
       WHERE product_variants.variant_id = variant_values.variant_id
       AND product_variants.sku IN (':sku')
       GROUP BY product_variants.sku";

		/*"SELECT * FROM projekt_klon.product INNER JOIN projekt_klon.product_variants
		WHERE product.pid = :pid AND product_variants.variant_id = :vid
		AND product_variants.product_id = :pid";*/

        // params to be bound, is sent to the prepQuery method
        $paramBinds = [':sku' => $sku];
        
        $this->prepQuery($this->sql, $paramBinds);

        $this->getAll();

        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;

//		$sql = SELECT * FROM products WHERE pid, vid IN ($_SESSION['cart']->getProdList());
	
	}

	public function add($sku, $amount = 1) {

		$this->sql = "SELECT count(*) FROM products WHERE sku = ':sku'";

		// Om svaret > 0 så finns produkten i databasen, lägg då till den i carten!
		if ($sku > 0) {
			$_SESSION['cart']->addProduct($sku, $amount);
		}
	}
/*
	public function removeItem($sku)
	{
		// delete one item from session array
		unset($_SESSION['cart']->deleteProduct($sku));
	}
*/
	public function emptyCart() 
	{
		// empty cartarray
		unset($_SESSION['cart']);
	}
}