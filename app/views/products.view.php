<div class="prod-container">
        <div class="col-xs-12">
        <form action="<?php echo URLrewrite::BaseURL().'productFilter'?>" method="POST">
        <select class="form-control" name="filter[brand]">
        <?php
        foreach($data as $key => $value) {
            var_dump($value["manufacturer"]);
            echo '<option value="'.$value["manufacturer"].'">'.$value["manufacturer"].'</option>';
        };
        ?>
    </select>
        <?php 
        foreach($data as $number => $content) {
            var_dump($content["type"]);
            echo '<div>'.$content["optionType"];
        }
        ?>
    <button class="btn" type="submit">Search</button>
    </form>
    <a href="<?php echo URLrewrite::BaseURL('productFilter') ?>"><button class="btn btn-primary">Search for Brands</button></a>
    </div>

<?php
        var_dump($data);
        //var_dump($data[1]['manufacturer']);
        foreach ($data as $product) {
            $properties = explode("/", $product['properties']);
            echo "<div class='prodBox'>";
            echo "<h1>" . $product['title'] . "</h1>";
            printf("<img class='prodImg' alt='%s' src='%s'>", $product['title'], $product['img_url']);
            echo "<ul>";
            foreach ($properties as $value) {
                printf("<li>%s</li>", ucfirst($value));
            }
            echo "</ul>";
            printf("<form method='POST' action='<?php echo URLrewrite::BaseURL().'cart'; ?>'>");
            printf("<input type='hidden' name='cartItem' value='<?php echo htmlentities(serialize(%s)); ?>'/>", $product[0]);
            printf("<button type='submit'>Köp</button>");
            printf("</form>");
            echo "</div>";
        }
        ?>    
</div>