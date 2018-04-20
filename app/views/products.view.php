<?php
require_once('Products.model.php'); 
?>
 
<link rel="stylesheet" href="css/products.css" type="text/css"/>
<div class="container">
        <?php
        foreach ($data as $product) {
            $properties = explode("/", $product['properties']);
            echo "<div class='prodBox'>";
            echo "<h1>" . $product['title'] . "</h1>";
            printf("<img class='prodImg' alt='%s' src='%s'>", $product['title'], $product['img_url']);
            echo "<ul>";
            foreach ($properties as $value) {
                printf("<li>%s</li>", ucfirst($value));

            }
            echo "</ul></div>";
        }

        ?>    
</div>