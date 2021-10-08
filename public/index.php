<?php 

    require '../app/Autoloader.php';
    App\Autoloader::register(); 

    $config = App\Config::getInstance()->get('db_user');
    var_dump($config);
    $app = App\App::getInstance();
    $app->title = "Titre de test";

    