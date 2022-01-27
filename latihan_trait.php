<?php

trait serviceGreeting
{
    //syarat:
    public $nama;

    public function sayHelo($nama):void
    {
        
    }
}

class User
{
     //mendeklarasi saja
     use serviceGreeting;

     public function sayHello($nama)
     {
         echo "Hallo".$nama;
     }
}
// inisialisasi class object
$user1 = new User();
$user1->sayHello(nama: "venty");
