function expandCartControl(itemID){
	var htmlString = "";
	htmlString += "<button onclick=\"minusQuantity('" + itemID.trim() + "')\">-</button>";
	htmlString += "<input type=\"number\" name=\"" + itemID.trim() + "input\" id=\"" + itemID.trim() + "input\" onchange=\"changeQuantity('" + itemID.trim() + "', 1)\" min=\"0\">"
	htmlString += "<button onclick=\"plusQuantity('" + itemID.trim() + "')\">+</button>";
	document.getElementById(itemID).innerHTML = htmlString;

	items[itemID.substr(-1)].quantity = 1;
	changeQuantity(itemID);
}

function minusQuantity(itemID) {
	items[itemID.substr(-1)].quantity--;
	changeQuantity(itemID);
}

function plusQuantity(itemID) {
	items[itemID.substr(-1)].quantity++;
	changeQuantity(itemID);
}

function changeQuantity(itemID, inputNumber = 0) {
	if(inputNumber) {
		items[itemID.substr(-1)].quantity = document.getElementById(itemID + "input").value;
	}
	else
	{
		document.getElementById(itemID + "input").value = items[itemID.substr(-1)].quantity;
	}
	if (items[itemID.substr(-1)].quantity == 0) {
		closeCartControl(itemID);
	}
	updateCart();
}

function clearItem(itemID) {
	items[itemID.substr(-1)].quantity = 0;
	changeQuantity(itemID);
}

function closeCartControl(itemID) {
	var htmlString = "";
	htmlString += "<button onclick=\"expandCartControl('" + itemID.trim() + "')\">Add to Cart</button>";
	document.getElementById(itemID).innerHTML = htmlString;
}


function updateCart() {	
	total = 0;
	var htmlString = "";
	for(i in items) {
		if (items[i].quantity > 0){
			htmlString += "<tr>";
			htmlString += "<td>" + items[i].name + "</td><td>$ ";
			htmlString += Number(items[i].cost).toFixed(2) + "</td><td>" + items[i].quantity;
			htmlString += "</td><td>$ " + Number(items[i].cost *  items[i].quantity).toFixed(2);
			total += items[i].cost * items[i].quantity;
			htmlString += "</td><td><button onclick=\"clearItem('item" + i +"')\">Clear</button></td></tr>";
		}
	}
	htmlString += "<tr></tr><tr></tr><tr></tr><tr><td>Total</td><td></td><td></td><td>$ " + Number(total).toFixed(2) +"</td></tr>";
	document.getElementById("item-cart-table-body").innerHTML = htmlString;
}

function loadItemsPage() {
	if(window.location.pathname != "/assignments/assignment03/shopping_cart.php") {
		window.location.assign("https://secret-crag-85991.herokuapp.com/assignments/assignment03/shopping_cart.php");
	}
}

function validateForm() {
	document.getElementById("checkoutName").value = document.getElementById("checkoutName").value.replace(/[^a-zA-Z]/g, '');
	var letters = /^[0-9a-zA-Z,." "]+$/;
	if (!document.getElementById("checkoutAddress").value.match(letters)) {
		alert('User address must have alphanumeric characters, commas, and periods only');
		document.getElementById("checkoutAddress").focus();
		return false;
	}
	return getCheckoutItems();
}			

function getCheckoutItems() {
	var checkoutItems = new Array();
	for (var i = 0; i < items.length - 1; i++) {
		if(items[i].quantity > 0)
		{
			checkoutItems.push(items[i]);
		}
	}
	if(checkoutItems.length == 0) {
		alert('You have nothing in your cart');
		return false;
	}
	document.getElementById("checkoutItems").value = JSON.stringify(checkoutItems);
	return true;
}