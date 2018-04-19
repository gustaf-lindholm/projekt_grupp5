<?php
require_once('Products.model.php');

while($product = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="showProducts">
            <?php  
                if (isset($_SESSION['user'])) {
                    if ($_SESSION['user']['level'] == "1") { ?> 
                        <div>
                            <?php echo $product['title'];?><div>
                            <a href="Products.model.php?cid='.<?php $product['id']?>.'"><h2>'.<?php $product['title']?>.'</h2></a>
                        </div>
                    <?php 
    } } };
  


