<?php 
namespace app\validators;

#[\Attribute]
class ValidBirthdateForAnAnimal extends \app\core\Validator{
	public function isValidData($data){
		//make sure the animal was not born more than 500 years ago
		$date1=date_create();
		$date2=date_create($data);
		$diff=date_diff($date1,$date2);
		return $diff->y < 500; //less than 500 years old
	}
}