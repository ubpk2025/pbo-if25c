<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;
}

$produk = new Produk();
$produk->kode   = 'P0001';
$produk->nama   = 'Laptop';
$produk->harga  = 10000000;
$produk->stok   = 5;
$pajak          = Produk::PAJAK * 100;
$jumlah_pajak   = $produk->harga * Produk::PAJAK;
$total          = $produk->harga + $jumlah_pajak;

echo "Produk    : " . $produk->nama;
echo "<br/>Harga     : Rp " . $produk->harga;
echo "<br/>Stok      : " . $produk->stok;
echo "<br/>Pajak     : " . $pajak . "%";
echo "<br/><br/>Total harga setelah pajak adalah Rp " . $total;
?>