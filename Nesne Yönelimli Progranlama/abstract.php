<?php
//abstract=Soyut
// Soyut bir ürün sınıfı oluşturarak bu sınıftan türeticek sınıfları belirli bir şablona bağlamış olduk.
//Artık diğer sınıflar da bunlar gibi oldu yani abstractı bir şablon sınıf gibi düşünebiliriz.
abstract class Urun{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){
        // DB ye kayıt
        echo 'Urun adı:'.$this->urunAdi.'<br>';
        echo 'Urun Vergi:'.$this->urunVergi.'<br>';
        echo 'Urun Fiyat:'.$this->urunFiyat.'<br>';
    }

}

class Icecek extends Urun{

    public function urunAdi($urunAdi)
    {
       $this->urunAdi=$urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat=$urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi=$urunVergi;
    }
}
class Tekstil extends Urun{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi=$urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat=$urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi=$urunVergi;
    }
}
$Icecek = new Icecek();

$Icecek->urunAdi('Kola');

$Icecek->urunFiyat('10');

$Icecek->urunVergi('8');

$Icecek->urunEkle();

$Tekstil = new Tekstil();

$Tekstil->urunAdi('pantolon');

$Tekstil->urunFiyat('20');

$Tekstil->urunVergi('6');

$Tekstil->urunEkle();

