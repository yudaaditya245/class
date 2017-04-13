<?php

class Router
{
    public $merkWifi;
    public $kecepatan;
    public $pengguna;

    function wifiRouter()
    {
        return 'Wifi';
    }
}

$Wifi = new Router();

$Wifi->merkWifi = 'First Media';
$Wifi->kecepatan = '10 Mbps';
$Wifi->pengguna = 10;

echo $Wifi->wifiRouter();
echo '<br/>';
echo 'merk : '.$Wifi->merkWifi;
echo '<br/>';
echo 'kecepatan : '.$Wifi->kecepatan;
echo '<br/>';
echo 'jumlah pengguna : '.$Wifi->pengguna;