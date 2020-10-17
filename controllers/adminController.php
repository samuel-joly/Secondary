<?php
    if(!defined("ROOT")) {
        define("ROOT", dirname(getcwd())."\\");
    }

    require_once(ROOT."/models/bdd.php");

    $adminAction = $_GET["action"]??"";
    
    switch($adminAction) {
        case "newArticle":
            require_once(ROOT.'models\article.php');
            $article = new Article();

            $_POST["text"] = $article->markupHtml($_POST["text"]);
            $exec = $article->addArticle([$_POST["nom"],$_POST["text"],$_POST["groupe"]]) ;

            if($exec["error"]) {
                header("location:../index.php?go=blog");
            } else {
                $_SESSION["error"] = $exec["message"];            
                header("location:../index.php");
            }
            break;

        case "connect":
            session_start();
            require_once(ROOT."models/admin.php");
            $admin = new Admin();

            $exec = $admin->connect(["psw" => $_POST["psw"]]);

            if($exec["error"]) {
                $_SESSION["amns"] = true;
                header("location:../index.php?go=crypt");
            } else {
                $_SESSION["error"] = $exec["message"];
                echo $_SESSION["error"];
                header("location:../index.php");
            }
            break;
    }

