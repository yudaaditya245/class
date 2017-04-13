<?php

class Kipas
{
    public $warna;
    public $merk;
    public $ukuran;

    function kipasAngin()
    {
        return "Kipas angin";
    }
}

$Kipas = new Kipas();

$Kipas->warna = 'Hitam';
$Kipas->merk = 'Maspion';
$Kipas->ukuran = 'Besar';

echo $Kipas->kipasAngin();
echo '<br/>';
echo 'warna : '.$Kipas->warna;
echo '<br/>';
echo 'merk : '.$Kipas->merk;
echo '<br/>';
echo 'ukuran : '.$Kipas->ukuran;
