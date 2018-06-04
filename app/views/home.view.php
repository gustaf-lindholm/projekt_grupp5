<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Welcome to IM’MOBILÉ</h1>
    <p>We offer best quality mobile products.</p>
    <button><a href="<?php echo URLrewrite::BaseURL().'products'?>">Explore our products</a></button>
  </div>
</div>

<?php 
//var_dump($_POST);
if(isset($product['sku'])){
 echo "<h2>Best selling products: ".$_POST['chosenItem']."</h2>";
}
else{
echo "<div><p>Featured product of the month: Coming soon</p>";
}
 ?>

</div>



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



