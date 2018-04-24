<div class="form-container">

<?php

    $optionform = new Form;
    $optionform->textInput('optiontype[new]', 'Option', 'Add Option'); 
    $valueindex = ['option_id', 'option_name'];
    $optionform->select('Options','Available Options', 'optionform', $data, $valueindex);
    $optionform->button('Save');
    $optionform->render('#', 'New Option', 'g-form', 'optionform');


?>
</div>