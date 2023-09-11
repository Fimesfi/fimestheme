<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fimestheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(!is_front_page()): //Is frontpage, hero: ?>
		<section class="hero">
			<?php the_title( '<h1 class="title">', '</h1>' ); ?>
		</section>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>
</article>
