<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!defined("ROOT")) {
        define("ROOT", getcwd()."\\");
    }

    require_once(ROOT."models/bdd.php");

    $action = $_GET["go"]??"";

    switch($action) {

        case "blog":
                include(ROOT."models/article.php"); 
                $article = new Article();
		include(ROOT."views/blog.php");
		break;

        case "crypt":
                include(ROOT."controllers/adminController.php");
                if(isset($_SESSION["amns"])) {
                    include(ROOT."views/forms/article.php");
                } else {
                    include(ROOT."views/forms/amns.php");
                }
                break;

        case "article":
            include(ROOT."models/article.php");
            $id_article = $_GET["id"]??0;
            $article = new Article();
            $article = $article->getArticle($id_article);
            include(ROOT."views/article.php");
            break;
        
        default:
                include(ROOT."views/main.php");
            break;

    }
    
    if(isset($_SESSION["error"])) {
            include(ROOT."controllers/errorController.php");
    }

    include(ROOT."views/templates/template.php");
?>
