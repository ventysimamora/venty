<?php

class ContohStatic
{
    public static $nama = ["Santi","Ratih","Amel"];
    
    public static $index = 1;

    public static function all()
    {
        $index = 1; // variabel global


        foreach(self::$nama as $na)
        {
            echo $index++ .".".$na . "<br>";
        }
    }

    public function display()
        {
            echo self::all();
        }
    
}


Class Substatic extends ContohStatic
{

}

//inisialisasi obje
echo ContohStatic::$nama;

echo "<br>";
echo ContohStatic::all();