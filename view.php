<?php 

require("products.php");
$prod_id = "";
$quantity = "";
$prod_name = "";
$msg = "";


	if(isset($_GET["product_id"])) {
		$prod_id = $_GET["product_id"];
		if(!array_key_exists($prod_id,$products)) {
			$msg = "invalid product";
		} else {
			$prod_name = $products[$prod_id];
		}
	}

	if(isset($_GET["quantity"])) {
		$quantity = $_GET["quantity"];
	}

	if($msg == ""){
		$msg = "You chose:  " . $quantity . " " . $prod_name . " products";
	}

	if($prod_id == "pd_3") {
		if($quantity > 7) {
			$msg = "You cannot order more than 7 Macs";
		}
	} 
	if($quantity <= 0) {
		$msg = "Invalid quantity";
	} 
	






 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="normalize.css">
 	<link rel="stylesheet" href="style.css">
 	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
 </head>
 <body>
<?php
	require("header.php");
?>
	


	<div class="result">
	 	<h1>
	 		<?php echo $msg; ?>
	 	</h1>
	</div> 

<?php  
	require("footer.php");
?>

 	
 </body>
 </html>