<?php
namespace app\controllers;

class Food{
	//delete a food item here
	public function delete($food_id){
		//I would like to delete the record with a specific id
		$food = new \app\models\Food();
		$food->deleteAt($food_id);
		//redirect to the list
		header('location:/Main/foods');
	}


}