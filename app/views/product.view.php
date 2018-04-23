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

               if($key == 'desc' || $key == 'img_url'){
                   continue;
               }
               printf("<ul><li>%s: %s</li></ul>", $key, $value);
           }
            ?>
        </div>
</div>
