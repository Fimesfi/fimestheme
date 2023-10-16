<?php
/**
 * The header section of the theme.
 * @package Fimestheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fimestheme' ); ?></a>

	<header class="site-header">
		<?php get_template_part( 'template-parts/header/branding' ) ?>
		<?php get_template_part( 'template-parts/header/navigation' ) ?>
	</header>

	<div class="site-content">
