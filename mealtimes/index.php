<?php
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/mealtimes',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if(array_key_exists('date', $_POST)){
	$oMeal = new Meal;
	$oMeal->date = $_POST['date'];
	$oMeal->members = $_POST['members'];
	$oMeal->save(); 
}

include 'views/list.php';

?>
