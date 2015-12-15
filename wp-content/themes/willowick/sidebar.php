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
		<h1>Latest Blog Post</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="button">Learn More</a></p>
	</div> <!-- .wwidget -->
	
	<div class="wwidget fb-widget">
		<h1>Like Us on Facebook</h1>
		<div class="fb-page" data-href="https://www.facebook.com/willowickdesigns/" data-heigh="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/willowickdesigns/"><a href="https://www.facebook.com/willowickdesigns/">Willowick Designs</a></blockquote></div></div>
	</div> <!-- .wwidget -->
</aside><!-- #secondary -->
