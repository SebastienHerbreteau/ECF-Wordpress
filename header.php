<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <?php
    wp_head();
    ?>
</head>

<body>
    <header>
        <div class="container-logo">
            <img class="logo" src="<?= get_template_directory_uri() ?>/img/logo.png">
            <p>dhalem</p>
        </div>
        <?php wp_nav_menu(['theme_location' => 'header']); ?>
        <button class="button-header">Get a Quote</button>
    </header>