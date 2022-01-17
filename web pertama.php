<?php

class Jurusan
{
    //yang lama
    /* public $nama; /variabel global (didalam class)
    public $kelas;
    public $jenis;

    //constructor
    public function __contruct($nama = "", $kelas ="", $jenis = "")
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jenis = $jenis;

    } */

    public function __contrutct(public $nama = "", public $kelas = "", public $jenis = "")

    {

    }public function  display():void
    {
        echo "Nama : " .$this-> nama . "<br><br>";
        echo "Kelas : " .$this-> kelas . "<br><br>";
        echo "Jurusan : " .$this->jenis;
    }

}
//inisialisasi objek
$jurusan1 = new jurusan("VENTY", "XII", "RPL");

echo $Jurusan1-> display();
















