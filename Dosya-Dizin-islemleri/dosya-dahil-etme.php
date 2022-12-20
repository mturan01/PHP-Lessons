<?php
/*
Dosya Dahil Etme
Bir php sayfasına bir başka betik ya da herhangi bir dosya dahil etmek için kullanılan fonksiyonlar vardır. Bu fonksiyonlar yardımı ile bir php sayfasına başka bir php sayfası dahil edilebilir ve dahil edilen php sayfasındaki değişken ve fonksiyonlar kullanılabilir.

Bu fonksiyonlar;

include
include_once
require
require_once
fonksiyonlarıdır.

include 'dosya.php';

include_once 'dosya.php';

require 'dosya.php';

require_once 'dosya.php';

şeklinde kullanılır.

require ve require_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "FATAL ERROR" verir ve çalışmayı durdurur. include ve include_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "WARNING" verir ve çalışmaya devam eder.

require_once include_once ile dahil edilen dosya sadece bir kere dahil edilebilir.
a.php de dizi oluşturup da dahil etme imkanımız vardır.
Ör:
$dizi=['bir'=>'adana','iki'=>'Mersin'];

cağırsıgım zaman
include (a.php);
print_r($dizi);
*/
# require 'test.txt';//require dahil et anlamına gelmektedir.
# require 'a.php';
# include 'test.txt';//inculude dahil et anlamına gelmektedir.require ile ayı anlama gelmektedir.fakat include ile fatal error hatası almayız warning hatası alırız require hatalıysa eğer altında çalışan bir kod olsa bile çalıştırmaz fakat include olursa sadece onu çalışturmaz geri kalan çalışan doğru olan kodları çalıştırır.
include_once 'a.php'; //inculude_once sadece bir defa dahil etmemize yarar, Başka dahil edemeyiz.Aynı durum require_once da bulunmaktadır.
