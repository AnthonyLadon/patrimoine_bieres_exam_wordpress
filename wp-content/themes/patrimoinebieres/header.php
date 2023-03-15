
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
        <link rel="shortcut icon" type="image/ico" href="img/favicon.gif">
        <link rel="stylesheet" type='text/css' href="style.css">
        <link rel="stylesheet" href="css/festival.css">
        <link rel="stylesheet" href="<?php bloginfo('url')?>/wp-content/themes/patrimoinebieres/css/festival.css"/>
        <?php wp_head(); ?>
 
    </head>
    <body>

        <header>
            <div id="wrapper">
                <img id="logo" src="<?php bloginfo('url')?>/wp-content/themes/patrimoinebieres/assets/logo.png" alt="logo du site">
                <?php wp_nav_menu(); ?>
            </div>
        </header>


