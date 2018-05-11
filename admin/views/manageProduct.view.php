<?php
var_dump($data['products']);
?>

<div class="form-container">
    <table class="grid-table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Id</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
                $optionInfo = "";
                foreach ($data['products'] as $key => $value) {
                    $optionInfo .= "<tr><td>".$value['title']."</td>"."<td>".$value['pid']."</td>"
                    .'<td><a href="'
                    .URLrewrite::BaseAdminURL('manageProduct/removeProduct').'/'.$value['pid']
                    .'"<span class="glyphicon glyphicon-remove"></span></a></td>'."</tr>";                                 
                }?>
                
                <?php echo $optionInfo ?>

        </tbody>
    </table>