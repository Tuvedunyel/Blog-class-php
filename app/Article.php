<?php 

class Article extends Table {

    public static function getLast() {
       return App::getDatabase()->query("
       SELECT articles.id, articles.titre, articles.contenu, categories.titre as category 
       FROM articles LEFT JOIN categories 
       ON category_id = categories.id",
        __CLASS__);
    }

    public function getUrl() {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait() {
        $html = '<p>' . substr($this->contenu, 0, 400) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
        return $html;
    }

    public static function lastByCategory($category_id) {
        return App::getDatabase()->prepare("
       SELECT articles.id, articles.titre, articles.contenu, categories.titre as category 
       FROM articles LEFT JOIN categories 
       ON category_id = categories.id WHERE category_id = ?", [$category_id],
        __CLASS__);
    }
}