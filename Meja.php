<?php

class Meja
{
    public $ukuran;
    public $jumlahKaki;
    public $gambar;

    function meja()
    {
        return "Meja Kantor";
    }

}

$Meja = new Meja();

$Meja->ukuran = 'Besar';
$Meja->jumlahKaki = 4;
$Meja->gambar = 'Ultraman';

echo $Meja->meja();
echo '<br/>';
echo 'ukuran : '.$Meja->ukuran;
echo '<br/>';
echo 'jumlah kaki : '.$Meja->jumlahKaki.' buah';
echo '<br/>';
echo 'gambar : '.$Meja->gambar;