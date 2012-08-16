<?php
class Animal
{
	public $sHungry = 'hell yeah I am hungry.';

	function eat($food)
	{
		$this->sHungry = "not so much. I don't like " . $food;
	}
	
	function show()
	{
		foreach($this as $name => $value ){
			echo "<li>$name = $value</li>";
		}
	}
	
}

interface Gender {
		const MALE = 'm';
		const FEMALE = 'f';
}


class Dog extends Animal implements Gender
{
	function __construct($sBreed)
	{
			$this->sBreed = $sBreed;
			$this->sGender = Gender::MALE;
			$this->show();
	}
	
	function show()
	{
		echo "I am a dog .... on the interweb no one knows";
	}
}
?>