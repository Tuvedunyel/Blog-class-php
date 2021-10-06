<?php 
class Autoloader {
    static function autoload($class) {
        require __DIR__ . '/' . $class . '.php';
    }
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}