<?php
/*
Dizi Fonksiyonları 2

shuffle()
Bir Diziyi Karıştırır.

array_combine()
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.

array_count_values()
Bir dizideki tüm değerleri sayar.

array_key_exists()
Belirtilen anahtar veya indis dizide var mı diye bakar.

array_map()
Belirtilen dizinin elemanlarını geri çağırım işlemvini uygular.

array_filter()
Bir dizinin elemanlarını geri çağırım ile süzgeçten geçirir.

array_merge()
Belirtilen dizileri art arda ekleyerek yeni bir dizi oluşturur.

array_rand()
Bir dizide belli sayıda ratgele anahtar döndürür.

array_reverse()
Diziyi tersine sıralayıp döndürür.

array_search()
Bir dizide belirli değeri arar ve bulursa ilgili ilk anahtarı döndürür.

 */

echo "<pre>";
$sayilar=range(1,20);//range komutuyla başlangıç ve bitiş değerlerini vererek bir dizi ouşturmamızı sağlar.

shuffle($sayilar);//sayısal lota uygulmasında kullanabiliriz.

print_r($sayilar);

$meyve=['elma','armut','muz'];
$harfer=['a','b','c'];

$dizi=array_combine($meyve,$harfer);//array_combine kullnırken dizilerin eleman sayısının aynı olmasına dikkat edilmelidir.
$kactanedizivar=array_count_values($meyve);//Dizinin içerisinde kaç tane elemandan var onu göstermektedir.
$keyvedegeryerdegistiriyor=array_flip($harfer);//array ve Keylerin yer değişirmesini sağlamaktadır.
$dizidesorulananahtarvarmi=array_key_exists(2,$harfer);//Belirtilen dizide bu anahtar var mı diye sorgulamamızı sağlamaktadır.
print_r($dizi);
print_r($kactanedizivar);
print_r($keyvedegeryerdegistiriyor);
var_dump($dizidesorulananahtarvarmi);

$sayilararraymap=range(1,10);
$sayilararraymap1=range(11,20);

function cube($sayi){
    return $sayi*$sayi*$sayi;
}

$arraymap=array_map(function ($e){
   return $e+2;
},$sayilararraymap);

print_r($arraymap);

$arraymapcube=array_map('cube',$sayilararraymap);
print_r($arraymapcube);

$array_filter_ciftsayilar=array_filter($sayilararraymap,function ($e){
    return $e%2 ==0 ? $e : false;
});
print_r($array_filter_ciftsayilar);

$array_filter_tek_sayilar=array_filter($sayilararraymap,function ($e){
    return $e%2 !== 0 ? $e :false;
});
print_r($array_filter_tek_sayilar);

$array_merge=array_merge($sayilararraymap,$sayilararraymap1);//Dizileri birleştirip tek bir dizi haline getirmemizi sağlar.
print_r($array_merge);

$meyveler=['elma','armut','muz'];
print_r(array_rand($meyveler,2));//Ratgele arraylerin keylerini döndürmemizi sağlamaktadır,2. parametre olarek da kaç tane döndüreceğimiz yer alamakatadır.
$keys=array_rand($meyveler,2);

echo $meyveler[$keys[0]];
echo $meyveler[$keys[1]];

$array_reverse =array_reverse($meyveler);
print_r($array_reverse);//Diziyi bize tersten sıralayrak vermektedir.

$array_search= array_search('muz',$meyveler);//array_search fonsiyonu çalıştığında dizinin içerinde karşılatiğı ilk elemanı çevirir.
print_r($array_search);

