<div class="prod-container">

        <div class="col-xs-12">
        <form action="
            <?php 
            foreach($data['brands'] as $key => $value) {
                $result = $value["manufacturer"];
            };
            
            echo URLrewrite::BaseURL().'productFilter/';
        
            ?>" method="POST">

        <select class="form-control" name="manufacturer">
        <?php
        foreach($data['brands'] as $key => $value) {
            echo '<option name="manufacturer" value="'.$value["manufacturer"].'">'.$value["manufacturer"].'</option>';
        };
        ?>

    </select>
     <button class="btn btn-success" type="submit">Search</button>
    </form>


    </div>

<?php
        foreach ($data as $product) {
            if(isset($product['title'])){
                //var_dump($products);
            $properties = explode("/", $product['properties']);
            echo "<div class='prodBox'>";
            //printf('<h1>Mobiles<a href="'.URLrewrite::BaseURL().'/product">' . $data['brand'] . '</a></h1>');
            printf("<img class='prodImg' alt='%s' src='%s'>", $product['title'], $product['img_url']);
            echo "<ul>";
            printf('<h3><a href="'.URLrewrite::BaseURL().'product/'.$product['product_id'].'/'.$product['variant_id'].'">' . $product['title'] . '</a></h3>');
            foreach ($properties as $value) {
                printf("<li>%s</li>", ucfirst($value));
            }
            echo "<li>".$product['price']." SEK</li>";
            echo "</ul>";
            printf("<form method='POST' action='%s'>", URLrewrite::BaseURL().'cart/add');
            printf("<button class='btn btn-success' type='submit'>Köp</button>");
            printf('<input type="hidden" name="sku" value="%s" />', $product['sku']);
            printf("</form>");
            echo "</div>";
            } 
        }
        ?>    
</div>