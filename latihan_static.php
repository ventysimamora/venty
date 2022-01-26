<?php

class Bapak
{
    public static string $judul = "ini dari class Bapak";

    public static function getjudul():string
    {
        return static::$judul; // self -> memanggil nilai dari class sendiri

    }
    public static function showClass():static
    {
        return new static;
    }

}


class Anak extends Bapak
{
    public static string $judul = "ini dari class Anak";
}

echo Bapak::$judul;
echo "<br>";
echo var_dump(Bapak::showClass());
echo "<br>";
echo "<hr>";
echo Anak ::getjudul();
echo "<br>";
echo var_dump(Anak::ShowClass());

echo Anak::$judul;
