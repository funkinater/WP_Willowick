<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Willowick
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="wwidget" style="height:250px;">
        <h1>Widget #1</h1>
    </div>
    
    <div class="wwidget article-widget" style="height:250px;">
        <h1>Widget #2</h1>
    </div>
    
    <div class="wwidget fb-widget" style="height:250px;">
        <h1>Facebook Widget</h1>
    </div>
    
    <div class="wwidget fb-widget" style="height:250px;">
        <h1>Facebook Widget</h1>
    </div>
      
</aside><!-- #secondary -->
