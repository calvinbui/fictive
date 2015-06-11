<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Fictive
 */
?>
<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
    <div id="widget-area-right" class="site-sidebar-right widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
    </div><!-- #secondary -->
<?php endif; ?>