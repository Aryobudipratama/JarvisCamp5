<?php
class Kucing {
    public $warna;
    public $corak;
    public $warna_mata;

    public function meow() {
        echo "Meow…";
    }

    public function makan() {
        echo "Kucing sedang makan.";
    }
    public function tidur() { 
        echo "Kucing sedang tidur.";
    }
}
$oyen = new Kucing();
$oyen->warna = "oren";
$oyen->corak = "belang";
$oyen->warna_mata = "kuning";

$oyen->meow();
$oyen->makan();
$oyen->tidur();

$bleki = new Kucing();
$bleki->warna = "hitam";
$bleki->corak = "polos";
$bleki->warna_mata = "kuning";

$bleki->meow();
$bleki->makan();
$bleki->tidur();
