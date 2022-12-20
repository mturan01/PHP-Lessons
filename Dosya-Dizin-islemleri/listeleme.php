<?php
/*
 Dosya Dizin Listeleme

scandir() glob() Kullanımı


$files = scandir('.');
// Bulunduğumuz dizindeki tüm dosya ve klasörleri listeler.
$files = array_filter(scandir('.'), 'is_dir');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*.php');
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.{php,txt}', GLOB_BRACE);
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
img.png

$files = glob('*', GLOB_ONLYDIR);
// Bulunduğumuz dizindeki sadece dizinleri listeler.
function listAllDir($dir){
    $files = scandir($dir);
    echo "<ul>";
        foreach ($files as $file):
            if ($file != '.' && $file != '..'):
                echo "<li>";
                    echo !is_dir($dir.'/'.$file) ? $file : '<strong>'. $file . '</strong>';
                    if (is_dir($dir.'/'.$file)) {
                        listAllDir($dir.'/'.$file);
                    }
                echo "</li>";
            endif;
        endforeach;
    echo "</ul>";
}

listAllDir('.');
  */
#echo __DIR__;//Biz hangi dosyanın içerindeysek dir komutu bize o yolu göstermektedir.
        ##scandir()
        /*
        $basedir=require '../ayar.php';

        $array=scandir($basedir);//Taramak istediğimiz dizini burada taramak istiyoruz.
        echo '<pre>';
        print_r($array);
        */
            ##glob();##
        $basedir=require '../ayar.php';
        $array=glob($basedir.'/*');//'/*' bütün dosyaları getir demek. pattern kullandık. Tam detaylı dosya ları getirir.
        //* dan sonra .php yazarsak sadece php dosyalarını getirir.

      $dizi=  array_map(function ($e){
            global $basedir;
            return str_replace($basedir,'',$e);
        },$array);
        echo'<pre>';
        print_r($dizi);



