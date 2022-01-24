<?php
abstract Class Product
{
    public $nama;
    //syarat:
    //1.memiliki atribute /abstract
    //2.memiliki fungsi yang bersifat abstact
    //3.tidak memiliki contain boby pada function

    abstract public  function judul (string $nama):void;

}
    class Buku extends Product    {
        public $nama; //variabel global

        public function __construct(string $nama = "moralandscape")
        {
            $this->nama = $nama;
        }
        public function getNama(): string
        {
            return $this->nama;
        }

        public function judul(string $nama) : void //overriding
        {
            echo $this->nama;
        }
    }

