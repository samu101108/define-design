<?php
/**
 * Template name: Originais Define
 */

$context = Timber::context();

// Contexto e Query dos originais
$args = array(
	'post_type' => 'original',
	'posts_per_page' => -1,
);
$context['originais'] = new Timber\PostQuery($args);
//End - Contexto e Query dos originais

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'originais.twig' ), $context );
