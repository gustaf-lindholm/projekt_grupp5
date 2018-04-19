<?php
include_once 'header.php';
?>

<!-- Some kind of hello text -->
<p>
Welcome to the MOBILE!
</p>

<?php 
if(isset($_SESSION['user']))
{
    echo ' '.includeTheName($_SESSION['user']['LAST_NAME']);
} 
?>

<a href="products.view.php">The list of all products</a>.<br /><br />


<?php 
include 'footer.php';
