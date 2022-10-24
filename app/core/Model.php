<?php
namespace app\core;

class Model{
	protected static $_connection;

	public function __construct(){
		$server = 'localhost';//127.0.0.1
		$dbname = 'vet_clinic';
		$username = 'root';
		$password = '';

		try{
			self::$_connection = new \PDO("mysql:host=$server;dbname=$dbname",
											$username,$password);
			self::$_connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}catch(\Exception $e){
			echo "Failed connecting to the database";
			exit(0);
		}
	}

	protected function isValid(){
		//discover attributes on the class properties and runs the tests to validate the values in the properties
		//extract the metaa data from the object
		$reflection = new \ReflectionObject($this);
		//find the object properties
		$classProperties = $reflection->getProperties();//reflectionProperties
		//foreach property find the attributes
		foreach($classProperties as $property){
			$propertyAttributes = $property->getAttributes();
			//foreach attribute run the test
			foreach($propertyAttributes as $attribute){
				//make an object for this attribute
				$test= $attribute->newInstance();
				//run the method that executes the test and get the result
				if(!$test->isValidData($property->getValue($this))){
					return false;
				}
			}
		}
		return true;
	}

	
	public function __call($method, $arguements){
		//this method call to the inaccessible function (test object)
		//gets call from the object recieving the bad call
		// echo "Getting a call to the $method method with the arguements ";
		// print_r($arguements);

		if($this->isValid())
		//insert method from the Test class gets called
			call_user_func_array([ $this, $method ], $arguements);
	}
}