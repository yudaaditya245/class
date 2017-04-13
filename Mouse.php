<?php

class Mouse
{
    public $merk;
    public $warna;
    public $ukuran;

    function mouse()
    {
        return "Mouse";
    }
}

$Mouse = new Mouse();

$Mouse->merk = 'Logitech';
$Mouse->warna = 'Hitam';
$Mouse->ukuran = 'Sedang';

echo $Mouse->mouse();
echo '<br/>';
echo $Mouse->merk;
echo '<br/>';
echo $Mouse->warna;
echo '<br/>';
echo $Mouse->ukuran;
