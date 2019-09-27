<?php
class Dress {
	public $color = "red";
	public $fabric = "satin";
	public $design = "Slim Fit";

	public function displayInfo() {
		echo "The info of the dress.</br>";
		echo $this->color."</br>";
		echo $this->fabric."</br>";
		echo $this->design."</br>";
	}

	public function helloWorld($number1, $number2) {
		return $number1 + $number2;
	}
}


$dressObj = new Dress();
print_r($dressObj->helloWorld(20, 30));
?>