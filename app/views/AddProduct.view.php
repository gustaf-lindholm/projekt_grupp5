<style>
    /* Temporary styling */
    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    form {
        display: grid;
        grid-column: 2 / 4;
    }

    h4 {
        grid-column: 2 / 4;
        margin: auto;
    }
</style>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<div class="container">

        <?php
        
        $ProdForm = new Form;
        $ProdForm->textInput('newProd[title]','Product Title','Product Title or Name');
        $ProdForm->textAreaInput('newProd[info]','Product Info','Product Information');
        $ProdForm->textInput('newProd[manufacturer]','Manufacturer','Product Manufacturer');
        $ProdForm->button('Save');
        $action = URLrewrite::adminURL('addproduct');
        $ProdForm->render($action,'Add Product Information');
        
        ?>

            <!-- Output the last auto incremented product id -->
    <h4><?php if(isset($_POST['newProdId'])) {echo "The last inserted product id: " . $_POST['newProdId'];} ?></h4>
    
    <?php 
            //show add variant form after new product has been added
            if(isset($_POST['newProdId']))
            {
                $variantForm = new Form;
                $variantForm->textInput('addVariant[product_id]', 'Product Id', 'Product ID');
                $variantForm->textInput('addVariant[sku]', 'SKU', 'Stock Keeping Unit');
                $variantForm->numInput('addVariant[price]', 'Price', 'Product Price');
                $variantForm->textInput('addVariant[img_url]', 'Image Url', 'Url to product image');
                $variantForm->button('Save Variant');
                $action = URLrewrite::adminURL('addvariant');
                $variantForm->render($action,'Add Variant Information');

            }
    ?>