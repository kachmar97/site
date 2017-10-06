<?php
$a=array(1,2,3,4,5,6,7,8,9);
$b=array(10,20,30,40,50,60,70,80,90);
$e=min($a);
$f=min($b);
$s=(3*$e+5*$f)/10;

for($i=0;$i<count($a);$i++)
{
	echo "$a[$i]\n";
}
echo "- min=$e";
echo "<br>";
for($i=0;$i<count($b);$i++)
{
	echo "$b[$i]\n";
}
echo "- min=$f";
echo "<br>";
echo "(3*e+5*f)/10=$s";

?>