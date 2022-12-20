<?php
//Diziler

$isimler = array();
$isimler2 = [];


$isimler = array('Mehmet','Polat','Memati');
echo '<pre>';//Alt alta sıralıyor.
print_r($isimler);//arrayleri yazdırmak için kullandığımız yöntem print_r()

echo $isimler[0];

$isimler2=[
    'isim1'=>'Mehmet',
    'isim2'=>'Abdülhey'
];

print_r($isimler2);
echo '<pre>';
echo $isimler2['isim1'];
echo '<br>';

$kisi= [
    'isim'=>'mehmet Turan',
    'yas'=>26,
];
var_dump($kisi);//bize print_r ye göre daha detaylı bilgiler getirmektedir.