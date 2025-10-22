function greet(){
	echo "Hello, World!";
}

greet();
greet();

function greetName($name){
	echo "Hello, $name!";
}

greetName("Alice");
greetName("Bob");

function add($a, $b){
	return $a + $b;
}

echo add(3,5);
echo add(10,20);

function convertCtoF($c){
	return ($c * 1.8) + 32;
}

echo convertCtoF(0);
echo convertCtoF(30);
echo convertCtoF(100);

function safeDivide($a, $b){
	if($b === 0){
		echo "Error";
		return;
	}else{
		return $a / $b;
	}
}

echo safeDivide(10,2);
safeDivide(10,0);
