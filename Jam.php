<?php

class Jam
{
    public $merk;
    public $diameter;
    public $tipe;

    function jamDinding()
    {
        return 'Jam Dinding';
    }
}

$Jam = new Jam();

$Jam->merk = 'Unknown';
$Jam->diameter = 30;
$Jam->tipe = 'analog';

echo $Jam->jamDinding();
echo '<br/>';
echo $Jam->merk;
echo '<br/>';
echo $Jam->diameter;
echo '<br/>';
echo $Jam->tipe;