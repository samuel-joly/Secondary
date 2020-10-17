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
                        <a href='index.php'>Main</a>
                    </li>

                    <li>
                        - <a href='index.php?go=blog'>Blog</a>
                    </li>
                </ul>
            </nav>

            <h3>Samuel Joly</h3>
        </header>


        <main>
            <?=$page_content?>
	</main>



        <footer>
            <i>This website does not speak for my workplace, my friends, my family, my pets.
            I'm the only responsible person for this mess. If you want to see more of this,
            you can go <a href='#'>here</a> or <a href='#'>there</a>.</i>
            <i>
                All original written and graphical content is licensed under a
                <a href='https://creativecommons.org/licenses/by/4.0/'>
                    Creative Commons Attribution 4.0 International License
                </a>
            </i>
        </footer>
    </body>
    <script src='js/script.js'></script>
</html>
