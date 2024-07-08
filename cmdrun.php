<?php 


class student {
	
	public $studentname ;
	
	function addname($name)
	{
	 	$this->studentname = $name;
	}
	
	function printname()
	{
		
		echo $this->studentname;
	}
	
}


$object = new student();

$object->addname("Ravindra");
$object->printname();







?>