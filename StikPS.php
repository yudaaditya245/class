<?php

class Stik
{
    public $warna;
    public $jumlah;
    public $kondisi;

    function stikPS()
    {
        return "Stik PS";
    }
}

$Stik = new Stik();

$Stik->warna = 'Hitam';
$Stik->jumlah = 1;
$Stik->kondisi = 'Bekas';

echo $Stik->stikPS();
echo '<br/>';
echo $Stik->warna;
echo '<br/>';
echo $Stik->jumlah;
echo '<br/>';
echo $Stik->kondisi;