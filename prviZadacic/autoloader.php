<?php

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){


        $fullPath= str_replace("\\",DIRECTORY_SEPARATOR, strtolower($className)) .".php";
        include_once $fullPath;

    }

    
?>