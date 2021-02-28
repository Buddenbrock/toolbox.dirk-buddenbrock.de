<?php
    include_once('Settings/config.php');
    include_once('Settings/sites.php');
    include_once('Settings/functions.php');
?>
<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="utf-8">
    <!--
        This site was created with ❤️ by Dirk Buddenbrock - https://www.dirk-buddenbrock.de/
    -->

    <base href="<?=($base)?>">
    <link rel="shortcut icon" type="image/svg+xml" href="Icons/favicon.svg" />

    <title><?=($title)?></title>
    <meta name="description" content="<?=($description)?>">
    <meta name="author" content="<?=($author)?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="public"/>

    <meta property="og:title" content="<?=($title)?>" />
    <meta property="og:description" content="<?=($description)?>️" />
    <meta property="og:image" content="<?=($image)?>" />
    <meta property="og:image:url" content="<?=($image)?>" />
    <meta property="og:image:width" content="<?=($imageWidth)?>" />
    <meta property="og:image:height" content="<?=($imageHeight)?>" />
    <meta property="og:image:alt" content="<?=($imageAlt)?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?=($websiteTitle)?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?=($title)?>" />
    <meta name="twitter:description" content="<?=($description)?>️" />
    <meta name="twitter:image" content="<?=($image)?>" />
    <meta name="twitter:image:alt" content="<?=($imageAlt)?>" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="compatible" content="IE=edge" />
    <meta name="robots" content="index,nofollow">
    <meta name="version" content="<?=($version)?>">

    <link rel="canonical" href="<?=($base)?>">

    <link rel="stylesheet" href="Css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar active">
            <button class="sidebar__button" title="Sidebar schließen"></button>
            <header>
                <img src="Images/logo.svg" alt="Toolbox" class="logo" />
            </header>
            <nav>

                <?php
                    if($sites) {
                        foreach ($sites['sections'] as $section) {
                ?>
                    <div class="accordion">
                        <button class="button">
                            <h2><?=($section[0])?></h2>
                        </button>
                        <div class="panel">
                            <ul>
                                <?php
                                    if($section[1]) {
                                        foreach ($section[1] as $item) {
                                            if($item[0]) {
                                                echo '<li>';
                                                if($item[2]) {
                                                    echo '<a href="' . $item[0] . '" title="' . $item[1] . '" target="_blank">' . $item[1] . '<span class="icon icon-' . $item[2] . '"></span></a>';
                                                } else {
                                                    echo '<button class="iframe-link" data-link="' . $item[0] . '">' . $item[1] . '</button>';
                                                    echo '<a class="show-mobile" href="' . $item[0] . '" title="' . $item[1] . '" target="_blank">' . $item[1] . '</a>';
                                                }
                                                echo '</li>';
                                            }
                                        }
                                    } else {
                                        showAlert('error', 'Leider konnten wir in dieser Kategorie keine Daten für dich finden.');
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
                        }
                    } else {
                        showAlert('error', 'Leider konnten wir keinen Tools für dich finden.');
                    }
                ?>

                <a class="alert footer" href="https://www.dirk-buddenbrock.de" target="_blank" rel="noopener" rel="noreferrer">&copy; <?=(date('Y'))?> dirk-buddenbrock.de</a>
            </nav>
        </div>
        <main>
            <iframe id="iframe" src="default.html" frameborder="0"></iframe>
        </main>
    </div>
    <script src="JavaScript/app.js"></script>
</body>
</html>