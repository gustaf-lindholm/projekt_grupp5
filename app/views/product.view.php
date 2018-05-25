<?php
var_dump($data);
?>

<div class="single-prod-container">
    <?php 
    //title
    printf("<h1 class='prod-title'>%s</h1>", $data[0]['title']);

    //image
    printf('<img src="%s" alt="bild" class="img-fluid prod_img">', $data[0]['img_url']);
    ?>
        <div class="prod-info">
            <?php echo "<h3>".$data[0]['info']."</h3>"?>
            <?php
           foreach ($data[0] as $key => $value) {

               if($key == 'info' || $key == 'img_url'){
                   continue;
               }
               printf("<ul><li>%s: %s</li></ul>", $key, $value);
           }
            ?>
            <?php
            // inte den bästa lösningen men för att det ska funka för stunden
            foreach ($data[0] as $key => $value) {

               if($key == 'info' || $key == 'img_url' || $key == 'pid' || $key == 'cid' || $key == 'variant_id' || $key == 'option_id' || $key == 'property' || $key == 'title' || $key == 'manufacturer' || $key == 'price'){
                   continue;
               }
             }
                printf('<form method="POST" action="<?php echo URLrewrite::BaseURL()."cart"; ?>">');
                printf('<input type="hidden" name="%s" value="%s" />', $key, $value );
                printf('<input type="submit" name="submit" value="BUY"/>');
                printf('</form>');
            ?>
        </div>
</div>