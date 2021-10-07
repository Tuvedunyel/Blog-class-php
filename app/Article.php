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
}