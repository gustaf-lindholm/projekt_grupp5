<?php include ADMIN_VIEW.'tempAdminMenu.php'; ?>
<div class="form-container">
<?php
var_dump($_POST);
// tanken är att visa en 'alert' efter att ny variant lagts till
if(isset($_POST['addVariant']['status']) && $_POST['addVariant']['status'] == 'success')
{
    echo '<div class="alert alert-success grid-alert" role="alert">New variant added!</div>';
}
        $variantForm = new Form;
        $variantForm->textInput('addVariant[product_id]', 'Product Id', 'Product ID');
        $variantForm->textInput('addVariant[sku]', 'SKU', 'Stock Keeping Unit');
        $variantForm->numInput('addVariant[price]', 'Price', 'Product Price');
        $variantForm->textInput('addVariant[img_url]', 'Image Url', 'Url to product image');
        $variantForm->button('Save Variant');
        $action = URLrewrite::adminURL('addvariant/newvariant');
        $variantForm->render($action,'Add New Variant Information', 'g-form');

?>
</div>
<h1 class="prod-title">All products and variations</h1>

<div class="form-container">
    <table class="grid-table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Variant ID</th>
                <th scope="col">SKU</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
                $optionInfo = "";
                foreach ($data['prodVariants'] as $key => $value) {
                    $optionInfo .= "
                    <tr>
                    <td>".$value['product_id']."</td>".
                    "<td>".$value['variant_id']."</td>".
                    "<td>".$value['sku']."</td>".
                    "<td>".$value['price']."</td>".
                    "</tr>";                                 
                }?>
                
                <?php echo $optionInfo ?>

        </tbody>
    </table>

</div>
