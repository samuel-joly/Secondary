<?php ob_start(); ?>
<section id='mainPage'>
    <form action='controllers\adminController.php?action=newArticle' class='adminForm' method='post' type='multipart/form-data'>

        <div class='inputContainer'>
            <div class='inputBox'>
                <label for='nom'>Name</label>
                <input class='w-100' type='text' name='nom'/>
            </div>

            <aside class='inputBox'>
                <label for='groupe'>Group</label>
                <select name='groupe'>
                    <option value='1'>Article</option>
                    <option value='2'>Updates</option>
                    <option value='3'>News</option>
                </select>
            </aside>
        </div>

        <div class='inputBox'>
            <label for='text'>Text</label>
            <textarea name='text' rows='30' cols='30'></textarea>
        </div>
        
        <div class='submitZone'>
            <input type='submit' class='submitBtnSecondary' name='preview' value='Preview'/>
            <input type='submit' class='submitBtn' name='action' value='Save'/>
        </div>
    </form>
</section>
<?php $page_content = ob_get_clean(); ?>
