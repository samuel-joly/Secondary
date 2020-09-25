<?php

require_once("bdd.php");

class Article extends Bdd{
    
    public function getArticle($id) {
        $sth = $this->pdo->prepare("SELECT * FROM article WHERE id=?");
        if($sth->execute([$id])) {
            return $sth->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getLastArticles(){
        $sth = $this->pdo->prepare("SELECT * FROM article ORDER BY Date_parution DESC");
        if($sth->execute()) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function addArticle($args){
        $sth = $this->pdo->prepare("
        INSERT INTO article(id, Nom, Date_parution, Description) 
        VALUES (NULL, ?, CURRENT_DATE, ?)");

        if($sth->execute($args)) {
            return true;
        } else {
            return [false=>$args];
        }
    }
    
    public function getAllArticles() {
        $sth = $this->pdo->prepare("SELECT * FROM article");
        if($sth->execute()) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
?>
