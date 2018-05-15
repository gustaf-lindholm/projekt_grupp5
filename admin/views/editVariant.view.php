<?php
//echo "<pre>";
var_dump($data);
$properties = explode('/', $data['properties']);

var_dump($properties);
?>
<div class="form-container">
<?php
// new form
$variantForm = new Form();

$variantForm->textInput('variant[sku]', $data['sku'], 'Variant SKU');
$variantForm->textInput('variant[price]', $data['price'], 'Price');

$action = URLrewrite::BaseAdminURL('Variants/editVariant');
$variantForm->render($action, 'Edit variant info', 'g-form');
?>
</div>