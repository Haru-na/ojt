<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WordPress theme development static data for beginners">
    <meta name="keywords" content="WordPress, Theme, development">
    <!-- <link rel="stylesheet" href="./css/ojt.css"> -->
    <!-- <title>AmericanVillage</title> -->
    <?php wp_head();?>
</head>

<body<?php body_class();?>>
    <div class="body">
    <header class="top">
        <div class="header-left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="logo">
            </a>
        </div>

        <div class="header-right">
            <div class="menu">
                <input type="checkbox" name="hamburger" id="hamburger" class="hamburger">
                <label for="hamburger" class="btn">
                <span class="icon"></span>
                </label>
                <nav class="menu-content">
                    <ul class="menu">
                        <li class="menu-item"><a href="">Menu01</a></li>
                        <li class="menu-item"><a href="">Menu02</a></li>
                        <li class="menu-item"><a href="">Menu03</a></li>
                        <li class="menu-item"><a href="">Menu04</a></li>
                    </ul>   
                </nav>
        </div>
    </header>
