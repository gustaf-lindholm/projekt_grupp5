<body>    
    <div id="mainContainer">
       <h2 class="titleCart">Varukorg</h2>
        <div id="cartContainer">
            <?php
            $data[] = unserialize($_POST['cartItem']);
            $_SESSION['cartItem'] = $data;
            var_dump($_SESSION['cartItem']);
            echo "<br><br>";
            foreach ($_SESSION['cartItem'] as $key => $product) {
                echo "<div id='prodContainer' class='%s'>", $product['pid'];
                echo "<div id='prodImg'>";
                printf("<img class='prodImg' alt='%s' src='%s'>", $product['manufacturer']." ".$product['title'], $product['img_url']);
                echo "</div>";
                echo "<div id='prodInfo'>";
                print_r($product['manufacturer']." ".$product['title']);
                print_r($product['property']);
                echo "Shipping within 2-3 days";
                echo "</div>";
                echo "<div id='prodPrice'>";
                print_r($product['price']);
                echo "</div>";
                echo "<div id='prodAmount'>";
                printf("<form action='%s' method='POST'>", URLrewrite::BaseURL().'cart/updateCart');
                printf("<input type='number' value='1'>");
                printf("<button type='submit'>Update</button>");
                printf("</form>");
                echo "</div>";
                echo "<div id='deleteItem'>";
                printf("<form action='%s' method='POST'>", URLrewrite::BaseURL().'cart/deleteItem');
                printf("<button type='submit' name='%s'>Delete</button>", $product['pid']);
                printf("</form>");
                echo "</div>";
                echo "</div>";
            }
            
            ?>
        </div>
            <div id="orderInfo">
                <div id="totalAmount">
                    <span>TOTALT:<?php print_r($product['price']); ?></span><span id="showSum"></span>
                </div>
                <div id="confirmCart">
                    <button type="button">GÅ TILL KASSAN</button>
                    <article>
                       Terms & conditions
                    </article>
                </div>
            </div>
        </div>
    </div>	
</body>