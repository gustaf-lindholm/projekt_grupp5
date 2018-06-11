<h1>Hahaha, an order has been set</h1>
<?php
var_dump($_SESSION);
?>
<form method="post" action="<?= URLrewrite::BaseURL().'payment'?>">
<p>Please write down your email for a receipt:</p>
<input type="text" name="receipt"/>
<button type="submit">Get a receipt</button>
</form>
