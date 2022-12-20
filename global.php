<?php

error_reporting(E_ALL);//Tüm htalaar gösterilmektedir

$isim='Mehmet';
function isimyaz(){
    global $isim; //Dışarıdaki bir değişkene ulaşmamaızı sağlamaktadır yani function içine global tanımını yapmamız gerekmektedir.
    echo $isim;
}
isimyaz();