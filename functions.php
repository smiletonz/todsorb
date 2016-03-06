<?php

function seed_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background', array('default-color' => 'fff'));
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );register_nav_menus( array(
		'primary' => 'Primary Menu'
	));
}
add_action( 'after_setup_theme', 'seed_setup' );


function seed_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'seed' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Banner', 'seed' ),
		'id'            => 'banner-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'seed_widgets_init' );

?>