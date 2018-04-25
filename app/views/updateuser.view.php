
<p> Here shall the user-form be with an update/submit to the database to the user table, use GET-form </p>

<?php 
        
        $UserForm = new Form;
        $UserForm->textInput('updateU[firstname]','Firstname');
        $UserForm->textAreaInput('updateU[lastname]','Lastname');
        $UserForm->numInput('updateU[phone]','Phonenumber');
        $UserForm->emailInput('updateU[email]','Email');
        $UserForm->button('Save');
        $action = URLrewrite::adminURL('addproduct');
        $UserForm->render($action,'Change User Information', 'g-form');
        
        ?>  