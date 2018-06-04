<div class="order-container">

<h1>Order history</h1>

<div class="text-center">
<a  href="<?php echo URLrewrite::BaseURL().'account'?>"><button id="" class="btn btn-primary">My details</button></a> 
<a  href="<?php echo URLrewrite::BaseURL().'orderhistory'?>"><button id="" class="btn btn-primary">My Order History</button></a> <!-- here is the options between the users account and order history -->
<a href="<?php echo URLrewrite::BaseURL().'updateuser' ?>"><button id="updateUser" class="btn btn-primary updateButton">Update User Information</button></a>
<a href="<?php echo URLrewrite::BaseURL().'changepassword' ?>" class="btn btn-primary">Change password</a>
</div><br>

    <p>Below you can see all orders you made at our store. If you don't see some of the orders you might
     have more than one account or you were not logged in when you placed the order.
     Feel free to contact our Costumer Service if you have any problems.</p>


<?php


//if the user don't have any orders 
if ($data['orderInfo'] == false) {
    echo "You don't have any orders to display";
}

//creates table for specific values in the SQL-array
else {
    ?>

    <div class="form-container">
    <table class="grid-table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Ordernumber</th>
                <th scope="col">Amount</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>

            </tr>
        </thead>
        <tbody class="">
            <?php
            
            $productInfo = "";
            foreach($data['orderInfo'] as $key => $value) {
                $productInfo .= "<tr><td>".$value['order_id']."</td>"."<td>".$value['antal']."</td>".
                "<td>".$value['product_id']."</td>"."<td>".$value['price']."</td>"."<td>".
                $value['order_time']."</td>"."<td class='col-md-2'><img class='img-responsive' src='".$value['img_url']."'/></td>";
                
             }
           
            }?>

            <?php echo $productInfo; ?>



        </tbody>
    </table>






    </div>
    </div>
    