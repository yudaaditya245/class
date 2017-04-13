<?php

class Lampu
{
    public $warna;
    public $merk;
    public $harga;

    function lampu()
    {
        return "Lampu";
    }
}

$Lampu = new Lampu();

$Lampu->warna = 'Putih';
$Lampu->merk = 'Philip';
$Lampu->harga = '100 ribu';

echo $Lampu->lampu();
echo '<br/>';
echo 'warna : '.$Lampu->warna;
echo '<br/>';
echo 'merk : '.$Lampu->merk;
echo '<br/>';
echo 'harga : '.$Lampu->harga;