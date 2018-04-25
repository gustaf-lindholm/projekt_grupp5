<div class="form-container">

<?php

    // display message if insert of new option was succssessful or not
    if(isset($_POST['optiontype']['status']) && $_POST['optiontype']['status'] === 'true')
    {
        echo "<h4>New option type successfully added!</h4>";

    } elseif(isset($_POST['optiontype']['status']) && $_POST['optiontype']['status'] = 'false')
    {
        echo "<h4>Failed to insert new option type, try again or contact site administrator</h4>";
    }

    // instantiate new form object
    $optionform = new Form;
    
    // output existing options from db:
    // $data is queried in the model, sent to controller and the to the view.
    // valueindex is the $data array key names so the form-class can identify
    // which values in the data array is given to the select's option element's
    // value and text output = <option value="option_id">option_name</option> 

    $valueindex = ['option_id', 'option_name'];
    $optionform->select('Options','Available Options', 'optionform', $data[2], $valueindex);

        
    // input of new option
    $optionform->textInput('optiontype[new]', 'Option', 'Add Option'); 

    // form action
    $action = URLrewrite::adminURL('productoptions/addoption');

    // submit button
    $optionform->button('Save New Option');
    
    // render and output complete form element
    $optionform->render($action, 'Options', 'g-form', 'optionform');


?>
</div>
<div class="form-container">
<?php
    $products = $data[0];
    $productsList = new Form;
    $valueIndex = ['pid', 'title'];
    $productsList->select('products', 'All products', 'prodInfo', $products, $valueIndex);
    $productsList->button('Show info');
    $action = URLrewrite::BaseAdminURL('productoptions');
    $productsList->render($action, 'Show product info', 'g-form', 'prodInfo');
?>


</div>
<?php if (isset($_POST['products'])) { ?>
<div class="form-container">

<!-- Output title and info for chosen product if the product have options -->
<?php if(isset($data[1][0]['title']))
{
    echo '<h1 class="prod-title">Available Options for:'.$data[1][0]['title']."</h1>";?>

    <table class="table grid-table">
        <thead>
            <tr>
                <th scope="col">Option Name</th>
                <th scope="col">Option ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $optionInfo = "";
                foreach ($data[1] as $key => $value) {
                    $optionInfo .= "<tr><td>".$value['option_name']."</td>"."<td>".$value['option_id']."</td></tr>";                                 
                }?>
                
                <?php echo $optionInfo ?>

        </tbody>
    </table>
    
    <!-- Error message if no options for chosen product -->
    <?php } else {
    echo '<h1 class="prod-title">No options in database for the chosen product.</h1>';
}
?>
</div>
<?php } ?>