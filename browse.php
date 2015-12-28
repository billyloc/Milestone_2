<?php 

	require "products.php";
	$options = "";

	foreach($products as $key => $value) {
	 	$options .= "<option value=\"" . $key . "\">" . $value . "</option>";
	} 




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browse Products</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster|Lato:300italic' rel='stylesheet' type='text/css'>
	

</head>
<body>
<?php
	require("header.php");
?>

	<div class="browse">

		<h1> Browse Products </h1>

		<form action="view.php" method="GET">
			Products
			<select name="product_id">
		
			<?= $options ?>
			
			</select>
	 
			Quantity
			<input name="quantity" type="number" min="1">
			

			Submit
			<button type="submit">Submit</button>
		</form>

		</div>

<?php require "footer.php" ?>
	
</body>
</html>