<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";


echo "Compare Dates: </br>";
$compareDates = strcmp($date,$tar);
if($compareDates == 0){
	echo "Oops</br>";
} else if($compareDates > 0){
	echo "The future</br>";
} else {
	echo "The past</br>";
} 

echo "Positions of / in date</br>";
$lastPos = 0;
$positions = array();
while (($lastPos = strpos($date, "/", $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + 1;
}

foreach ($positions as $value) {
    echo $value ."&nbsp;";
}
echo "</br> Number of words in date:";
echo str_word_count($date)."</br>";

$string1 = "My name is Sucharita Das";
echo "The length of string: ".$string1." is ".strlen($string1)."</br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>