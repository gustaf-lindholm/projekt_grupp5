<div class="form-container">

<?php

     
    //var_dump($_POST['optiontype']['status']);
    // display message if insert of new option was succssessful or not
    if(isset($_POST['optiontype']['status']) && $_POST['optiontype']['status'] === 'true')
    {
        echo "<h4>New option type successfully added!</h4>";

    } elseif(isset($_POST['optiontype']['status']) && $_POST['optiontype']['status'] = 'false')
    {
        echo "<h4>Failed to insert new option type, try again or contact site administrator</h4>";
    }
    
    // input of new option
    $optionform = new Form;
    $optionform->textInput('optiontype[new]', 'Option', 'Add Option'); 
    
    // output existing options from db:
    // $data is queried in the model, sent to controller and the to the view.
    // valueindex is the $data array key names so the form-class can identify
    // which values in the data array is given to the select's option element's
    // value and text output = <option value="option_id">option_name</option> 

    $valueindex = ['option_id', 'option_name'];
    $optionform->select('Options','Available Options', 'optionform', $data, $valueindex);
    $optionform->button('Save');

    // form action
    $action = URLrewrite::adminURL('optiontype/addoption');

    // render and output complete form element
    $optionform->render($action, 'New Option', 'g-form', 'optionform');


?>
</div>