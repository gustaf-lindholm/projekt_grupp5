<?php 
echo "<h2>".$_POST['manufacturer']."</h2>";
echo "<pre>";
//var_dump($_POST);
//var_dump($data);
//var_dump($data['variants']);
//var_dump($data);
 foreach ($data['variants'] as $product) {
    if(isset($product['sku'])){
    $properties = explode("/", $product['properties']);
    echo "<div class='prodBox'>";
    //var_dump($product);
    echo "<h1>" . $product['title'] . "</h1>";
    printf("<img class='prodImg' alt='%s' src='%s'>", $product['title'], $product['img_url']);
    echo "<ul>";
    foreach ($properties as $value) {
        printf("<li>%s</li>", ucfirst($value));
    }
    echo "<li>".$product['price']." SEK</li>";
    echo "</ul>";
    printf("<form method='POST' action='
    <?php echo URLrewrite::BaseURL().'cart'; ?>'");
    printf("<button class='btn btn-success' type='submit'>Köp</button>");
    printf("</form>");
    echo "</div>";
    } 
}
?>
