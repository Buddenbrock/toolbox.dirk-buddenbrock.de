<?php
    include_once ('sites.php');

    $title = 'alpha 1.0.0';

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Toolbox</title>
    <meta name="author" content="Dirk Buddenbrock">
    <meta name="description" content="Toolbox">
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="https://toolbox.dirk-buddenbrock.de/">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="date" content="2020-09-05">
    <meta name="version" content="v1.0.0">

    <!-- Icon Tags -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.svg">

    <!-- Stylesheet Tags -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="page">
        <div class="page__header">
            <header>
                <img src="./images/logo.svg" alt="Toolbox" class="logo" />
                <h1><?=($title)?></h1>
            </header>
            <nav>

                <?php
                    if($sites) {
                        foreach ($sites['sections'] as $section) {
                            echo '<header>';
                                echo '<h2>' . $section[0] . '</h2>';
                            echo '</header>';
                            echo '<footer>';
                                echo '<ul>';
                                    foreach ($section[1] as $item) {
                                        echo '<li>';
                                        if($item[2]) {
                                            echo '<a href="' . $item[0] . '" title="' . $item[1] . '" target="_blank">' . $item[1] . '<span class="icon icon-' . $item[2] . '"></span></a>';
                                        } else {
                                            echo '<button class="iframe-link" data-link="' . $item[0] . '">' . $item[1] . '</button>';
                                            echo '<a class="show-mobile" href="' . $item[0] . '" title="' . $item[1] . '" target="_blank">' . $item[1] . '</a>';
                                        }
                                        echo '</li>';
                                    }
                                echo '</ul>';
                            echo '</footer>';
                        }
                    } else {
                        echo '<p class="error">Leider konnten wir keinen Tools für dich finden.</p>';
                    }
                ?>
                
            </nav>
            <footer>
                &copy; <?=(date('Y'))?> Buddenbrock Media Pro
            </footer>
        </div>
        <main class="page__main">
            <iframe id="iframe" src="./default.html" frameborder="0"></iframe>
        </main>
    </div>

    <script src="./scripts/main.js"></script>
</body>
</html>