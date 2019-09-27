<?php
class Dress {
	public $color = "red";
	private $fabric = "satin";
	private $design = "Slim Fit";

	public function displayInfo() {
		echo "The info of the dress.</br>";
		echo $this->color."</br>";
		echo $this->fabric."</br>";
		echo $this->design."</br>";
	}

	private function helloWorld($number1, $number2) {
		return $number1 + $number2;
	}
}


$dressObj = new Dress();
echo $dressObj->color."</br>";
print_r($dressObj->displayInfo());
?>