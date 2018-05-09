<?php
var_dump ($data);
?>

<p>In the list below you can se all the orders you made on our site</p>

<?php
echo "<table border='1'>
<tr>
<th>OrderID</th>
<th>Amount</th>
<th>Order Date</th>
<th>Product</th>
<th>Price</th>
<th>Image</th>
<th>
</tr>";

while($row = mysql_fetch_array($data))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['antal'] . "</td>";
echo "<td>" . $row['order_time'] . "</td>";
echo "<td>" . $row['sku'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['img_url'] . "</td>";
echo "</tr>";
}
echo "</table>";



?>
<!--<tr>
<th>OrderID</th>
<th>Amount</th>
<th>Order time</th>
<th>Product</th>
<th>Price</th>
<th>Image</th>
<th></th>
</tr> -->

