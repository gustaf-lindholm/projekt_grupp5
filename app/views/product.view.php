
<?php var_dump($data); ?>
<div class="container" style="display:grid; grid-gap:5px; 
grid-template-columns:repeat(auto-fit, minmax(100px, 1fr))">
<?php 

//title
printf("<h1 class='title'>%s</h1>", $data[0]['title']);

//image
printf('<img src="%s" alt="bild">', $data[0]['image_link']);
foreach ($data[0] as $key => $value) {
    printf("<ul><li>%s %s</li></ul>", $key, $value);
}
?>
</div>