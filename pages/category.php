<?php 

$category = Categories::find($_GET['id']);
$articles = Article::lastByCategory($_GET['id']);
$categories = Categories::all();
?>