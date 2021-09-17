<?php
    //include 'geometrijskoTelo.php';
    //include 'krug.php';
    //include 'kvadrat.php';
    //include 'pravougaonik.php';
    //include 'trougao.php';

    use prviZadacic\classes\;
    use prviZadacic\interfaces ;
    
    //srediti namespace
    //include 'prviZadacic/autoloader.php';

    $k = new krug(2);
    echo "Povrsina kruga je ". $k->izracunajPovrsinu() . ", a obim je " . $k->izracunajObim() . "\n";

    $kv = new kvadrat(3);
    echo "Povrsina kvadrata je ". $kv->izracunajPovrsinu() . ", a obim je " . $kv->izracunajObim() . "\n";

    $p = new pravougaonik(2, 3);
    echo "Povrsina pravougaonika je ". $p->izracunajPovrsinu() . ", a obim je " . $p->izracunajObim() . "\n";

    $t = new trougao(2, 3, 4, 3);
    echo "Povrsina trougla je ". $t->izracunajPovrsinu() . ", a obim je " . $t->izracunajObim() . "\n" ;
?>