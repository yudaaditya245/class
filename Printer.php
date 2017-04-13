<?php

class Printer
{
    public $merk;
    public $kondisi;
    public $waktuDigunakan;

    function printer()
    {
        return 'Printer';
    }
}

$Printer = new Printer();

$Printer->merk = 'Canon';
$Printer->kondisi = 'Baik';
$Printer->waktuDigunakan = 'Setiap Hari';

echo $Printer->printer();
echo '<br/>';
echo $Printer->merk;
echo '<br/>';
echo $Printer->kondisi;
echo '<br/>';
echo $Printer->waktuDigunakan;