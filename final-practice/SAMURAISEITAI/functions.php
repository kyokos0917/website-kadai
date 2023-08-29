<?php
function webst8_setup() {
   //ここに関数の中身を記述します。
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。

//カスタム投稿タイプのページネーションの件数を設定する（定数にしておくことをおすすめします）
const CUSTOM_POSTS_PER_PAGE = 5;
const CUSTOM_POSTS_PER_PAGE_HOME = 1;

function change_posts_per_page($query) {
    if ( is_admin() || !$query->is_main_query() ) {
        return;
    }

    //カスタム投稿タイプの一覧、カスタムタクソノミーなどposts_per_pageを書き換える条件を書きます
    if ( $query->is_archive( 'voice' ) || is_tax('voice_category') || is_tax('voice_tag')) {
        $query->set( 'posts_per_page', CUSTOM_POSTS_PER_PAGE );
    } 
    if( $query->is_front_page()) {
      $query->set( 'posts_per_page', CUSTOM_POSTS_PER_PAGE_HOME ); 
    }
  }
add_action( 'pre_get_posts', 'change_posts_per_page' );