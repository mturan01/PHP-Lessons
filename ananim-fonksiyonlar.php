<?php
// Anonim Fonsiyonlar

//function topla(){
//    return 2+2;
//}
//echo topla();

/* $topla = function($s1,$s2){
  return $s1+$s2;
};
echo $topla(4,5);*/
/*
    $dizi = [
        2, 3, 4, 5, 6
    ];

    $dizi = array_map(function ($e) {

        return 2 * $e;
    }, $dizi);

    print_r($dizi); */
$islem=[
    'topla'=>function($a,$b){return $a+$b;},
    'cikar'=>function($a,$b){return $a-$b;},
    'carp'=>function($a,$b){return $a*$b;},
    'bol'=>function($a,$b){return $a/$b;},
];

echo $islem['topla'](2,4).'<br>';
echo $islem['cikar'](2,4).'<br>';
echo $islem['carp'](2,4).'<br>';
echo $islem['bol'](2,4).'<br>';