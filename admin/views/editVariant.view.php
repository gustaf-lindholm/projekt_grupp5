<?php
include ADMIN_VIEW.'tempAdminMenu.php';

$pid = $data['variantInfo']['pid'];
$vid = $data['variantInfo']['variant_id'];

    // alert with feedback on update option
    if(Registry::getStatus('editVariantOption') === true)
        {
            header('Refresh:2;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));
            echo '<div class="alert alert-success grid-alert" role="alert"><strong>Variant Option Updated!</strong></div>';

        } 
        if(Registry::getStatus('editVariantOption') === false) {
            header('Refresh:5;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));            
            echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to update option value!</div>';
        }
    
        // alert with feedback on removing option

        if(Registry::getStatus('removeVariantOption') === true)
        {
            header('Refresh:2;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));
            echo '<div class="alert alert-success grid-alert" role="alert"><strong>Variant Option Removed!</strong></div>';

        } 
        if(Registry::getStatus('editVariantOption') === false) {
            header('Refresh:5;'.URLrewrite::BaseAdminURL("manageProduct/editVariant/$pid/$vid"));            
            echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to remove option value!</div>';
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
<h1 class="prod-title">Edit <strong><?php echo $data['variantInfo']['title'].'</strong> variant '.$data['variantInfo']['variant_id']?></strong> option values</h1>
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
                    .URLrewrite::BaseAdminURL('manageProduct/removeVariantOption').'/'.$value['product_id'].'/'.$value['option_id'].'/'.$value['variant_id']
                    .'"<span class="glyphicon glyphicon-remove"></span></a></td>'."</tr>";                                 
                }?>
                
                <?php echo $optionInfo ?>
        </tbody>
    </table>
</div>
<div class="form-container">
<h1 class="prod-title">Add option and value to <strong><?php echo $data['variantInfo']['title'].'</strong> variant '.$data['variantInfo']['variant_id']; ?></h1>

<form style="display: contents;">
<table class="grid-table table-striped table-bordered">
<thead class="thead-light">
    <tr>
        <th scope="col">Option</th>
        <th scope="col">Value</th>
    </tr>
</thead>
<tbody class="">
    <?php
        // variable to hold option info output
        $output = "";
        // loop trough $data and create a table                
        foreach ($data['optionType'] as $k => $v) {
            
            // row start
            $output .= "<tr><td>";

            $output .= $v['option_name'];
            $output .= "</td>";
            $output .= "<td>";
                

            //td for option and hidden inputs with pid and vid
            foreach ($data['optionValues'] as $key => $value) {
                
                if ($v['option_id'] == $value['option_id']) {
                    $output .= "<input type='hidden' value='".$data['variantInfo']['variant_id']."'>";        
                    $output .= "<input type='hidden' value='".$data['variantInfo']['pid']."'>";        
        
                    // radio buttons
                    $output .= "<label class='radio-inline' style='margin: 5px;'>";            
                    $output .= "<input type='radio' value='".$value['value_id']."'>".$value['value_name'];
                    $output .= "</label>";
                }

                
            }


            // td with save button and end row tag
            $output .= "</td></tr>";
            
            
                               
        }
        
        echo $output
        
        ?>
        
</tbody>
</table>
<button type="submit" class="btn btn-primary">Save</button>

</form>

<?php

$variantVal = new Form();
// hidden product id and variant id
$variantVal->hiddenInput('addVariantValue[pid]', $data['variantInfo']['pid']);
$variantVal->hiddenInput('addVariantValue[vid]', $data['variantInfo']['variant_id']);
// select option
$optionValueindex = ['option_id', 'option_name'];
$variantVal->select('Options','Select Option', 'addVariantValueForm', $data['optionType'], $optionValueindex);

//select value
$valueindex = ['value_id', 'value_name'];
$variantVal->InlineRadio('addVariantValueForm', $data['optionValues'], $valueindex);


// submit and render
$variantVal->button('Save');
$variantVal->render('#', 'Add variant value', 'g-form', 'addVariantValueForm');
?>
</div>
<div class="form-container">
<h1 class="prod-title">Manage Options</h1>
<?php 
    // Available options and adding of new option
    $optionform = new Form;
    
    // output existing options from db:
    // $data is queried in the model, sent to controller and the to the view.
    // valueindex is the $data array key names so the form-class can identify
    // which values in the data array is given to the select's option element's
    // value and text output = <option value="option_id">option_name</option> 

    $valueindex = ['option_id', 'option_name'];
    $optionform->select('Options','Available Options', 'optionform', $data['optionType'], $valueindex);

        
    // input of new option
    $optionform->textInput('optiontype[new]', 'Option', 'Add Option'); 

    // form action
    $action = URLrewrite::BaseAdminURL('productoptions/addoption');

    // submit button
    $optionform->button('Save New Option');
    
    // render and output complete form element
    $optionform->render($action, 'Options', 'g-form', 'optionform');
    
    


    // Print response on product option insert
    if(Registry::getStatus() !== null && Registry::getStatus('addProdStatus') == 'success')
    {
        echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">New product option added!</div>';

    } elseif (Registry::getStatus('addProdStatus') !== null && Registry::getStatus('addProdStatus') == 'fail') {
        echo '<div class="alert alert-danger alert-dismissible grid-alert" role="alert">Failed to add option type!</div>';
    }

    // current options for variant
    $variantOptions = [];
    // all options
    $allOptions = [];
    $options;

    // dont know how but its working. Only showing options which can be added
    foreach ($data['optionType'] as $key => $aoptions) {
        foreach ($data['variantOptions'] as $k => $vOptions) {
            $variantOptions['option_id'][$k] = $vOptions['option_id'];
            $variantOptions['option_name'][$k] = $vOptions['option_name'];
        }
        $allOptions['option_id'][$key] = $aoptions['option_id'];
        $allOptions['option_name'][$key] = $aoptions['option_name'];
           
    }
    $optionIds = array_diff($allOptions['option_id'], $variantOptions['option_id']);
    $optionNames = array_diff($allOptions['option_name'], $variantOptions['option_name']);
    foreach ($optionIds as $key => $value) {
       $options[] = ['option_id' => $value, 'option_name' => $optionNames[$key]];
    }

    // create and render form for adding option to variant
    $productsList = new Form;
    $optionIndex = ['option_id', 'option_name'];
    $productsList->select("newProdOption[option_id]", 'All options', 'newOption', $options, $optionIndex);
    $productsList->hiddenInput('newProdOption[status]', 'sent');        
    $productsList->hiddenInput('newProdOption[product_id]', $data['variantInfo']['pid']);        
    $productsList->button('Add option');
    $action = URLrewrite::BaseAdminURL('productoptions/addProductOption');
    $productsList->render($action, 'Add option to <strong>'.$data['variantInfo']['title'].'</strong>', 'g-form', 'newOption');
?>
</div>

<?php
echo "<pre>";
var_dump($data);
//var_dump($data['optionType']);
