<?php

// css読み込み
function ojt_script(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/ojt.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    // js読み込み
    wp_enqueue_script( 'ojt', get_template_directory_uri() . '/app.js', array(), '1.0.0',true);
}
add_action( 'wp_enqueue_scripts', 'ojt_script' );


// 外観にメニューを追加
add_theme_support( 'menus' );

// アイキャッチ画像がが扱えるように
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); //*ここ


?>