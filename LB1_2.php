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

  echo "������� ����� = $n"."<br>";
  echo "���� ������ 3 ���� = $s"."<br>";
  echo "���� ������� 3 ���� = $s2";
?>