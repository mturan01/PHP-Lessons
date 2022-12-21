<?php

class Bir{
    public function methodBir(){
        echo 'Method Bir';
    }
}
/*final*/ class iki extends Bir{ //Final yazarsak burda durdur der ve method üç e geçemez ve bize fatalerror hatası verir.

    public function methodiki(){
        echo 'Method İki';
    }

}
class uc extends iki{

    public function methodduc(){
        echo 'Method Üç';
    }

}

$Uc=new uc();

$Uc->methodBir();
$Uc->methodiki();
$Uc->methodduc();