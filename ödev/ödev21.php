<?php
function MukemmelSayi($sayi) {
    if(!is_numeric($sayi)) {
       print "sayi?";
       return false;
    }
    for($a=1; $a<$sayi; $a++) {
       $sonuc = $sayi%$a;
       if($sonuc==0) {
          $dizi[]=$a;
       }
    }
    if(array_sum($dizi)==$sayi) {
       print $sayi." olumlu!<br>";   
    }
    else {
       print $sayi." olumsuz!<br>";
    }
 }
  
 MukemmelSayi(6);
 MukemmelSayi(24);
 MukemmelSayi(15);
 MukemmelSayi(245);
 MukemmelSayi(5678);
?>