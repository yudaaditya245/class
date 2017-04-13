<?php

class Bantal
{
    public $warna;
    public $jumlah;
    public $isi;

    function bantal()
    {
        return "Bantal Steroform";
    }
}

$Bantal = new Bantal();

$Bantal->warna = 'Putih';
$Bantal->jumlah = 2;
$Bantal->isi = 'Steroform';

echo $Bantal->bantal();
echo '<br/>';
echo $Bantal->warna;
echo '<br/>';
echo $Bantal->jumlah;
echo '<br/>';
echo $Bantal->isi;