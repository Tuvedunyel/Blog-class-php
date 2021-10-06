<?php

$db = "mysql:host=localhost;dbname=blog";
$user = "root";
$password = "";

$pdo = new PDO($db, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') .'"');

var_dump($count);