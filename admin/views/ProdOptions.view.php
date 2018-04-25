<div class="form-container">
<?php
$products = $data[0];
$productsList = new Form;
$valueIndex = ['pid', 'title'];
$productsList->select('products', 'All products', 'prodInfo', $products, $valueIndex);
$productsList->button('Show info');
$action = URLrewrite::BaseAdminURL('productoptions/getoptions');
$productsList->render($action, 'Show product info', 'g-form', 'prodInfo');

var_dump($action);
?>


</div>
<?php if (isset($_POST['products'])) { ?>
<div class="form-container">
<h1 class="prod-title"><?php echo $data[1][0]['title'] ?></h1>
<h4 class="prod-title">Available Options</h4>    

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
                    //$option_id .= "<td>".$value['option_id']."</td>";                                   
                }?>
                
                <?php echo $optionInfo ?>

        </tbody>
    </table>
</div>
<?php } ?>