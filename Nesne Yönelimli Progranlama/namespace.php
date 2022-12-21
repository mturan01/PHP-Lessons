<?php
/*
 Namespace Kullanımı
Kullanılması zorunlu değildir.
Aynı isimli sınıfların ayırt edilmesini sağlar.
Geleneksel olarak anadizinden bulunduğu klasöre kadar uzanan bir namespace tanımlanır.

burada ilk olaral app altında controller ve view olmak üzere iki tane dosya açtık ve içlerine aynı isimle beraber php dosyası açtık
içlerine de home adı altında sınıflar oluştırduk. bu sayfa da onları çağırırken php hangisini çağıracağını bilemediği için hata mesajı verdi.
Bizde o dosyadizinlerine gidip namespace ekleyerek hem ilerde karışmayı önlemek ve başka yazılımcıların da işine kolaylaştırmak için
namespace methodundan yararkandık.
 */
require 'app\controller\Home.php';
require 'app\view\Home.php';

$Home= new app\controller\Home();
$HomeView= new app\view\Home();
