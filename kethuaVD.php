<?php
class MyClass{
	private $prop1 = "I'm a class property";

	public function __construct(){
		echo 'The class "', __CLASS__, '" was initeiated!<br />';
	}

	public function __destruct(){
		echo 'The class "', __CLASS__, '" was destroyed!<br />';
	}

	public function __toString(){
		echo "Using the toString method: ";
		return $this->getProperty();
	}

	public function setProperty($newval){
		$this->prop1 = $newval;
	}

	public function getProperty(){
		return $this->prop1 . "<br />";
	}
}

class MyOtherClass extends MyClass{
	public function newMethod(){
		echo 'From a new method in "', __CLASS__, '"!<br />';
	}
}

$newobj = new MyOtherClass();
$newobj->setProperty("giang!");
echo $newobj->newMethod();
echo $newobj->getProperty();
?>