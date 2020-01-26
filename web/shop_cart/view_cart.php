<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $quantity1 = $_POST['quantity1'];
    

if(isset($_POST["addCart"])); 
?>
<div id="cart_table_whole">
        <table id="cart_table">
		<thead>
			<td>Name</td>
			<td>Cost</td>
			<td>Quantity</td>
			<td>Total</td>
			<td></td>
        </thead>
        <tbody id="item_cart_table_body">
			
		</tbody>
		</table>
		<br>
		<form id="checkoutForm" name="checkoutForm" action="view_cart1.php" method="POST">
			<input type="hidden" name="checkoutItems" id="checkoutItems">
			<input type="name" name="checkoutName" id="checkoutName" placeholder="Name" required><br>
			<input type="text" name="checkoutAddress" id="checkoutAddress" placeholder="Address" required>
			<input type="submit" name="submit" value="Checkout">
		</form>
</div>