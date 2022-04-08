<?php
/*
Template Name: Contact Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Test
 * @since MTM6303 Test 1.0
 */

get_header(); ?>

<?php
	while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/page/content', 'contact' );

	endwhile; // End of the loop.
get_footer(); ?>

