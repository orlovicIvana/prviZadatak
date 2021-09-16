<?php
    include 'geometrijskoTelo.php';
    include 'krug.php';
    include 'kvadrat.php';
    include 'pravougaonik.php';
    include 'trougao.php';

    $k = new krug;
    echo "Povrsina kruga je ". $k->izracunajPovrsinu() . ", a obim je " . $k->izracunajObim() . "\n";

    $kv = new kvadrat;
    echo "Povrsina kvadrata je ". $kv->izracunajPovrsinu() . ", a obim je " . $kv->izracunajObim() . "\n";

    $p = new pravougaonik;
    echo "Povrsina pravougaonika je ". $p->izracunajPovrsinu() . ", a obim je " . $p->izracunajObim() . "\n";

    $t = new trougao;
    echo "Povrsina trougla je ". $t->izracunajPovrsinu() . ", a obim je " . $t->izracunajObim() . "\n" ;
?>