<?php

class Hp
{
    public $warna;
    public $ukuran;
    public $harga;

    public function handPhone()
    {
        return "Handphone";
    }
}

$Handphone = new Hp();

$Handphone->warna = 'Hitam';
$Handphone->ukuran = '5 inch';
$Handphone->harga = '2 juta';

echo $Handphone->handPhone();
echo '<br/>';
echo 'warna : '.$Handphone->warna;
echo '<br/>';
echo 'ukuran : '.$Handphone->ukuran;
echo '<br/>';
echo 'harga : '.$Handphone->harga;
