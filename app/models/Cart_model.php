<?php

/**
* 
*/
class Cart_model extends Base_model
{
	
	public function showCart()
	{	
		$prodList = $_SESSION['cart']->getProdList();
		$count = count($prodList);
        $i = 0;
        $this->sql = 
        "SELECT variant_values.product_id, variant_values.variant_id, product.title, product.info, product.manufacturer,
       product_variants.price, group_concat(DISTINCT value_name order by option_values.option_id separator '/') AS properties, product_variants.sku, product_variants.img_url
       FROM projekt_klon.option_values
       INNER JOIN variant_values ON variant_values.value_id = option_values.value_id
       INNER JOIN product ON product.pid = variant_values.product_id
       INNER JOIN product_variants ON product_variants.product_id = variant_values.product_id
       WHERE product_variants.variant_id = variant_values.variant_id
       AND product_variants.sku IN (";
        
        //loop trough the submitted vaulues to create an sql-query string
        foreach ($prodList as $sku => $amount) {
            
            $this->sql .= "'".$sku."'";

            //skip the , after the last element in the $data['variant] array
            if (++$i === $count) {
                $this->sql .= " ";
            } else {
                $this->sql .= ", ";
                
            }

        }
        $this->sql .= ") GROUP BY product_variants.sku";
		$paramBinds = [':sku' => $sku];
        
        $this->prepQuery($this->sql, $paramBinds);
		
		$this->getAll();
		$x = 0;
		foreach ($prodList as $skus => $amount) {
			//var_dump($skus);
			if (self::$data[$x]['sku'] === $skus) {
					//var_dump($sku);
					self::$data[$x]['amounts'] = $amount;
					++$x;
				}
		}
		//var_dump(self::$data[0]);
		return self::$data;
	}

	public function add($amount = 1) {
		// binder post-datan till variabeln
		$sku = $_POST['sku'];
		//ställer sql fråga till db för att kolla om sku'n finns i db
		$this->sql = "SELECT count(*) FROM projekt_klon.product_variants WHERE product_variants.sku = :sku";
		$paramBinds = [':sku' => $sku];
        $this->prepQuery($this->sql, $paramBinds);
        $data = $this->getAll();

		// Om svaret > 0 så finns produkten i databasen, lägg då till den i carten!
		if ($data > 0) {
			$_SESSION['cart']->addProduct($sku, $amount);
		}
	}

	public function removeItem()
	{
		
		$_SESSION['cart']->removeItem($sku, $amount);
		//header("Location: {$_SERVER['HTTP_REFERER']}");
	}

	public function emptyCart() 
	{
		// empty cartarray
		unset($_SESSION['cart']);
	}
}