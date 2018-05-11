<div class="prod-container">

        
        //Will go to filter results controller
        <div class="col-xs-12">
        <form action="<?php echo URLrewrite::BaseURL().'productFilter'?>">;
        <select class="form-control" name="filter[brand]">';
        <?php
        foreach($data as $key => $value) {
            var_dump($value["manufacturer"]);
            echo '<option value="'.$value["manufacturer"].'">'.$value["manufacturer"].'</option>';
        };
        ?>
    </select
        ><button class="btn" type="submit">Search</button>
    </form>
    </div>

<?php
        //var_dump($data);
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
            echo "</ul></div>";
        }
        ?>    
    
</div>