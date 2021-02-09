<?php
$sayi=15;
$k=$sayi-1;
$asal=0;
$asaldegil=0;
for ($i=2; $i<=$k; $i++)
{
$tam=$sayi%$i;
if ($tam<>0)
$asal=$asal+1;
else
$asaldegil=$asaldegil+1;
}
if ($asaldegil==0)
print"asal";
else
print"asal değil";
?>