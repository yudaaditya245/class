<?php

class TongSampah
{
    public $warna;
    public $diameter;
    public $jumlahTampung;

    function tongSampah()
    {
        return 'Tong Sampah';
    }
}

$Tong = new TongSampah();

$Tong->warna = 'Biru';
$Tong->diameter = '30cm';
$Tong->jumlahTampung = '5 liter';

echo $Tong->tongSampah();
echo '<br/>';
echo $Tong->warna;
echo '<br/>';
echo $Tong->diameter;
echo '<br/>';
echo $Tong->jumlahTampung;