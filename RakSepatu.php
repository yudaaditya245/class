<?php

class RakSepatu
{
    public $jumlahTingkat;
    public $warna;
    public $harga;

    function rakSepatu()
    {
        return 'Rak Sepatu';
    }
}

$Rak = new RakSepatu();

$Rak->jumlahTingkat = 3;
$Rak->warna = 'Hijau';
$Rak->harga = 30000;

echo $Rak->rakSepatu();
echo '<br/>';
echo $Rak->jumlahTingkat;
echo '<br/>';
echo $Rak->warna;
echo '<br/>';
echo $Rak->harga;