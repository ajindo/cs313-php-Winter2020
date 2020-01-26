<?php
	session_start();
	class Item {
		public $name;
		public $description;
		public $cost;
		public $quantity;
	}

	if(!isset($_SESSION["items"]))
	{
		$_SESSION["items"]=array();
		$myfile = fopen("item_data.txt", "r") or die("Unable to open file!");
		$counter = 0;
		while(!feof($myfile)) {
			$item = new Item();
		 	$item->name = fgets($myfile);
		 	$item->cost = fgets($myfile);
		 	$item->description = fgets($myfile);	
		 	array_push($_SESSION["items"], $item);
		 	$counter++;
		}
		fclose($myfile);
	}
	function object_to_array($data)
	{
		return (array) $data;
	}
	function array_to_object($data)
	{
		return (object) $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global Navigation Style -->
	<link rel="stylesheet" type="text/css" href="../global_header.css">
	<!-- Assignment Specific-->
	<link rel="stylesheet" type="text/css" href="shopping_cart_style.css">
	<title>PHP Shopping Cart Example</title>
</head>
<body>
<!-- Global Navigation Header -->
<?php
	include("../global_header.php");
?>
<!-- Assignment Header -->
<header>
	<h1>Cole's Cookies</h1>
<div class="topnav">
	<a 
  		<?php	
			if(basename($_SERVER['PHP_SELF']) == "shopping_cart.php"){
				echo "class=\"active\"";
			}
		?> 
		onclick="loadItemsPage()">Items
	</a>
</div>
</header>
<main onload="updateCart()">
	