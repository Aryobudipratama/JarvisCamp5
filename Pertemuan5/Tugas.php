<?php
class Kendaraan
{
    protected $nama;
    protected $warna;
    protected $merek;

    public function __construct($nama,$warna, $merek)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->merek = $merek;
    }

    public function melaju()
    {
        echo "$this->nama berwarna $this->warna, itu dengan merek $this->merek, sedang melaju.";
    }
}
class Mobil extends Kendaraan
{
    public $tipe;

    public function __construct($nama,$warna, $merek, $tipe)
    {
        parent::__construct($nama,$warna, $merek);
        $this->tipe = $tipe;
    }
    public function drifting()
    {
        echo "$this->nama berwarna $this->warna itu, dengan merek $this->merek, berjenis mobil $this->tipe.";
    }
}
class Motor
{
    public $harga;
    public $merek;
    public $nama;

    public function __construct($harga, $merek,$nama)
    {
        $this->harga = $harga;
        $this->merek = $merek;
        $this->nama = $nama;
    }

    public function mengerem()
    {
        echo "$this->nama ini harganya $this->harga, dengan tipe merek $this->merek dan sedang mengerem.";
    }
    public function standing(){
        echo "$this->nama ini harganya $this->harga, dengan tipe merek $this->merek dan sedang standing.";
    }
}

$gtr = new Mobil("GTR","putih","Nissan", "race");
$gtr->drifting();
echo "<br>";

$r1m = new Motor("1 miliyar","Yamaha","R1M");
$r1m->mengerem();
echo "<br>";

$H2R = new Motor("1 miliyar","Kawasaki","H2R");
$H2R->standing();


?>