<?php
    ob_start();
?>

<section id='mainPage'>
    <h3>Web developper & code enthousiast<img src='medias/logo.jpg'/></h3>   

    <article class='mainList'>
        <h3 id='blogList'>//Blog</h3>   
        <ul>
            <?php foreach($article->getAllArticles() as $a) { ?>
                <li><p><?=$a["Date_parution"]?></p> - <a href='index.php?go=article&&id=<?=$a["id"]?>'><?=$a["Nom"]?></a></li>
            <?php } ?>
        </ul>
        <a href='index.php'>&lt;&lt;&lt; Go back</a>
    </article>


    <article class='mainList'>
        <h3 id='future'>//Coming soon !</h3>   
        <ul>
            <li><p>Comments</p>- Adding subscription free comments for every articles</li>
            <li><p>Git projects</p>- Adding my latest git push / projects I'm currently on</li>
            <li><p>Resume</p>- My work experiences, graduations, motivations</li>
        </ul>
        <a href='index.php'>&lt;&lt;&lt; Go back</a>
    </article>
</section>
<?php   $page_content = ob_get_clean(); ?>
