<?php
$f = array(
  array(1,2,3,4),
  array(10,20,30,40,50,60)
  );
for ($i=0; $i<count($f[0]); $i++)
{		
  		echo $f[0][$i]."\n";
  		$s1=max($f[0]);
}
//echo "<br>";
echo "max=$s1"."<br>";
for ($i=0; $i<count($f[1]); $i++)
{
		echo $f[1][$i]."\n";
		$s2=max($f[1]);
}
echo "max=$s2";
?>