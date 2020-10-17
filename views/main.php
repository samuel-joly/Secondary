<?php
    require_once(ROOT."models/article.php");
    $article = new Article();
    ob_start();
?>
<section id='mainPage'>
    <h3>Web developper & code enthousiast<img src='medias/logo.jpg'/></h3>       
    <article class='mainList'>
        <h3>//Skills</h3>
        <ul>
            <li><p>Vim User</p>Need to feel like a movie hacker</li>
            <li><p>GitHub surfer</p> Love to hanging out on github</li>
            <li><p>Social ninja</p>Trying to hide from most of humanity</li>
            <li><p>Looking news on the internet</p> 24/7 </li>
        </ul>
    </article>

    <article class='mainList'>
        <h3>//On this site</h3>

        <ul>
            <li><p>Blog</p>- My dev adventure and discovery</li>
            <li><a href='index?go=blog#future'>More to come</a></li>
        </ul>
    </article>

    <article class='mainList'>
        <h3>//Latest article</h3>
        <ul id='lastNews'>
            <?php foreach($article->getLastArticles() as $a){ ?>
                <li><p><?=$a["Date_parution"]?></p>-<a href='index.php?go=article&&id=<?=$a["id"]?>'><?=$a["Nom"]?></a></li>
            <?php } ?>
            <li><a href='index.php?go=blog'>See all</a></li>
        </ul>
    </article>

    <article class='mainList'>
        <h3>//Updates on this site</h3>
        <ul>
            <li><p>01/10/2020</p>-<a href='index.php?go=article&&id=1'>New blog zone !</a></li>
            <li><p>27/09/2020</p>-<a href='index.php?go=article&&id=2'>Creating this personnal page</a></li>
            <li><a href='index.php?go=blog#updates'>See all</a></li>
        </ul>
    </article>

</section>

<?php    $page_content = ob_get_clean();    ?>
