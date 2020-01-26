<?php  
	require("view_cart1.php");
	
?>
<div class="grid-container">
<?php
	echo "<div class=\"item-information\">";
	foreach ($_SESSION["items"] as $key => $value) {
		echo "<div>";
			echo "<img src=\"images/" . trim($value->name) . ".jpg\" width=\"250px\">";
			echo "<details>";
			echo "<summary>$value->name</summary>";
			echo "<p>" . $value->description . "</p>";
			echo "</details>";
			echo "<p>$" . $value->cost . "</p>";
			echo "<div class=\"cart-control\" id=\"item$key\">";
				echo "<button onclick=\"expandCartControl('item$key')\">Add to Cart</button>";
			echo "</div>";
		echo "</div>";

	}
	echo "</div>";
?>
	<div class="item-cart">
		<table id="item-cart-table">
		<thead>
			<td>Name</td>
			<td>Cost</td>
			<td>Quantity</td>
			<td>Subtotal</td>
			<td></td>
		</thead>
		<tbody id="item-cart-table-body">
			
		</tbody>
		</table>
		<br>
		<form id="checkoutForm" name="checkoutForm" action="shopping_cart1.php" onsubmit="return validateForm()" method="POST">
			<input type="hidden" name="checkoutItems" id="checkoutItems">
			<input type="name" name="checkoutName" id="checkoutName" placeholder="Name" required><br>
			<input type="text" name="checkoutAddress" id="checkoutAddress" placeholder="Address" required>
			<input type="submit" name="submit" value="Checkout">
		</form>
	</div>
</div>

<script type="text/javascript">
	var items = <?php echo json_encode(object_to_array($_SESSION["items"])); ?>;
	var total = 0;
</script>
