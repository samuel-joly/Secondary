<?php ob_start(); ?>

<section id='mainPage'>

    <form action='controllers/adminController.php?action=connect' method='post' class='adminForm'>
        <div class='inputBox'>
            <label for='psw'>Password:</label>
            <input type='password' name='psw' required/>
        </div>

        <div class='submitZone'>
            <input type='submit' value='Connect' class='submitBtn' name='action'/>
        </div>
    </form>

</section>
<?php $page_content = ob_get_clean(); ?>
