<body>    
    <div id="mainContainer">
       <h2 class="titleCart">Shopping Cart</h2>
        <div id="cartContainer">
            <?php
            //var_dump($_SESSION['cart']->getProdList());
            //$_SESSION['cart']->getProdList($data);
            //var_dump($data);
            var_dump($_SESSION['cart']);
            ?>
            <?php
            foreach ($data as $products => $product) {
                    printf("<div class='col-md-8' id='%s'>", $product['sku']);
                    printf('<div class="col-md-4" id="imgUrl">');
                    printf('<img src="%s" alt="picture" class="col-md-12", "img-fluid prod_img">', $product['img_url']);
                    printf('</div>');
                    printf('<div class="col-md-4" id="prodInfo">');
                    printf('<span>%s<br> %s<br> %s<br> %s<br> %s SEK</span>', $product['manufacturer'], $product['title'], $product['info'], $product['properties'], $product['price']);
                    printf("</div>");
                    printf("<div class='col-md-4', 'removeItem' id='%s'>", $product['sku']);
                    printf('<span class="glyphicon glyphicon-trash"></span>');
                    printf("</div>");
                    printf("</div>");
                } 
            ?>
        </div>
    </div>
            <div id="orderInfo">
                <div id="totalAmount">
                    <span>TOTAL:</span><span id="showSum"></span>
                </div>
                <div id="confirmCart">
                    <button type="button"><a href="<?php echo URLrewrite::BaseURL().'checkout'?>">GO TO PAYMENT</a></button>
                    <article>
                       Terms & conditions
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed orci et ligula dapibus malesuada. Sed ipsum odio, lobortis et tortor id, commodo porta purus. Pellentesque volutpat eros vitae ligula laoreet, nec condimentum turpis venenatis. Vestibulum hendrerit egestas lectus, a viverra velit iaculis sit amet. Integer sit amet nunc eros. Suspendisse interdum luctus turpis, sed consequat turpis dictum vel. Nam scelerisque justo pellentesque dolor molestie commodo. Nulla at sapien aliquet, tincidunt dui eu, consectetur libero. Morbi ac nibh condimentum, gravida elit eu, consequat quam. Nulla bibendum purus sed mi laoreet, sit amet gravida lectus efficitur.
                    </article>
                </div>
            </div>
        </div>
    </div>	
</body>