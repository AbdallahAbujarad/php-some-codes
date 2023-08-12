<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa")."<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa")."<hr>";

//mktime(hour, minute, second, month, day, year) create date and time
$d=mktime(5,5,5,11,24,2003);
echo "Today is " . date("Y/m/d",$d) . "<br>";
echo "Today is " . date("Y.m.d",$d) . "<br>";
echo "Today is " . date("Y-m-d",$d) . "<br>";
echo "Today is " . date("l",$d) . "<br>";
echo "The time is " . date("h:i:sa",$d)."<br>";
echo "The time is " . date("h:i:sa",$d)."<br>";
echo"The time is ". date("Y-m-d h:i:sa",$d)."<hr>";

//creates a date and time from the strtotime()
$a=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $a)."<br>";

$a=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $a) . "<br>";

$a=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $a) . "<br>";

$a=strtotime("+3 Months 10:30pm");
echo date("Y-m-d h:i:sa", $a) . "<hr>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d l", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
echo "<hr>";
$d1=strtotime("May 12");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>
