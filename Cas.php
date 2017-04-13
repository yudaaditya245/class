<?php

class Cas
{
    public $untukLaptop;
    public $panjang;
    public $led;

    function casLaptop()
    {
        return 'Cas Laptop';
    }
}

$Cas = new Cas();

$Cas->untukLaptop = 'HP';
$Cas->panjang = '2 meter';
$Cas->led = 'Hijau';

echo $Cas->casLaptop();
echo '<br/>';
echo 'untuk laptop : '.$Cas->untukLaptop;
echo '<br/>';
echo 'panjang : '.$Cas->panjang;
echo '<br/>';
echo 'led : '.$Cas->led;
