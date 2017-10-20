<!DOCTYPE html>
<html>
<body>

<?php

$string1 = "Gwyneth";
$string2 = "Tabil";

define("first_last", $string1." ".$string2);
$subj  = "MATHS";
$age = 19;
$x = 5; 

echo "My name is ";
echo first_last;
echo "<br>";
echo "My favourite subject is ";
echo $subj;
echo "<br>";
print "My age"." ".$age." "."add five years is ";
print $age + $x;

?>

</body>
</html>