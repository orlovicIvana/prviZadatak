<?php

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){

        $path = "classes/";
        $extension = ".php";
        $className=trim($className, "classes\/");
        $fullPath = $path . strtolower($className) . $extension;

        if(!file_exists($fullPath)){
            $path = "interfaces/";
            $extension = ".php";
            $className=trim($className, "interfaces\/");
            $fullPath = $path . strtolower($className) . $extension;
        }

        include_once $fullPath;
    }

    
?>