<?php 
var_dump($_POST);
if(isset($product['sku'])){
 echo "<h2>Best selling products: ".$_POST['chosenItem']."</h2>";
}
else{
  echo "<h2>Welcome to Mobile website</h2>";
}
 ?>

<!--
<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Something</th>
    <th scope="col">Model</th>
    <th scope="col">Price</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Here shall be products that the admin placed</td>
    <td>XXXXXX</td>
    <td>10 000 SEK</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Second Best</td>
    <td>XXXXXXX</td>
    <td>10 000 SEK</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Third Best</td>
    <td>XXXXXX</td>
    <td>10 000 SEK</td>
  </tr>
</tbody>
</table> -->



