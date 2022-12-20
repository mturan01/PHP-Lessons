<pre style="font-size: 35px">
    <?php
/*
Dizi Fonsiyonları 3

in_array();Bir dizide bir değerin varlığını araştırır.
array_shift(); Dizinin başlangıcından bir elemen çıkarır.
array_pop(); Dizinin sonundaki elemanı diziden çıkarır.
array_slice(); Bir dizinin belirli bir bölümünü döndürür.
array_sum(); Bir dizideki değerlerin toplamını hesaplar.
array_product(); Bir dizideki değerlerin çarpımını bulur.
array_unique(); Diziden yinelenen değerleri siler.
array_values(); Bir dizinin tüm değerlerini döndürür.
array_push(); Belirli sayıda elemanı dizinin sonuna ekler.
array_unshift(); Bir dizinin başlangıcına bir veya daha fazla elaman ekler.
array_keys(); Bir dizideki tüm anahtarları veya bir anahtar alt kümesini döndürür.

*/
   $dizi=['mehmet','turan','tarık','Selena','Polat','memeati'];
   print_r(array_keys($dizi));//Keyleri değer olarak almamızı sağlamaktadır.
   array_shift($dizi);//Dizinin başlangıcından bir eleman çıkarırr.
    array_pop($dizi);
   print_r($dizi);
   var_dump(in_array('mehmet',$dizi));
$new_array= array_slice($dizi,1,2);//buradaki 1 değeri keyinin ifade eder kaç tan başayacak ve 2 değeride kaç tane getireceğini belirtmektedir.
print_r($new_array);
$sayilar=range(1,5);
print_r(array_sum($sayilar));
echo '<br>';
print_r(array_product($sayilar));

array_push($dizi,'okan');
$dizi[]='Tokatçı';//Array_push un diğer yöntemi
print_r($dizi);
$array_unshift=array_unshift($dizi,'Yeni');
print_r($dizi);
    ?>
</pre>