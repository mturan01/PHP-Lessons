<?php


class User
{
    public static $isim;

    public $soyisim;

    public static function setIsim($isim)
    {
       self::$isim=$isim;//self i sadece static methodlarda kullanabiliyoruz.
    }
}

/*User::$isim = 'Mehmet';

echo User::$isim;

//User::setIsim('Mehmet Turan');

$User =new User();

$User->soyisim='ÇULHA';

echo $User::$isim;*/