<?php
namespace app\validators;

#[\Attribute]
class Name extends \app\core\Validator{
	//returns true if the passed data is non empty
	public function isValidData($data){
		return !empty($data);
	}
}