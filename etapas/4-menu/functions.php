<?php

function init_theme() {
	/**
	 * Registra um novo menu no tema
	 */
 	register_nav_menu('main-menu', "Menu Principal");
}

add_action( 'init', 'init_theme' );

function eati_setup_theme () {
	/**
	 * Adiciona suporte para logo customizado
	 */
	add_theme_support( 'custom-logo', array(
        'height'       => 50, // 200px de largura
        'flex-width'  => true,
        'header-text' => array( 'site-title' ),
    ));
}

add_action( 'after_setup_theme', 'eati_setup_theme' );


function eati_theme_scripts() {
	/**
	 * Adiciona estilo principal
	 */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'eati_theme_scripts' );