<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function jumlahPajak(){
        return $this->harga * self::PAJAK;
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk();
$produk->kode   = 'P0001';
$produk->nama   = 'Laptop';
$produk->harga  = 10000000;
$produk->stok   = 5;

echo "Produk         : " . $produk->nama;
echo "<br/>Harga     : Rp " . $produk->harga;
echo "<br/>Stok      : " . $produk->stok;
echo "<br/>Pajak     : " . $produk->pajak() . "%";
echo "<br/>Total harga setelah pajak adalah Rp " . $produk->total();
?>