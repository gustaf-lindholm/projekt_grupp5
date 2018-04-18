<?php
    //var_dump($_POST);
    var_dump($_GET);
?>

<div>
        <a href="<?php echo htmlentities($_SERVER['REQUEST_URI']) . 'addproduct'; ?>"><button id="addProduct" class="adminButton">Add New Product</button></a>

</div>