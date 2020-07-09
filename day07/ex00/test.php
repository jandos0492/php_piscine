<?php

class Lannister {
	public function __construct() {
		print("A Lannister is born !" . PHP_EOL); 
	}
	public function getSize() {
		return "Average";
	}
	public function houseMotto() {
		return "Hear me roar!";
	}
}

include('Tyrion.class.php');

$tyrion = new Tyrion();
$lannister = new Lannister();

print($tyrion->getSize() . PHP_EOL);
print($tyrion->houseMotto() . PHP_EOL);
print($lannister->getSize() . PHP_EOL);
?>
