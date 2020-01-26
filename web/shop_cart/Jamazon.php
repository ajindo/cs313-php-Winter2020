<?php  
	require("view_cart1.php");
	$_POST["checkoutItems"] = json_decode($_POST["checkoutItems"]);
	echo "<h1>Purchase Confirmation</h1>";
	echo "<table><thead><td>Name</td><td>Cost</td><td>Quantity</td><td>Subtotal</td></thead><tbody>";
	foreach ($_POST["checkoutItems"] as $key => $value) {
		echo "<tr><td>$value->name</td><td>$ " . money_format('%i', $value->cost)  . "</td><td>$value->quantity</td><td>$ " . money_format('%i',$value->cost * $value->quantity) .  "</td></tr>";
	}
	echo "</tbody</table>";
	echo "<p>Name: " . $_POST["checkoutName"] . "</p>";
	echo "<p>Address: " . $_POST["checkoutAddress"] . "</p>";
	echo "<h2>Thank You</h2>";
?>
<?php
	require("shopping_cart_footer.php");
?>