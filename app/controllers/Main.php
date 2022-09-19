<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}

	public function index2(){
		$this->view('Main/index2');
	}

	public function foods(){
		//process the form data if it is submitted
		if(isset($_POST['action'])){
			//create a food object
			$newfood = new \app\models\Food();
			//populate the food object
			$newfood->name = $_POST['new_food'];
			//call insert
			$newfood->insert();
		}

		//read the foods.txt file into a variable
		$food = new \app\models\Food();
		$foods = $food->getAll();
		//all these files start from htdocs
		//relative path & absolute path (leading slash /)

		//a function outputs what's inside the variable
		//var_dump($_POST);

		//current working directory
		//echo getcwd();

		//pass the foods to the view for render and output
		$this->view('Main/foods', $foods);
	}

	public function foodsJSON(){
		//service that output JSON
		//read the foods.txt file into a variable
		$food = new \app\models\Food();
		$foods = $food->getAll();

		// address: /Main/foodsJSON
		echo json_encode($foods);
	}

	public function foodsAJAX(){
		$this->view('Main/foodsAJAX');
	}


}