<body>    
    <div id="mainContainer">
       <h2 class="titleCart">Varukorg</h2>
        <div id="cartContainer">
            <?php
            //var_dump($sku);
            ?>
        </div>
            <div id="orderInfo">
                <div id="totalAmount">
                    <span>TOTALT:</span><span id="showSum"></span>
                </div>
                <div id="confirmCart">
                    <button type="button"><a href="<?php echo URLrewrite::BaseURL().'checkout'?>">GÅ TILL KASSAN</a></button>
                    <article>
                       Terms & conditions
                    </article>
                </div>
            </div>
        </div>
    </div>	
</body>