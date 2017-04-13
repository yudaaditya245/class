<?php

class Alquran
{
    public $ukuran;
    public $warna;
    public $jumlah;

    function alQuran()
    {
        return "Al-Qur'an";
    }
}

$Al = new Alquran();

$Al->ukuran = 'Besar';
$Al->warna = 'Ungu';
$Al->jumlah = 20;

echo $Al->alQuran();
echo '<br/>';
echo $Al->ukuran;
echo '<br/>';
echo $Al->warna;
echo '<br/>';
echo $Al->jumlah;