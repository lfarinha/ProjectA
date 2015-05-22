<?php

class View {
	
	private $model;
	private $controller;

	public function __construct($controller, $model){
		$this->controller = $controller;
		$this->model = $model;
		$this->sayHello();
	}
	
	public function output(){
		return "<p>" . $this->model->string . "</p>";
	}
	
	public function sayHello(){
		echo "Hello!";
	}
	
}
