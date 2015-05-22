<?php include_once 'InventoryDB.php';
class Product{
	
	
	function addNewProduct(){
		
		$connection = new InventoryDB();
		$mysqli = $connection->mysqliConnectDB();
		
		$sql_string = "INSERT INTO product (name, brand, price, quantity, image) VALUES ('xbox one', 'microsoft', '350', '200', '../image/xboxone.png')";
		
		if ($mysqli->query($sql_string)){
			echo "<br>Product was succesfully added!";
		}else{
			echo "<br>There was a problem adding a new product --> " . $mysqli->errno;
		}
		
	}
	
}