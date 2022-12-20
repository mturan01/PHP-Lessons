<?php

class Hash
{

    public function md5Hash($string)//Burada public yerine protected olsaydı da olurdu. Çünkü protextedda kalıtım yolutla aktarma yapılabilir ama orivate de yapılamaz ve hata verir.
    {
        return md5($string);
    }

    public function sha1Hash($string)
    {
        return sha1($string);
    }
}

class User extends Hash// burada ki extends bize kalıtım sağlamamaızı sağlıyor diğer classs daki bilgileri bu classımızın içinde kullanabiliyoruz.
{


    public $username;
    public $password;

  /*  public function md5Hash($string)//Burada public yerine protected olsaydı da olurdu. Çünkü protextedda kalıtım yolutla aktarma yapılabilir ama orivate de yapılamaz ve hata verir.
    {
        return md5($string);
    }
  */
    public function saveUser($username, $passwors)
    {
        $this->username = $username;
        $this->password = $this->md5Hash($passwors); //Burda eğer $this->yerine , parent yazarsak paraent::md5Hash... yukardaki bizim sınıfımızın içindeki olamayı al demektir,Normalde this dedğimiz zaman bizim sınıfımızı astetdiği için sınıfımızın içindekini alacaktır.

    }

    public function showUser()
    {
        echo $this->username . '<br>';
        echo $this->password . '<br>';
    }
}

$User = new User();

$User->saveUser('Mehmet Turan', '123456');

$User->showUser();