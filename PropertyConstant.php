<?php

namespace Pbo\Marketplace;

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

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

?>