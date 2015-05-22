<?php  include_once 'SqlConnection.php';
class InventoryDB extends SqlConnection{
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "inventorydb";
}