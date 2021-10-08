<?php 

    require '../app/Autoloader.php';
    Autoloader::register(); 

    $config = Config::getInstance()->get('db_user');
    var_dump($config);
    $app = App::getInstance();
    $app->title = "Titre de test";

    