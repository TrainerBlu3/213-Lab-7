<?php
function greet(){
	echo "Hello, World!\r\n";
}

greet();
greet();

function greetName($name){
	echo "Hello, $name!\r\n";
}

greetName("Alice");
greetName("Bob");

function add($a, $b){
	return $a + $b;
}

echo add(3,5) . "\r\n";
echo add(10,20) . "\r\n";

function convertCtoF($c){
	return ($c * 1.8) + 32;
}

echo convertCtoF(0) . "\r\n";
echo convertCtoF(30) . "\r\n";
echo convertCtoF(100) . "\r\n";

function safeDivide($a, $b){
	if($b === 0){
		echo "Error";
		return;
	}else{
		return $a / $b;
	}
}

echo safeDivide(10,2) . "\r\n";
safeDivide(10,0);

?>
