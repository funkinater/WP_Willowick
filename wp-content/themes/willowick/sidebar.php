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
	
    
    
        <?php
        
        $args = array(
            'posts_per_page' => 1,
            'post_type'     => 'page',
            'orderby'       => 'rand',
            'meta_query'    =>  array(
                array(
                    'key' => 'pageExcerpt',
                    'value' => ' ',
                    'compare' => '!='
                ),
                array(
                    'key' => 'sidebar',
                    'value' => 1,
                    'compare' => '='
                ),
                'relation' => 'AND'
            )
        );
        
        $query = new WP_Query($args);
        
        if($query->have_posts()) {
            $query->the_post();
        ?>
    
	<div class="wwidget">
		<h1><?php the_title(); ?></h1>
                <p><?php echo get_post_meta(get_the_ID(), 'pageExcerpt', true); ?><a href="<?php the_permalink(); ?>" class="button">Learn More</a></p>
	</div> <!-- .wwidget -->
	
        <?php } //endif 
            wp_reset_query();
        ?>
                
        <?php
            $args = array(
                'post_type' =>  'article',
                'orderby'   => 'date',
                'order'     => 'DESC',
                'posts_per_page' => 1
            );
            $query = new WP_Query($args);

            if($query->have_posts()) {
                $query->the_post();
        ?>
	<div class="wwidget article-widget">
		<h1>Latest Blog Post</h1>
                
                <span class="article-date"><?php the_date(); ?></span>
                <span class="article-title"><?php the_title(); ?></span>
		<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="button">Full Article</a>
	</div> <!-- .wwidget -->
        
            <?php } /* endif */
                wp_reset_query();
            ?>
	
	<div class="wwidget fb-widget">
		<h1>Like Us on Facebook</h1>
		<div class="fb-page" data-href="https://www.facebook.com/willowickdesigns/" data-heigh="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/willowickdesigns/"><a href="https://www.facebook.com/willowickdesigns/">Willowick Designs</a></blockquote></div></div>
	</div> <!-- .wwidget -->
</aside><!-- #secondary -->
