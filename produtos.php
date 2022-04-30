<?php
/**
 * Template name: Produtos
 */

$context = Timber::context();

// Contexto e Query dos blog posts
$args = array(
	'post_type' => 'produto',
	'posts_per_page' => -1,
);
$context['produtos'] = new Timber\PostQuery($args);
//End - Contexto e Query dos blog posts

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'produtos.twig' ), $context );
