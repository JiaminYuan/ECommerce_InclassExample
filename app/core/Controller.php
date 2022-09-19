<?php
namespace app\core;

class Controller{
//TODO: add a parameter for data later
	public function view($name, $data = []){ //default value being defined
		include('app/views/' . $name . '.php');	
	}
}