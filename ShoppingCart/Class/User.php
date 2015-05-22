<?php  include_once 'ProfileDB.php';
Class User{
	
	private $name;
	private $last;
	private $email;
	private $password;
	
	public function __construct($name, $last, $email, $password){
		$this->name = $name;
		$this->last = $last;
		$this->email = $email;
		$this->password = $password;
	}
	
	public function addNewUser(){
		$connection = new ProfileDB();
		$mysqli = $connection->mysqliConnectDB();
				
		$sql_string = "INSERT INTO user (name, last, email, password) VALUES ('$this->name', '$this->last', '$this->email', '$this->password')";
						
		if($mysqli->query($sql_string)){
			echo "<br>Success, new user created!";
		}else{
			echo "<br>There was a problem creating a new user --> ". $mysqli->errno;
		}
		
		$mysqli->close();
	}
	
	
}