<?php
$n=5;
$sum=0;
for($i=1;$i<=$n;$i++)
	$sum = $sum + $i;
echo 'Sum of first ',$n,' natural number is:', $sum,"<br>";
$n=0;
$s=0;
while($n<=6)
{
	$s = $s + $n;
	$n++;
}
echo 'Sum of first ',$n-1,' natural number is:', $s,"<br>";
do
{
	$s = $s + $n;
	$n++;
}while($n<=6);
echo 'Sum of first ',$n-1,' natural number is:', $s;
?>

