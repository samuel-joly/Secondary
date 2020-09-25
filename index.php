<?php
    include("models/article.php"); 
    $article = new Article();
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel='stylesheet' type='text/css' href='css/index.css'/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Joly Samuel</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href='#'>Main</a>
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
                <h3>Web developper & code enthousiast<img src='medias/logo.jpg'/></h3>       
                <article>
                    <h3>//Skills</h3>
                    <ul>
                        <li><p>WebDev</p>Trying to not make useless website</li>
                        <li><p>Vim User</p>Need to feel like a movie hacker</li>
                        <li><p>GitHub surfer</p> Love to hanging out on github</li>
                        <li><p>Social ninja</p>Trying to hide from most of humanity</li>
                        <li><p>Looking news on the internet</p> 24/7 </li>
                    </ul>
                </article>

                <article>
                    <h3>//On this site</h3>

                    <ul>
                        <li><p>Blog</p>- My dev adventure and discovery</li>
                        <li><p>Katas</p>- Explanation of coding exercises</li>
                        <li><p>Memes</p>- Should I describe it ?</li>
                    </ul>
                </article>

                <article id='newsFeed'>
                    <h3>//Latest updates</h3>
                    <ul id='lastNews'>
                        <?php foreach($article->getLastArticles() as $a){ ?>
                            <li><b><?=$a["Date_parution"]?></b>-<a href='/portoflio/article/<?=$a["id"]?>'><?=$a["Nom"]?></a></li>
                        <?php } ?>
                        <li><b><a href='/portoflio/articles'>See all</a></b></li>
                    </ul>
                </article>

                <footer>
                    <i>This website does not speak for my workplace, my friends, my family, my pets. I'm the only responsible person for this mess. If you want to see more of this, you can go <a href='#'>here</a> or <a href='#'>there</a>.</i>
                    <i> All original written and graphical content is licensed under a <a href='https://creativecommons.org/licenses/by/4.0/'>Creative Commons Attribution 4.0 International License</a></i>
                </footer>

            </section>
        </main>
    </body>
</html>