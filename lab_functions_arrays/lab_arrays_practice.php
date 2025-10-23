<?php
$nums = array(11, 0, 75, 92, 8);

$largestNum = max($nums);
$smallestNum = min($nums);

echo "Largest number: $largestNum\n";
echo "Smallest number: $smallestNum\n";



$students = array(
    array("name"=>"Matt", "grade"=>49),
    array("name"=>"Adam", "grade"=>80),
    array("name"=>"Stefan", "grade"=>99)
);

print_r($students);

$numsPart3 = array(1, 2, 3);
$numsMerge = array(5, 6);
array_push($numsPart3, 4);
array_pop($numsPart3);
$numsPart3 = array_merge($numsPart3, $numsMerge);
print_r($numsPart3);

$numsPart4 = array(90, 80, 90, 70, 80);
$counts = array_count_values($numsPart4);
print_r($counts);
?>