<?php
/*
Theme Name: Solarized Dark Theme
Theme URI: https://github.com/kesks/php-hypertext-preprocessor
Author: Kesks
Description: A simple dark-mode WordPress theme inspired by Solarized and Discord.
Version: 1.0
License: GPL-2.0
Text Domain: solarized-dark
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <style>
        body {
            background-color: #002b36;
            color: #839496;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        a {
            color: #268bd2;
            text-decoration: none;
        }
        a:hover {
            color: #2aa198;
        }
        header {
            background: #073642;
            padding: 20px;
            text-align: center;
        }
        footer {
            background: #073642;
            padding: 10px;
            text-align: center;
            color: #93a1a1;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>

<main>
    <h1>Welcome to Solarized Dark Theme</h1>
    <p>This is a simple dark-mode theme inspired by Discord and Solarized colors.</p>

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            the_content();
        }
    } else {
        echo '<p>No posts found.</p>';
    }
    ?>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Solarized Dark Theme.</p>
</footer>

</body>
</html>
