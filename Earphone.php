<?php

class Earphone
{
    public $warna;
    public $merk;
    public $rating;

    function earPhone()
    {
        return "Earphone";
    }
}

$Earphone = new Earphone();

$Earphone->warna = 'Putih';
$Earphone->merk = 'Beat';
$Earphone->rating = 8.5;

echo $Earphone->earPhone();
echo '<br/>';
echo 'warna : '.$Earphone->warna;
echo '<br/>';
echo 'merk : '.$Earphone->merk;
echo '<br/>';
echo 'rating : '.$Earphone->rating;
