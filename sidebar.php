<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blankthree
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
<div class="secondary widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .secondary -->
<?php } // end if primary sidebar is active ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
<div class="tertiary widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #tertiary .widget-area -->
<?php } // end if secondary sidebar is active ?>
