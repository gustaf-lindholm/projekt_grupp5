<div class="prod-container">

        <div>
<form action="
    <?php 
            //Loop for the mobile brands
            foreach($data['brands'] as $key => $value) {
                $result = $value["manufacturer"];
            };
            
            echo URLrewrite::BaseURL().'productFilter/';
        
    ?>" class="col-md-12" method="POST">



<select class="form-control" name="manufacturer">
    <?php
            foreach($data['brands'] as $key => $value) {
            
            echo '<option name="manufacturer" value="'.$value["manufacturer"].'">'.$value["manufacturer"].'</option>';
        };
    ?>

</select>
    <button type="submit" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>

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
            printf('<a href="'.URLrewrite::BaseURL().'product/'.$product['product_id'].'/'.$product['variant_id'].'">' . '<button class="btn btn-success" type="submit">Choose</button></a>');
            echo "</div>";
            } 
        }
        ?>    
</div>