<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$compareDates = strcmp($date,$tar);
if($compareDates == 0){
	echo "Oops</br>";
} else if($compareDates > 0){
	echo "The future</br>";
} else {
	echo "The past</br>";
} 


$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>