<?php
if ( ! defined( 'ABSPATH' ) ) { exit;}

function ods_scripts() {
	if ( ! is_admin() ) {
		wp_enqueue_script( 'ods_js', get_template_directory_uri() . '/assets/js/script.js','','',true ); // name,path,jq,version,footer
		wp_enqueue_style( 'ods_style', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'ods_scripts' );	// 載入全站 js/css

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link'); 
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('welcome_panel', 'wp_welcome_panel');
remove_filter('the_excerpt', 'wpautop');
add_filter('show_admin_bar','__return_false');
// add_filter('use_block_editor_for_post', '__return_false', 10); // 啟用 or 關閉 Gutenberg