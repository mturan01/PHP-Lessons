<?php
$kosul=true;

$a=6;
$b=10;
if ($a==1){
    echo '1.Koşul Sağlandı';
}
elseif ($a==2){
    echo '2.Koşul Sağlandı';
}
elseif ($a==3){
    echo '3.Koşul Sağlandı';
}
elseif ($a==5){
    echo '4.Koşul Sağlandı';
}
else{
    echo 'Else Çalıştı';
}

echo $a==7 ? 'Eşit' : 'Eşit Değildir'; //Ternary Üçlü Operatör

if($a==6):
    echo 'Çalıştı';
endif;

