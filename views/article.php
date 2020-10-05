<?php ob_start(); ?>

<section id='mainPage'>

    <article >
        <h3 id='articleTitle'>
            <?=$article["Nom"]?>
            <small>
                <?=$article["Date_parution"]?>
            </small>
        </h3>
        
        <div id='art-desc'>
            <?=$article["Description"]?>
        </div>

    </article>

</section>

<?php $page_content = ob_get_clean(); ?>
