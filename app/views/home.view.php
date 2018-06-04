<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Welcome to IM’MOBILÉ</h1>
    <p>We offer best quality mobile products.</p>
    <button><a href="<?php echo URLrewrite::BaseURL().'products'?>">Explore our products</a></button>
  </div>
</div>

<?php 
if(isset($_POST["chosen_Item"]))
{
$title= $_POST['header_Title'];
$content=$_POST['header_Content'];
$id= $_POST["chosen_Item"];
}else {
  $id= 'SAMGLS964BK';
  $title= 'The best Android phones around';
  $content= "Samsung has once again taken the top spot of the best Android phone in the world right now.

  Samsung's latest Galaxy S9 Plus is in the top position of this list thanks to an incredible design, amazing display and some truly great power packed into the phone.
  
  Everything that has made Samsung phones great over the last few years has been packed into this 6.2-inch device - that's almost bezeless too - and comes with top of the range hardware and some easy to use Android software.
  
  ";
}

  foreach ($data as $key => $products) {

    foreach ($products as $product) {

        if($id == $product["sku"]) {
        printf("<div class='col-md-12' style=''><div class='col-md-4'><h2>Featured product of the month:</h2>");
        printf("<img class='prodImg' alt='%s' style='' src='%s'></div>", $product['title'], $product['img_url']);
        echo "<div class='col-md-8'><h3>".$title."</h3>";
        echo "<br>".$content."</div>";
        }
       
    }    
}
?>
<button type="button" class="btn"><a href="<?php echo URLrewrite::BaseURL().'products'?>">Explore our products</a></button>
</div>


</div>

<div class="col-md-12">
  <h2>Latest Products</h2>
  
    <?php
    //var_dump($data['products']);
   //while($row = count($data['products'])){
    foreach ($data['products'] as $product) {
    ?>
      <div class="col-md-3">
        <img src="<?php echo $product['img_url']?>" alt="<?php echo $product['title']?>" style="width:150px; height:150px;">
        <div>
          <h3><?php echo $product['title']?></h3>
          <p><?php echo $product['info']?><br><?php echo $product['price']?>SEK</p>
        </div>
      </div>
    <?php 
    }
  //}
    ?>
    </div>

<?php 

?>
</body>
</html>




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



