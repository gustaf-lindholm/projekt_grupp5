<div>
        <a href="<?php echo URLrewrite::URL('addproduct') ?>"><button id="addProduct" class="adminButton">Add New Product</button></a>

        <?php
            // Testar form-klassen
            $form = new Form;
            $form->textInput('newProd[title]', 'Title', 'Product Name');
            $form->button('Save');
            $action = URLrewrite::url('addproduct');
            $form->render($action, 'POST');
        ?>
</div>