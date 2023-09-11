<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fimestheme
 */

 get_header();
 ?>
 
	 <main id="primary" class="site-main">
		 
		 <?php
		 //Page elements
		 while ( have_posts() ) :
			 the_post();
 
			 get_template_part( 'template-parts/content', 'page' );
 
			 /* Comments to page
			 if ( comments_open() || get_comments_number() ) :
				 comments_template();
			 endif;
			 */
 
		 endwhile; // End of the loop.
		 ?>
 
	 </main>
 
 <?php
 
 //Wanna sidebar?
 //get_sidebar();
 get_footer();
 