<?php 

    require '../app/Autoloader.php';
    Autoloader::register(); 

    $config = Config::getInstance();
    var_dump($config);

    