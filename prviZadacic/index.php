<?php
  
    use classes\krug;
    use classes\kvadrat;
    use classes\pravougaonik;
    use classes\trougao;
    use interfaces\geometrijskoTelo;

    include 'autoloader.php';
   

    $k = new krug(2);
    echo "Povrsina kruga je ". $k->izracunajPovrsinu() . ", a obim je " . $k->izracunajObim() . "\n";

    $kv = new kvadrat(3);
    echo "Povrsina kvadrata je ". $kv->izracunajPovrsinu() . ", a obim je " . $kv->izracunajObim() . "\n";

    $p = new pravougaonik(2, 3);
    echo "Povrsina pravougaonika je ". $p->izracunajPovrsinu() . ", a obim je " . $p->izracunajObim() . "\n";

    $t = new trougao(2, 3, 4, 3);
    echo "Povrsina trougla je ". $t->izracunajPovrsinu() . ", a obim je " . $t->izracunajObim() . "\n" ;
?>