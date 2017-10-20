<!DOCTYPE html>
<html>
<body>

<?php

$string1 = "Gwyneth";
$string2 = "Tabil";
$subj  = "MATHS";
$age = 19;
$x = 5; 
$browser = $_SERVER['HTTP_USER_AGENT'];
define("first_last", $string1." ".$string2);


echo "My name is: ";
echo first_last;
echo "<br><br>";
echo "My favourite subject is: ";
echo $subj;
echo "<br><br>";
echo "My current age is";
echo $age;
echo "<br><br>";
print "My age"." "."add five years is ";
print $age + $x;

echo "<br><br>";
echo "The browser is: $browser";


?>

</body>
</html>