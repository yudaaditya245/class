<?php

class Wajan
{
    public $warna;
    public $diameter;
    public $kondisi;

    function wajan()
    {
        return 'Wajan';
    }
}

$Wajan = new Wajan();

$Wajan->warna = 'Silver';
$Wajan->diameter = '30cm';
$Wajan->kondisi = 'Layak Pakai';

echo $Wajan->wajan();
echo '<br/>';
echo $Wajan->warna;
echo '<br/>';
echo $Wajan->diameter;
echo '<br/>';
echo $Wajan->kondisi;