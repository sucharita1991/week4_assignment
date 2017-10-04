<?php
$date =  date('Y-m-d', time());
echo "1. The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

$date =  date('Y/m/d', time());
echo "</br>2. The new value of \$date: ".$date."<br>";

echo "3. Compare Dates: ";
$compareDates = strcmp($date,$tar);
if($compareDates == 0){
	echo "Oops</br>";
} else if($compareDates > 0){
	echo "The future</br>";
} else {
	echo "The past</br>";
} 

echo "4. Positions of / in date: ";
$lastPos = 0;
$positions = array();
while (($lastPos = strpos($date, "/", $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + 1;
}

foreach ($positions as $value) {
    echo $value ."&nbsp;";
}
echo "</br>5. Number of words in date:";
echo str_word_count($date)."</br>";

$string1 = "My name is Sucharita Das";
echo "6. The length of string: ".$string1." is ".strlen($string1)."</br>";

echo "7. The Ascii code of first character of string: ".$string1." is: ".ord(substr($string1, 0,1))."</br>";

echo "8. The last 2 characters of ".$date. " is ".substr($date, -2)."</br>";

$dateArray = explode("/", $date);
echo "9. The date as an array:";
foreach ($dateArray as $value) {
    echo $value ."&nbsp;";
}

echo "</br>10a. Leap years using foreach loop: ";
foreach ($year as $value) {
	if(($value%4==0) && (($value%100!=0) || ($value%400==0))){
		$result="0";
	}else{
		$result="1";
	}

	switch ($result) {
    case "0":
        echo $value.": True ";
        break;
    case "1":
        echo $value.": False ";
        break;
    default:
        echo "Not an year..!! ";
	}
}

echo "</br>10b. Leap years using for loop: ";
for($x=0;$x<sizeof($year);$x++) {
	if(($year[$x]%4==0) && (($year[$x]%100!=0) || ($year[$x]%400==0))){
		$result1="0";
	}else{
		$result1="1";
	}
	switch ($result1) {
    case "0":
        echo $year[$x].": True ";
        break;
    case "1":
        echo $year[$x].": False ";
        break;
    default:
        echo "Not an year..!! ";
	}
}

?>  