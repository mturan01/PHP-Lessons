<?php
/*
Nesne Yönelimli Programlama (OOP)

Class: Kısaca sınıflara birçok fonksiyonu ve değişkeni bir düzene göre bir arada barındıran yapılardır diyebiliriz.
*/


class User
{
//Değişkenler
//Sabitler
//Değienler ve sabitlere burada özellikler(property) diyoruz
//methodlar (Fonksiyonlara ise burada methodlar diyoruz).

    public $isim = 'Mehmet';
    public $toplam;
    const YAS = 26;//const anahtar sözcüğü ile tanımladğımız yapıya sabitler adını veriyoruz.

    public function isimyaz()
    {
        return $this->isim . ' Turan';
    }

    public function topla($num1, $num2)
    {
   #     return $num1 + $num2;
        $this->toplam= $num1+$num2;
    }
}

$User = new User();//Sınıfımı başlatmış oldum.

echo $User->isimyaz();

echo '<br>';

echo $User->topla(5, 9);

echo '<br>';

echo User::YAS;

echo '<br>';

echo $User->toplam;

echo '<br>';

class User1{

    public $isim;
    public $soyisim;
    public $eposta;
    public $yas;

    public function addUser($isim,$soyisim,$eposta,$yas){
        $this->isim=$isim;
        $this->soyisim=$soyisim;
        $this->eposta=$eposta;
        $this->yas=$yas;
    }
}

$User1= new User1();

$User1->addUser('Mehmet','Turan','mehmetculha96@gmail.com',26);

echo $User1->isim.'<br>';
echo $User1->soyisim.'<br>';
echo $User1->eposta.'<br>';
echo $User1->yas.'<br>';
