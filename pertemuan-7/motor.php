<?php

/**
 * Tugas:
 * 1. Buat class Motor
 * 2. Isi atributnya: merk, bensin, topSpeed, cc
 * 3. Dibuatkan constructornya
 * 4. Buat method `jalan` yang menerima parameter `jarak`.
 * Fungsi method berisi: mengurangi bensin sesuai jarak. 
 * 1liter untuk 30km
 */

 
 class Motor {
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc) {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }
    public function getInfo()
    {
        echo "<hr>Merk: " . $this->merk;
        echo "<br> bensin: " . $this->bensin . " Liter";
        echo "<br> Top Speed: " . $this->topSpeed . " Km";
        echo "<br> cc: " . $this->cc;
    }

    public function jalan($jarak) {
        $bensinTerpakai = $jarak / 30.0;
        if ($bensinTerpakai > $this->bensin) {
            echo "Bensin tidak cukup untuk menempuh jarak tersebut!";
        } else {
            $this->bensin -= $bensinTerpakai;
            echo "Berhasil menempuh jarak " . $jarak . " km.";
        }
    }
}

$Motor1 = new Motor('yamaha',2,100,125);


echo "<br>";
$Motor1->getInfo();
echo "<br>";
$Motor1->jalan(20);