<?php

//panggil file propertyconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk('P0001', 'Laptop', 10000000, 5);
// $produk->kode   = 'P0001';
// $produk->nama   = 'Laptop';
// $produk->harga  = 10000000;
// $produk->stok   = 5;

echo "Produk         : " . $produk->nama;
echo "<br/>Harga     : Rp " . $produk->harga;
echo "<br/>Stok      : " . $produk->stok;
echo "<br/>Pajak     : " . $produk->pajak() . "%";
echo "<br/>Total harga setelah pajak adalah Rp " . $produk->total();

?>