<pre style="font-size: 35px">
<?php
/*
    strlen($metin);
    Verilen metnin karakter sayısını yani uzunluğunu verir.

    explode($ayirici,$metin);
    Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.

    implode($ayirici,$dizi);
    Bu fonksiyon explode() fonksiyonunun aksine bir dizideki değerleri belirtilen ayırıcıyla birleştirerek biraraya getirir.

    str_split($metin,$sayi);
    Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.

    ltrim($metin), rtrim($metin), trim($metin);
    Verilen metnin sırasıyla solundaki(left-ltrim), sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.

    substr($metin,$baslangic,$uzunluk);
    Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.

    strtolower($metin), strtoupper($metin);
    Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür.

    mb_strtolower() ve mb_strtoupper();
    Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür. Türkçe karakter sorunu yaratmaz.

    ucfirst($metin), ucwords($metin);
    Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.

    str_replace($kaynak,$hedef,$metin);
    Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar. Bu fonksiyon küçük/büyük harf duyarlıdır.

    nl2br($metin);
    String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.

    md5($metin), sha1($metin);
    Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.

    strstr();
    Bir dizgede belirtilen karekterden sonrasını döndürür.

*/
$metin="Linux";
$metin2="Mehmet Turan ÇULHA";
echo strlen($metin);//Metin Uzunluğunu Verir.
echo '<br>';
echo mb_strlen($metin);//direk olarak metinsel ifadenin u<unluğunu verir. Ş Harfi 2 nayt olduğu için Şahin keilemsini 6 olarak döndürür.fakat mb_strlen de ise 5 olarak döndürür
echo '<br>';
$array=(explode(' ',$metin2));
echo print_r($array);
echo '<br>';
echo implode('#', $array);
$metin3="Sen gidince neler oldu";
echo '<br>';
$array1=str_split($metin3,2);//Buradaki 2 rakamı kaçar kaçar parçalayacağını göstermetedir.
// mb_str_split() bu fonksiyon ise Ş harfi gibi 2 byte içerenleri tekmiş gibi algılar.Yukardaki örnelte olduğu gibi.
print_r($array1);
echo '<br>';
$metin4="      boşluk bıraktık    ";
echo strlen($metin4);
$metin4=ltrim($metin4);//sol taraftaki boşluğu Temizledi.
$metin4=rtrim($metin4);//sağ taraftaki boşluğu Temizledi.
//trim($metin) Sağ ve Sol daki boşlukları temizler.
echo '<br>';
echo strlen($metin4);
echo '<br>';

$metin5="str kkullanımına örnek";
$metin5=substr($metin5,5,5);// 5.karakterden başla bana bes karakterlik bir metin getir.
echo $metin5;

echo '<br>';

$metin6="Büyük küçük harf yapma";

$metin6=strtolower($metin6);//Harfleri Küçük yazar
echo $metin6;
echo '<br>';
$metin6=strtoupper($metin6);//Harflerin Hepsini Büyük Yazdırdık.mb_strtoupper buradada geçerlidir.
$metin6=strtoupper($metin6);//Harflerin Hepsini Büyük Yazdırdık.mb_strtoupper buradada geçerlidir.


echo $metin6;
echo '<br>';

$metin7="mehmet Turan ÇULLU";

$metin7=ucfirst($metin7);//Kelimenin ilk harfini büyük yazamaktadır.

echo $metin7;
echo '<br>';

$metin7=str_replace('Mehmet','poyraz',$metin7);//Mehmet kelimesi varsa poyraz ile değiştir dedik.

echo $metin7;
/*
\n bir alt satıra inmemizi sağlamatadır.pre etietleri arasında olduğu için bu çalışır.ama düz html de çalışmaz
\t bir tab boşluk bıramamızı sağlamatadır.pre etietleri arasında olduğu için bu çalışır.ama düz html de çalışmaz
/ nl2br ise bize her yerde bunun çalışmasına olana verir. yani nl yerine br etiketi koy demektir.
*/
echo '<br>';
$sifre="1234567";
$db_sifre='fcea920f7412b5da7be0cf42b8c93759';
echo md5($sifre);//bizim yazdığımız ifadeyi şifreli bir şekilde çevirir.
echo '<br>';
echo sha1($sifre);//bizim yazdığımız ifadeyi şifreli bir şekilde çevirir.
echo '<br>';
if (md5($sifre)==$db_sifre){
    echo 'Şifre doğrudur.';
}
else{
    echo 'Şifre Yanlıştır.';
}
echo '<br>';
$metin8='Lorem ipsum dolar sit amet.';

echo strstr($metin8,'ipsum');//İpsumdan böl ve getir.e posta adreslerind ekullanılabilir.
?>

</pre>