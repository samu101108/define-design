<?php
/**
 * Template name: Homepage
 */

$context = Timber::context();

// Contexto e Query dos blog posts
$args = array(
   'post_type' => 'post',
   'posts_per_page' => 2,
);
$context['posts'] = new Timber\PostQuery($args);
//End - Contexto e Query dos blog posts

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'homepage.twig' ), $context );
