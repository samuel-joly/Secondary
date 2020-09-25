<?php
    include("../models/article.php"); 
    $article = new Article();
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel='stylesheet' type='text/css' href='../css/index.css'/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Joly Samuel</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href='../'>Main</a>
                    </li>

                    <li>
                        - <a href='#'>Blog</a>
                    </li>

                    <li>
                        - <a href='#'>Katas</a>
                    </li>

                    <li>
                        - <a href='#'>Memes</a>
                    </li>
                </ul>
            </nav>

            <h3>Samuel Joly</h3>
        </header>


        <main>
            <section id='mainPage'>
                <h3>Web developper & code enthousiast<img src='../medias/logo.jpg'/></h3>   

                <article id='articlesZone'>
                    <h3>//Blog</h3>   
                    <?php foreach($article->getAllArticles() as $a) { ?>
                        <p><b><?=$a["Date_parution"]?></b> - <a href='/articles/<?=$a["id"]?>'><?=$a["Nom"]?></a></p>
                    <?php } ?>
                    <a href='../'>&lt;&lt;&lt;Retour</a>
                </article>

                <footer>
                    <i>This website does not speak for my workplace, my friends, my family, my pets. I'm the only responsible person for this mess. If you want to see more of this, you can go <a href='#'>here</a> or <a href='#'>there</a>.</i>
                    <i> All original written and graphical content is licensed under a <a href='https://creativecommons.org/licenses/by/4.0/'>Creative Commons Attribution 4.0 International License</a></i>
                </footer>

            </section>
        </main>
    </body>
</html>
