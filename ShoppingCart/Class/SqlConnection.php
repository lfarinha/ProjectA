<?php
abstract class SqlConnection{
	
	var $servername; 
	var $username;
	var $password;
	var $dbname;
		
	public function mysqliConnectDB(){
		 
		// Create connection
		$con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			
		// Check connection
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		return $con;
	}
	

}