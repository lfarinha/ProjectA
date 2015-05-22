<?php 

require 'Controller.php';

include_once 'User.php';


class UserController extends Controller{
	
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
	
	public function setEventHandler(){
		$user = new User($this->name, $this->last, $this->email, $this->password);
		$user->addNewUser();
	}
	
	public function getEventHandler(){}
}