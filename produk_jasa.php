<?php

//panggil file propertyconstant
require('./jasa.php');

use Pbo\Marketplace\Jasa;

$produk = new Jasa();
$produk->setKode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);
// $produk->kode   = 'P0001';
// $produk->nama   = 'Laptop';
// $produk->harga  = 10000000;
// $produk->stok   = 5;

echo "Produk         : " . $produk->getNama();
echo "<br/>Harga     : Rp " . $produk->getHarga();
echo "<br/>Stok      : " . $produk->getStok();
echo "<br/>Pajak     : " . $produk->pajak() . "%";
echo "<br/>Total harga setelah pajak adalah Rp " . $produk->total();
echo "<br/>Metode pembayaran : " . $produk->payment('qris');    
?>