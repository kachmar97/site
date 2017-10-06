<?php
$a=array(1,2,3);
$b=array(2,3,4);
for($i=0;$i<count($a);$i++)
{
  $st1=pow($a[$i],2);
  echo $st1;
  echo "<br>";
  $s1+=$st1;
}
for($i=0;$i<count($b);$i++)
{
  $st2=pow($b[$i],2);
  echo $st2;
  echo "<br>";
  $s2+=$st2;
}
echo "Сума квадратів першого масиву = $s1";
echo"<br>";
echo "Сума квадратів першого масиву = $s2";
if ($st1>$st2)
  $f=1;
elseif ($st1<$st2)
  $f=-1;
echo "<br>";
echo $f;
?>