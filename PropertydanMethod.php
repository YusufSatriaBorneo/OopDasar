<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produuk3 = new Produk();
$produuk3->judul = "Naruto";
$produuk3->penulis = "Masashi Kishimoto";
$produuk3->penerbit = "Shonen Jump";
$produuk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produuk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
