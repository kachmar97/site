<?php
$m=array(-4568,1,5,432,8,1,8,3254,8.8,1,87,561,2125,1);
$max1=max($m);
$min1=min($m);
$s1=abs($max1);
$s2=abs($min1);
echo "Максимальний елемент за модулем = ";
if ($s1>$s2)
echo $s1;
else echo $s2;








/*






















$max=0;
$imax=$m[0];


























for($i=0;$i<count($m);$i++)
{
	echo "$m[$i],\n";
}
echo "<br>";

for ($i=0;$i<count($m);$i++)
{
  if($max<$m[$i])
  {
    $max=$m[$i];
    $imax=$i;
  }
}
$imax++;
echo "Найбільший елемент = $max його позиція = $imax";*/
?> 