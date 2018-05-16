<h1>Update <?php echo $data[0] ['fname'] ?>'s Information </h1>

<div class="text-center">
<a class="btn btn-primary" href="/projekt_grupp5/public/account/">My details</a> <a class="btn btn-primary" href="/projekt_grupp5/public/orderhistory">My Order History</a> <!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::BaseURL().'updateuser' ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="" class="btn btn-primary">Change password</a>
</div>

<?php 

/*
        
        $UserForm = new Form;
        $UserForm->textInput('updateU[firstname]','Firstname');
        $UserForm->textAreaInput('updateU[lastname]','Lastname');
        $UserForm->numInput('updateU[phone]','Phonenumber');
        $UserForm->emailInput('updateU[email]','Email');
        $UserForm->button('Save');
        $action = URLrewrite::BaseURL('addproduct');
        $UserForm->render($action,'Change User Information', 'g-form'); */
        
        ?>  