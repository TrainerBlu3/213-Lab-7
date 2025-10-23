<?php
$nums = array(11, 0, 75, 92, 8);

$largestNum = max($nums);
$smallestNum = min($nums);

echo $largestNum;
echo $smallestNum;

$students = array("name"=>"Matt", "grade"=>49,
"name"=>"Adam", "grade"=>80,
"name"=>"Stefan", "grade"=>99);

var_dump($students);

$numsPart3 = array(1, 2, 3);
$numsMerge = array(5, 6);
array_push($numsPart3, 4);
array_pop($numsPart3);
array_merge($numsPart3, $numsMerge);

$numsPart4 = array(90, 80, 90, 70, 80);
array_count_values($numsPart4);

?>
