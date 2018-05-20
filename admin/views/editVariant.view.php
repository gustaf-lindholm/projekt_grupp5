<?php
$pid = $data['variantInfo']['pid'];
$vid = $data['variantInfo']['variant_id'];

    // alert with feedback on databse query
    if(!empty(Registry::getStatus()) && Registry::getStatus('editVariantOption') == true)
        {
            header('Refresh:2;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));
            echo '<div class="alert alert-success grid-alert" role="alert"><strong>Variant Option Updated!</strong></div>';

        } 
        if(!empty(Registry::getStatus('editVariantOption')) && Registry::getStatus('editVariantOption') == false) {
            header('Refresh:5;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));            
            echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to update option value!</div>';
        }


?>
<div class="form-container">
<?php
// new form
$variantForm = new Form();

$variantForm->hiddenInput('hidden[variant][product_id]', $data['variantInfo']['pid']);
$variantForm->textInput('variant[sku]', $data["variantInfo"]['sku'], 'Variant SKU');
$variantForm->textInput('variant[price]', $data["variantInfo"]['price'], 'Price');
$variantForm->textInput('variant[img_url]', $data["variantInfo"]['img_url'], 'Image Url');
$variantForm->button('Save');
$action = URLrewrite::BaseAdminURL('Variants/updateVariant');
$variantForm->render($action, 'Edit variant info', 'g-form');
?>
</div>

<div class="form-container">
    <table class="grid-table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Option Name</th>
                <th scope="col">Value</th>
                <th scope="col">Set new option</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
                // variable to hold option info output
                $optionInfo = "";
                // loop trough $data and create a table                
                foreach ($data['variantOptions'] as $key => $value) {
                    // td for the current variant options
                    $optionInfo .= "<tr><td>".$value['option_name']."</td>"."<td>".$value['value_name']."</td><td>".
                    "<form method='POST' action='".URLrewrite::BaseAdminURL('manageProduct/editVariantOption')
                    .'/'.$value['product_id'].'/'.$value['option_id'].'/'.$value['variant_id']."'>".
                    "<select name='option[value_id]'>";

                
                // td with select for setting new options                    
                foreach ($data['optionValues'] as $key => $val) {
                
                // if statement to render the correct values and names for each row
                // and skip the current option value in the option element
                if($val['option_id'] == $value['option_id']) {
                    if( $value['value_name'] == $val['value_name']){
                        continue;
                    } else {
                        $optionInfo .=
                        "<option value=".$val['value_id'].">".$val['value_name']."</option>";
                    }

                }
                }
                
                    // td for delete button                
                    $optionInfo .= '</select><input type="submit" value="Save"></form></td><td><a href="'
                    .URLrewrite::BaseAdminURL('manageProduct/removeVariantOption').'/'.$value['product_id'].'/'.$value['option_id']
                    .'"<span class="glyphicon glyphicon-remove"></span></a></td>'."</tr>";                                 
                }?>
                
                <?php echo $optionInfo ?>
        </tbody>
    </table>


