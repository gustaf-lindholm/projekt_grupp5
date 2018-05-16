<?php 
//var_dump($_POST['manufacturer']);
echo "<h2>".$_POST['manufacturer']."</h2>";

//var_dump($data);

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

// printf("<form>");
// printf("<ul><li>Product name: %s</li></ul>", $data['title']);
// printf("<ul><li>Information: %s</li></ul>", $data['info']);
// printf("<ul><li'>Brand: %s</li></ul>", $data['manufacturer']);
// print("</form>");
?>
