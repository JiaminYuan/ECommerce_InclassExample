<?php
namespace app\controllers;

class Test extends \app\core\Controller{
	//for testing
	/*
	public function index(){
		$data = '2020-01-01';
		$date1=date_create();
		$date2=date_create($data);
		$diff=date_diff($date1,$date2);
		echo $diff->y;
	}*/

	function index(){
		$test = new \app\models\Test();
		$test->name='';
		$test->insert();
	}
}