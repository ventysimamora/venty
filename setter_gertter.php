<?php

class contoh2
{
    //variabel global
    public $nama;
    private $harga;

    //constructor
    public function __contruct(string $nama = "kopi", int $harga = 1500)
    {
        $this-> nama = $nama;
        $this-> harga = $harga;
        
    }

    public function setNama(string $nama)
    {
        $this-> nama = $nama;
    }
    public function  getNama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "nama : " .$this->getNama();
        echo "<br>";
        echo "harga :" .$this->getHarga();
    }    



    public function setHarga(int $harga)
    {
        $this-> harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    
}


$contoh1 = new Contoh2();

$contoh1->setNama(nama: "buku");
$contoh1->setHarga(harga : 1500);

echo $contoh1->getNama();
echo $contoh1->getHarga();




