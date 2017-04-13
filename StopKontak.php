<?php

class StopKontak
{
    public $jumlahJek;
    public $warna;
    public $panjangKabel;

    function stopKontak()
    {
        return 'Stop Kontak';
    }
}

$SK = new StopKontak();

$SK->jumlahJek = 15;
$SK->warna = 'Putih';
$SK->panjang = '5 m';

echo $SK->stopKontak();
echo '<br/>';
echo $SK->jumlahJek;
echo '<br/>';
echo $SK->warna;
echo '<br/>';
echo $SK->panjang;