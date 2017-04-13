<?php

class Tas
{
    public $tipe;
    public $harga;
    public $warna;
    public $merk;

    function tasRansel()
    {
        return "Tas Ransel";
    }
}

$Tas = new Tas();

$Tas->tipe = 'Ransel';
$Tas->harga = 200000;
$Tas->warna = 'Hitam';
$Tas->merk = 'Palazzo';

echo $Tas->tasRansel();
echo '<br/>';
echo 'tipe : '.$Tas->tipe;
echo '<br/>';
echo 'harga : '.$Tas->harga;
echo '<br/>';
echo 'warna : '.$Tas->warna;
echo '<br/>';
echo 'merk : '.$Tas->merk;
