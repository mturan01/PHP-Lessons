<?php
/*
 *
print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.

var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir.
Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir

implode();
Dizi elemanlarını birleştirip bir dizge elde eder.

count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

is_array();
Değişkenin bir dizi içerip içermediğine bakar

*/
$arr=[1,2,3,4,5,6,7,8,9];

print_r($arr);
echo '<br>';
var_dump($arr);
echo '<br>';
$dizge= implode('=',$arr);// Diziyi string bir ifadeye dönüştürüyor

echo ($dizge);
echo '<br>';
$newarray=explode('=',$dizge);//String bir ifadeyi diziye dönüştürür.

print_r($newarray);
echo '<br>';
echo count($newarray);
echo '<br>';
for ($i=0; $i<=count($newarray) -1;$i++){
    echo $newarray[$i];
}
echo '<br>';
echo is_array($newarray);//1 dönerse dizi içeriyor anlamına gelmektedir.