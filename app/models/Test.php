<?php
namespace app\models;

class Test extends \app\core\Model{
	#[\app\validators\Name]
	public $name;

	//'protected' keeping it accessible from Model
	protected function insert(){
		echo "This is the insert method<br>";
	}
}