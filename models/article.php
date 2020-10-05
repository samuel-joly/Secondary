<?php
class Article extends Bdd{
    
    public function getArticle($id) {
        $sth = $this->pdo->prepare("SELECT * FROM article WHERE id=?");
        if($sth->execute([$id])) {
            return $sth->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getLastArticles(){
        $sth = $this->pdo->prepare("SELECT * FROM article ORDER BY Date_parution DESC LIMIT 4");
        if($sth->execute()) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function addArticle($args){
        $sth = $this->pdo->prepare("SELECT * FROM article WHERE Nom = ?");
        if($sth->execute([$args[0]])) {
            if(empty($sth->fetchAll())) {
                $sth = $this->pdo->prepare("
                INSERT INTO article(id, Nom, Date_parution, Description, Groupe) 
                VALUES (NULL, ?, CURRENT_DATE, ?, ?)");

                if($sth->execute($args)) {
                    return ["error"=>true];
                } else {
                    return ["error"=>false,
                            "message"=>"SQL error."];
                }
            } else {
                return ["error"=>false,
                        "message"=>"Article title already taken."];
            }
        }

    }
    
    public function getAllArticles() {
        $sth = $this->pdo->prepare("SELECT * FROM article");
        if($sth->execute()) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
    public function markupHtml($str) {
        include(ROOT."models/markupHtml.php");
        $markup = new markupHtml($str);
        return $markup->text;
    }

}
