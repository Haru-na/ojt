<?php

//タイトル出力
function wpbeg_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'wpbeg_title' );

function ojt_script(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/ojt.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/app.js', array(), '1.0.0',true);

}
add_action( 'wp_enqueue_scripts', 'ojt_script' );

//app.jsを読み込みたい
// function twpp_enqueue_scripts() {
//     wp_enqueue_script( 
//       'main-script', 
//       get_template_directory_uri() . '/app.js',
//       array(),
//       true
//     );
// }
// add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );
// 

?>