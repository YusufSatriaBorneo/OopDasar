<?php

class Contoh
{
    public static $angka = 1;
    public static function halo()
    {
        return "Halo " . self::$angka++ . " kali.";
    }
}


$obj = new Contoh();
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";

echo "<hr>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
