<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Edin
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
	<?php endif; ?>

</div><!-- .content-wrapper -->
