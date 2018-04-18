<style>
    /* Temporary styling */
    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    form {
        grid-column: 2 / 4;
        margin: auto;
    }

    button {
        display: block;
        margin: 5% auto 0 auto;
    }
</style>
<?php var_dump($_SERVER['REQUEST_URI']); ?>
<div class="container">
    <form action="<?php echo htmlentities($_SERVER['REQUEST_URI']); ?>" method="POST">
        <fieldset>
            <legend>Please fill in the requested product information</legend>
            <p>
                <label for="newProd[title]">Product Title/Name</label>
                <input type="text" name="newProd[title]" placeholder="product title">
            </p>
            <p>
                <label for="newProd[info]">Product Description</label>
                <textarea name="newProd[info]" placeholder="Describe the product"></textarea>
            </p>
            <label for="newProd[manufacturer]">Manufacturer</label>
            <input type="text" name="newProd[manufacturer]" placeholder="manufacturer">
            <button type="submit">Save</button>
        </fieldset>
    </form>

    <!-- show form for new product variant -->
    <form action="" method="POST">
        <input type="hidden" name="addVariant[status]" value="true">
        <a href="">
            <button type="submit">Add variant</button>
        </a>
    </form>

            <!-- Output the last auto incremented product id -->
    <h4><?php if(isset($_POST['newProdId'])) {echo "The last inserted product id: " . $_POST['newProdId'];} ?></h4>
    
    <?php 
            // check if user selected the add variant option(pushed button)
            if(isset($_POST['newProdId']))
            { ?>

            <!-- Sets the form action to addVariant method in admin -->
            <!-- htmlentities converts html characters to html entities -->
    <form action="<?php echo preg_replace('~addproduct~', 'addvariant', htmlentities($_SERVER['REQUEST_URI'])); ?>" method="POST">
        <fieldset>
            <legend>Enter variation info</legend>
            <input type="number" name="addVariant[product_id]" placeholder="product id">
            <input type="text" name="addVariant[sku]" placeholder="stock keeping unit">
            <input type="number" name="addVariant[price]" placeholder="price">
            <input type="text" name="addVariant[img_url]" placeholder="image url">
        </fieldset>
        <button type="submit">Save new variant</button>
    </form>
    <?php } ?>
</div>