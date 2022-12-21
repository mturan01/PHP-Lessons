<?php
/*
Erişilebilirlik
public:
Her yerden erişilebilir.

private:
Sadece sınıf içerisinden erişilebilir.

protected:
Dışarıdan erişilmez.
Sınıf içinde erişilebilir.
Miras alma yoluyla kullanılabilir.
*/class User{

    public $eposta;
    private $isim;
    protected $soyisim;

    /**
     * @return mixed
     */
    public function getEposta()
    {
        return $this->eposta;
    }

    /**
     * @param mixed $eposta
     */
    public function setEposta($eposta)
    {
        $this->eposta = $eposta;
    }

    /**
     * @return mixed
     */
    public function getIsim()
    {
        return $this->isim;
    }

    /**
     * @param mixed $isim
     */
    public function setIsim($isim): void
    {
        $this->isim = $isim;
    }

    /**
     * @return mixed
     */
    public function getSoyisim()
    {
        return $this->soyisim;
    }

    /**
     * @param mixed $soyisim
     */
    public function setSoyisim($soyisim): void
    {
        $this->soyisim = $soyisim;
    }


}

$User=new User();

$User->setIsim('Mehmet');
$User->setSoyisim('Turan');
$User->setEposta('mehmetcuha@gmail.com');

echo $User->getIsim().'<br>';
echo $User->getSoyisim().'<br>';
echo $User->getEposta().'<br>';
