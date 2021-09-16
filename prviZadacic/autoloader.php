<?php

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){

        /*$path = "prviZadacic/classes/";
        $extension = ".php";
        $fullPath = $path . $class . $extension;

        include_once $fullPath;*/
        if(file_exists(filename: 'prviZadacic/classes/' . $className . '.php'))
            include_once 'prviZadacic/classes/' . $className . '.php';
        else if(file_exists(filename: 'prviZadacic/interface/' . $className . '.php'))
            include_once 'prviZadacic/interface/' . $className . '.php'
        else
            include_once $className . '.php';
    }
?>