<?php
$n="123456789";
$arr1=str_split($n);
$k=count($arr1);
$m1=3;
$m2=$k-$m1;

for ($i=0;$i<$m1;$i++)
  $s+=$arr1[$i];

for ($i=$k;$i>=$m2;$i--)
  $s2+=$arr1[$i];

  echo "Введене число = $n"."<br>";
  echo "Сума перших 3 цифр = $s"."<br>";
  echo "Сума останніх 3 цифр = $s2";
?>