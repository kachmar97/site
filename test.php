$a=array(1,2,3,4,5,6,7);
$b=array(10,20,30,40,50,60,70);

for ($i=0;$i<count($a);i++)
{
  if ($a[$i]>0)
    $k1++;
}


for ($i=0;$i<count($b);i++)
{
  if ($b[$i]>0)
    $k1++;
}

$r=min($k1,$k2);
echo $r;