<?php

if(isset($data['name'])) {
    echo $data['name'];
}else {
    echo "Data är inte kopplad";
}
?>

<div>
<p>Here we will have our homepage!</p>
</div>

<?php 
include 'footer.php';
