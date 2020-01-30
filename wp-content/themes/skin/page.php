<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$templates = array(
    'Templates/page-' . $post->post_name . '.twig',
    'Templates/page.twig',
    'Templates/singular.twig',
    'Templates/index.twig');

if ( is_home() || is_front_page()) {
    $context['posts'] = Timber::get_posts('post_type = post');

    array_unshift( $templates, 'Templates/front-page.twig', 'Templates/home.twig' );
}

Timber::render($templates, $context );
