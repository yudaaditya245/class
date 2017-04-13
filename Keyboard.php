<?php

class Keyboard
{
    public $tipe;
    public $warna;
    public $merk;

    function keyboard()
    {
        return 'Keyboard';
    }
}

$Keyboard = new Keyboard();

$Keyboard->tipe = 'QWERTY';
$Keyboard->warna = 'Hitam';
$Keyboard->merk = 'Logitech';

echo $Keyboard->keyboard();
echo '<br/>';
echo $Keyboard->tipe;
echo '<br/>';
echo $Keyboard->warna;
echo '<br/>';
echo $Keyboard->merk;