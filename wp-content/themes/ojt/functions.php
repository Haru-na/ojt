<?php

//タイトル出力
// function wpbeg_title( $title ) {
//     if ( is_front_page() && is_home() ) { //トップページなら
//         $title = get_bloginfo( 'name', 'display' );
//     } elseif ( is_singular() ) { //シングルページなら
//         $title = single_post_title( '', false );
//     }
//     return $title;
// }
// add_filter( 'pre_get_document_title', 'wpbeg_title' );

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

 // スライダー ここに書いてエラー出たからindex.php８行目に書いてる
// echo do_shortcode('[smartslider3 slider="4"]');


// 投稿数を取得する
function count_user_posttype($userid,$posttype) {
    global $wpdb;
    $where = get_posts_by_author_sql($posttype, true, $userid,true);
    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
    return $count;
}

?>