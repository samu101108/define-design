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

// Contexto e Query dos posts depoimentos
$args = array(
   'post_type' => 'depoimento',
   'posts_per_page' => -1,
);
$context['depoimentos'] = new Timber\PostQuery($args);
//End - Contexto e Query dos  posts depoimentos

// Contexto e Query dos posts marca
$args = array(
   'post_type' => 'marca',
   'posts_per_page' => -1,
);
$context['marcas'] = new Timber\PostQuery($args);
//End - Contexto e Query dos  posts marcas

// Contexto e Query dos posts produto
$args = array(
   'post_type' => 'produto',
   'posts_per_page' => -1,
);
$context['produtos'] = new Timber\PostQuery($args);
//End - Contexto e Query dos  posts produtos

// Contexto e Query dos posts original
$args = array(
   'post_type' => 'original',
   'posts_per_page' => 3,
);
$context['originais'] = new Timber\PostQuery($args);
//End - Contexto e Query dos posts original


$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'homepage.twig' ), $context );
