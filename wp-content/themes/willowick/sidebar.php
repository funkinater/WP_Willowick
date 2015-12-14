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
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	
	<div class="wwidget">
		<h1>Soy Candles, Bath & Body</h1>
		<p>Willowick is the Best!<a class="button">Learn More</a></p>
	</div> <!-- .wwidget -->
	
	<div class="wwidget">
		<h1>Social Networks</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="button">Learn More</a></p>
	</div> <!-- .wwidget -->
	
	<div class="wwidget">
		<h1>Like Us on Facebook</h1>
		<p>Willowick is the Best!<a class="button">Learn More</a></p>
	</div> <!-- .wwidget -->
</aside><!-- #secondary -->
