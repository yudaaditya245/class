<?php

class Panci
{
    public $diameter;
    public $warna;
    public $kondisi;

    function panci()
    {
        return 'Panci';
    }
}

$Panci = new Panci();

$Panci->diameter = '30cm';
$Panci->warna = 'Silver';
$Panci->kondisi = 'Bekas';

echo $Panci->panci();
echo '<br/>';
echo $Panci->diameter;
echo '<br/>';
echo $Panci->warna;
echo '<br/>';
echo $Panci->kondisi;