<?php

class CariArray
{
    public static $namas = ["Adventy","Alvina","Angel","Kelvin","Kehllmy","Ricardo","Sefriyanto","Stenly","Steven","Suryanto","Sukarta","Tasya",];
 

    public bool $search = false;
    
    public function getAllNama():CariArray
    {
        $index = 1;
        foreach(self::$namas as $nm)
        {
            echo $index++ . ". " . $nm . "<br>";
        }
        return $this;
    }
    public function getSatunama($searchNama)
    {

        echo "<Hr>Nama yang dicari: [<i>". $searchNama . "</i>]";
        $index = 0;
            for($index =0; $index < count(static::$namas);$index++)

            if($searchNama == static::$namas[$index])
            {
                $this->search = true;

                echo"<Br> Nama [<i>" . $searchNama . "</i>] ada di array pada index: " . ($index+1);
            }
        if ($this->search == false) {
            echo "<Br> Nama [<i>" . $searchNama . "</i>] tidak ada di array <Br>";
        }
        


    }
}

$cariArray = new CariArray();
echo $cariArray->getAllNama()->getSatunama(searchNama:"Adventy");
