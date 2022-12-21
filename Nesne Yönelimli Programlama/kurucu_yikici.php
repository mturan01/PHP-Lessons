<?php
class User{
    public function __construct()
    {
        echo 'Kurucu Method Çalıştı'.'<br>';
    }
    public function __destruct()
    {
        echo 'Yıkıcı Method Çalıştı'.'<br>';
    }
    public function selam(){
        echo 'Selam Naber?'.'<br>';
    }
}
$User= new User();

$User->selam();