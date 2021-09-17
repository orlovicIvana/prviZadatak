<?php

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){

    
        $extension = ".php";
        $fullPath = strtolower($className) . $extension;

        include_once $fullPath;
    }

    
?>