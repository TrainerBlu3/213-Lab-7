<?php
function greet(){
	echo "Hello, World!<br>";
}

greet();
greet();

function greetName($name){
	echo "Hello, $name!<br>";
}

greetName("Alice");
greetName("Bob");

function add($a, $b){
	return $a + $b;
}

echo add(3,5) . "<br>";
echo add(10,20) . "<br>";

function convertCtoF($c){
	return ($c * 1.8) + 32;
}

echo convertCtoF(0) . "<br>";
echo convertCtoF(30) . "<br>";
echo convertCtoF(100) . "<br>";

function safeDivide($a, $b){
	if($b === 0){
		echo "Error";
		return;
	}else{
		return $a / $b;
	}
}

echo safeDivide(10,2) . "<br>";
safeDivide(10,0);

?>
