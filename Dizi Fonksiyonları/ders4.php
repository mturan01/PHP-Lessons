<pre style="font-size: 35px">
<?php
/*
Dizi Fonksiyonları 4

current(); bir dizideki geçerli öğeyi döndürür.
end(); Bir dizinin dahili işaretçisini son elemana ayarlar.
next(); Bir dizinin dahili işaretçisini ilerletir.
prev(); Bir dizinin dahili işaretçisini geri alır.
reset(); Bir dizinin dahili göstericisini ilk elemana konumlar.

extract(); Bir dizideki değişkeni simge tablosuna kaydeder.

asort(); Bir dizinin değerini anahtarıyla ilişkisini bozmadan küçükten büyüğe doğru sıralar.
arsort(); Bir dizinin değerini anahtarıyla ilişkisini bozmadan büyükten küçüge doğrı sıralar.

ksort(); Bir diziyi anahtarına göre küçükten büyüğe doğru sıralar.
krsort(); Bir diziyi anahtarına göre büyükten küçüğe doğru sıralar.


*/
$dizi = ['araba', 'bisiklet', 'motor', 'uçak'];

echo current($dizi);
echo '<br>';
echo next($dizi);
echo '<br>';
echo current($dizi);//next dedikte sonra currentle ilkini alıyoruz.
echo '<br>';
echo prev($dizi);
echo '<br>';
echo end($dizi);
echo '<br>';
echo reset($dizi);
echo '<br>';
$yenidizi = ['bir' => 'araba', 'iki' => 'bisiklet', 'üç' => 'motor'];
extract($yenidizi);//keylerimizi bir değiken olarak kullanmamızı sağlamaktadır.
echo $bir;
echo '<br>';
$yenidizi2 = [2 => 1, 4 => 6, 5 => 3];
asort($yenidizi2);
print_r($yenidizi2);
$bykcsirala=arsort($yenidizi2);
print_r($yenidizi2);
?>
</pre>