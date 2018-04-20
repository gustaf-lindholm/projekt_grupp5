<?php
//var_dump($data); ?>

<link rel="stylesheet" href="css/product.css" type="text/css"/>
<div class="container">
<?php 

//title
printf("<h1 class='title'>%s</h1>", $data[0]['title']);

//image
printf('<img src="%s" alt="bild" class="prod_img">', $data[0]['img_url']);
?>
    <div class="prod_info">
        <h3>
        <?php echo $data[0]['info']?>
        </h3>
        <?php
        foreach ($data[0] as $key => $value) {

            if($key == 'desc' || $key == 'img_url'){
                continue;
            }
            printf("<ul><li>%s: %s</li></ul>", $key, $value);
        }
        ?>
    </div>
    <div class="footer">
        <p>footer</p>
    </div>
</div>
