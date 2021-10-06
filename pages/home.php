<?php

$db = new Database('blog');

// $db = "mysql:host=localhost;dbname=blog";
// $user = "root";
// $password = "";

// $pdo = new PDO($db, $user, $password);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $res = $pdo->query('SELECT * FROM articles ');

// $datas = $res->fetchAll(PDO::FETCH_OBJ);

$datas = $db->query('SELECT * FROM articles');

var_dump($datas);

// $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') .'"');

// var_dump($count);