<?php
    include 'geometrijskoTelo.php';
    include 'krug.php';
    include 'kvadrat.php';

    $k = new krug;
    echo "Povrsina kruga je ". $k->izracunajPovrsinu() . ", a obim je " . $k->izracunajObim() . "\n";

    $kv = new kvadrat;
    echo "Povrsina kvadrata je ". $kv->izracunajPovrsinu() . ", a obim je " . $kv->izracunajObim() . "\n";

?>