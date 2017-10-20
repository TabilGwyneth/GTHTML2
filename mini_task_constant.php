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

echo first_last;
echo "<br>";
echo $subj;
echo "<br>";
print "my age"." ".$age." "."add five years is...";
print $age + $x;

?>

</body>
</html>