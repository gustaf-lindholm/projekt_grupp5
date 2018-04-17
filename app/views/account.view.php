<style>

.container {
    text-align: center;
}

.personTitle {
    text-align: center;
}


</style>

<html>
<head>
<title> <?php echo $data[0] ['fname']; ?>'s page</title> <!-- prints out the users surname -->
</head>
<div class="container">

<?php

var_dump($data);

printf("<h1 class='personTitle'> %s</h1>", $data[0] ['fname'] . " " . $data[0] ['lname']);

?>

<button>My details</button> <button>My Order History</button> <!-- here is the options between the users account and order history -->

<p>Here is the page and info for the users account </p>

<?php

        foreach ($data[0] as $key => $value) {

            //if($key == 'fname' || $key == 'lname')
            
                continue;
            }
      
            printf("<ul><li>%s: %s</li></ul>", $key, $value);
        
        ?>

</div>
