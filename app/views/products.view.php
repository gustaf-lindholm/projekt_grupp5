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
            $properties = explode("/", $product['properties']);
            echo "<div class='prodBox'>";
            echo "<h1>" . $product['title'] . "</h1>";
            printf("<img class='prodImg' alt='%s' src='%s'>", $product['title'], $product['img_url']);
            echo "<ul>";
            foreach ($properties as $value) {
                printf("<li>%s</li>", ucfirst($value));
            }
            echo "</ul>";
            /*
            printf("<form method='POST' action='<?php echo URLrewrite::BaseURL().'cart'; ?>'>");
            printf("<input type='hidden' name='cartItem' value='<?php echo htmlentities(serialize(%s)); ?>'/>", $product[0]);
            printf("<button class='btn btn-success' type='submit'>Köp</button>");
            printf("</form>");
            echo "</div>";
            */
        }
        ?>    
</div>