<?php
$abc="abcdefghijklmnopqrstuvwxyz";
$str = substr($abc, strrpos($abc,"f")+1);
echo "Алфавіт:"."<br>";
echo "$abc"."<br>";
echo "Літери після букви \"f\":";
echo "$str";
?>