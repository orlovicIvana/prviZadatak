<?php      
    require_once realpath("vendor/autoload.php");
    use MyApp\Model\Mentor as Mentor;
    use MyApp\Model\Praktikant as Praktikant;
    use MyApp\Config\Connection as Connection;
    
    
    $m = new Mentor();
    $p = new Praktikant();
    $c = new Connection();

?>