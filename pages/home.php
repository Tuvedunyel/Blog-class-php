<ul>
<?php
    foreach(Article::getLast() as $post) :
?>
<div class="row">
    <div class="col-sm-8">
        <h2>
        <a href="<?= $post->url; ?>"><?= $post->titre; ?></a>,
        </h2>
        <p><em><?= $post->category; ?></em></p>
        <p><?= $post->extrait; ?></p>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach (Categories::all() as $category) : ?>
                <li>
                    <a href="<?= $category->url; ?>"><?= $category->titre ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php endforeach; ?>
</ul>

