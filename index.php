<?php
require_once('./luaslingkaran.php');

use App\Math\LuasLingkaran;


$lingkaran = new LuasLingkaran(10);
//$lingkaran->jari = 10;
$lingkaran->tampil('roda'); //panggil method tampil