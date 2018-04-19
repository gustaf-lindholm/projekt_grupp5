<style>
    .container {
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        /* grid-auto-rows: 200px; */
}

    .prodBox {
        grid-column: span 2;
        grid-row: span 2;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
    }

    .prodImg {
        max-height: 150px;
        display: block;
        margin: auto;
    }
</style>
<div class="container">
    
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