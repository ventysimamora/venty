<?php

class keluarga
{
    //data member
    public $nama;
    public $marga;

    //contructor
    public function __construct(string $marga = "simamora", string $nama = "venty")
    {
        $this->nama = $nama;
        $this->marga = $marga;

    }

    public function setNama(string $nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "nama : " . $this->getNama() . "<br>";
        echo "marga : " . $this->getMarga();
    }

    public function getMarga()
    {
        return $this->marga;
    }
}

class Anak extends keluarga
{

}
$Anak1 = new keluarga;
echo $Anak1->display();
