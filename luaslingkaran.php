<?php

class LuasLingkaran {

    public const phi = 3.14;

    public int $jari;

    public function __construct($isijari=1){
        $this->jari = $isijari;
    }

    public function tampil($nama = 'ban'){
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "luas lingkaran {$nama} hasilnya adalah: {$rumus}";

    }

    public static function testing(){
        echo "<br/>";
        echo "ini testing static";
    }

    public function __destruct(){
        echo "udah ah cape";
    }
}
$lingkaran = new LuasLingkaran(10);
//$lingkaran->jari = 10; //input nilai jari-jari
$lingkaran->tampil('roda');

LuasLingkaran::testing();

//$rumus = LuasLingkaran :: phi * ($lingkaran->jari * $lingkaran->jari);

//echo "Hasilnya adalah : " . $rumus;