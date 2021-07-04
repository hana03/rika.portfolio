<?php

function rikaportfolio2020_scripts() {
  //cssを読み込む
wp_enqueue_style( 'rikaportfolio2020', get_stylesheet_uri() );
  //jsを読み込む
wp_enqueue_script( 'rikaportfolio2020', get_template_directory_uri() . '/js/sqript.js', array('jquery'), '2020', true );

}

add_action( 'wp_enqueue_scripts', 'rikaportfolio2020_scripts' );

add_action( 'after_setup_theme', 'register_menu' );

// タイトルタグの設定
function setup_my_theme() {
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'setup_my_theme');
// add_action( 'after_setup_theme', 'setup_my_theme');

function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu1', 'theme-slug' ) );
}

//カスタムメニューのサポート
register_nav_menu( 'header-menu', 'サイト上部のメインメニュー' );

register_nav_menu( 'sp-menu', 'spメニュー' );

register_nav_menu( 'footer-menu', 'サイト下部のメインメニュー' );

