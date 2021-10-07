<?php 

$post = Article::find($_GET['id']);
if ($post === false) {
    App::notFound();
}
$categorie = Categories::find($post->category_id);
?>

<h1><?= $post->titre; ?></h1>

<p><em><?= $categorie->titre; ?></em></p>

<p> <?= $post->contenu; ?></p>