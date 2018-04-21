<div class="prod-container">
    
        <?php
        //var_dump($data);
        //echo "<pre>";
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