<?php
function average($grades){
	$total = 0;
	$count = 0;
	foreach($grades as $item){
		$total += $item;
		$count ++;
	}
	return ($total/$count) . "\r\n";
}

function letterGrade($scores){
    if($scores >=80){
        return "A\r\n";
    }else if($scores >=70){
        return "B\r\n";
    }else if($scores >=60){
        return "C\r\n";
    }else if($scores >=50){
        return "D\r\n";
    }else{
        return "F\r\n";
    }
}

$studentGrades = array(
    "Alice" => 80,
    "Bob" => 90,
    "Charlie" => 50,
    "Dylan" => 67,
    "Edward" => 39
);

$grades = array_values($studentGrades);
$classAverage = average($grades);
echo "Class Average is " . $classAverage;

foreach($studentGrades as $name => $score){
    echo "$name scored $score -> Grade: " . letterGrade($score);
}

?>

