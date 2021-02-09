<?php
$saat = 06.00;

if($saat >= 06.00 && 10.00 > $saat){
    print "günaydın";

}
elseif($saat >= 10.00 && 17.00 > $saat){
    print "iyi günler";
}
elseif($saat >= 17.00 && 20.00 > $saat){
    print "iyi akşamlar";
}
elseif($saat >= 20.00 && 00.00 > $saat){
    print "iyi geceler";
}
else{
    print "esenlikler dilerim";
}




?>