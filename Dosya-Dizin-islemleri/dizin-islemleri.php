<?php
/*
 Dizin İşlemleri

Oluşturma
PHP dizin oluşturma, klasör oluşturma işlemini gerçekleştirmek için mkdir fonksiyonu kullanılır.

mkdir('dosyalar/resimler');

if (file_exists('dosyalar/resimler')){
	echo 'Klasör zaten var';
}else{
	$sonuc = mkdir('dosyalar/resimler','0777');
	if ($sonuc){
		echo 'Klasör başarıyla oluşturuldu';
	}else{
		echo 'Bir hata oluştu';
	}
}

Silme
Rmdir() fonksiyonu PHP klasör silme işlemi rmdir fonksiyonu ile gerçekleştirilebilir.

Fonksiyonun içerisine parametre olarak silinecek olan klasörün yolu verilir.

Rmdir ile dizin silme işlemi başarılı bir şekilde gerçekleşir ise fonksiyon true değerini döndürür, değil ise false değeri döner.

PHP klasör silme işlemini mkdir ile yapabilmek için klasörün tamamen boş olması gerekiyor.

Dizin içerisindeki dosyaları silme işlemi yapılıp, sonrasında klasörün silinmesi gerekir.

if (file_exists('dosyalar/resimler')){ //dosyalar dizininin içerisinde resimler klasörü mevcut ise
	array_map('unlink', glob('dosyalar/resimler/*')); //bütün dosyalar siliniyor
	$sonuc = rmdir('dosyalar/resimler'); //klasör siliniyor
	if ($sonuc){
		echo 'Klasör başarıyla silindi';
	}
}else{
	echo 'Klasör mevcut değil';
}

   */
/*
#Dizin Oluşturma
$dizin_adi='/c/b/a';

if (file_exists($dizin_adi)){ //file_exist : Dizin var mı diye kontrol etmemize yarıyor.
    echo 'Bu Dizin zaten oluşturulmuş';
}
else{
  if  (mkdir($dizin_adi,0777,true)){
      echo 'Dizin oluşturuldu';
  }
  else{
      echo 'Bir hata Meydana geldi';
  }
}
*/
/*
$dizin_adi='/c/b/a';
#Dizin Silme
rmdir($dizin_adi);
*/
$dizin_adi='c/b';
$sonuc=rmdir($dizin_adi);

if ($sonuc) echo 'Dosya silindi';
else echo 'Dosya Silinemedi';