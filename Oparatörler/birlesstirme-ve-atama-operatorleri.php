<?php
// =Atama Operatörü
// .=Birleştirme Operatörü

// += Toplayyarak Atama
//-= Çıkartarak Atama
// *=Çarparak Atama
// /=Bölerek Atama
// %=Modunu Alarak Atama
//.= Birleştirme Operatörü

$a ='Selam';
$b ='Nasılsın';
echo $a.$b;

$c =3;

echo $c += 5;//değişkendeki üçü alıyor ve üzeriene bes ekleyip yine değişkene atıyor.

$adsoyad= 'Mehmet';
$adsoyad .= 'Turan';
echo $adsoyad;

           $modul= '<div>';
               $modul .= '<p>Lorem ipsum dolor sit amet.</p>';
            $modul .='</div>';

               echo '<br>';
               echo $modul;