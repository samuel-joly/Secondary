<?php
require_once(ROOT."models/bdd.php");
class Admin extends Bdd{

    public function connect($args) {
        $sth = $this->pdo->prepare("SELECT password FROM users WHERE id = 1");
        if($sth->execute()) {
            $psw = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($args["psw"],$psw[0]["password"] )) {
                return ["error"=>true];
            } else {
                return ["error"=>false,
                        "message"=> "Wrong password."];
            }
        }
    }

}

