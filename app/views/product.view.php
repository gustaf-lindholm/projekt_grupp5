<style>

    h3 {
        text-align: center;
    }

    .container {
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: 15% 70% 15%;

    }

    .title {
        border: 1px solid black;
        text-align: center;
        grid-column: 1 / -1
    }

    .prod_img {
        border: 1px solid black;
        grid-row: 2 / 3;
        grid-column: 1 / 8        
    }
    .prod_info {
        border: 1px solid black;
        grid-column: 8 / -1;
    }
    .footer {
        border: 1px solid black;
        grid-column: 1 / -1;
        
    }
</style>

<?php
var_dump($data); ?>
<div class="container">
<?php 

//title
printf("<h1 class='title'>%s</h1>", $data[0]['title']);

//image
printf('<img src="%s" alt="bild" class="prod_img">', $data[0]['image_link']);
?>
    <div class="prod_info">
        <h3>
        <?php echo $data[0]['desc']?>
        </h3>
        <?php
        foreach ($data[0] as $key => $value) {

            if($key == 'desc' || $key == 'image_link'){
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