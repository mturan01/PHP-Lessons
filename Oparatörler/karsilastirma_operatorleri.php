<?php
//$a ==$b Eşittir
//$a == $b Aynıdır.
//$a != $b Eşit Değildir.
//$a !== $b Farklıdır.
//$a < $b Küçüktür.
//$a > $b Büyüktür.
//$a <= $b Küçüktür veya Eşittir.
//$a >=$b Büyüktür veya Eşittir.
//$a <=> Mekik.

//var_dump($değişken); var_dump ile bir değişkenin biliglerini veri türünü dökümleyebiliriz

$a = 3;
$b = 4;
var_dump($a===$b); //üç eşittir de tamamen aynı olması aranmaktadır.


echo $a == $b; // Sonuç: false
echo $a === $b; // Sonuç: false
echo $a != $b; // Sonuç: true
echo $a !== $b; // Sonuç: true
echo $a < $b; // Sonuç: true
echo $a > $b; // Sonuç: false
echo $a <= $b; // Sonuç: true
echo $a >= $b; // Sonuç: false
echo $a <=> $b; // Sonuç: -1
