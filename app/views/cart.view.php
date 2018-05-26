<body>    
    <div id="mainContainer">
       <h2 class="titleCart">Varukorg</h2>
        <div id="cartContainer">
            <?php
                var_dump($_SESSION['cart']);
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