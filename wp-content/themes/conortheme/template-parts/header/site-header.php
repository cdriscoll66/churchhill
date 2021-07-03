<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Conor
 * @since Conor 1.0
 */

$wrapper_classes  = 'site-header has-menu has-logo';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
