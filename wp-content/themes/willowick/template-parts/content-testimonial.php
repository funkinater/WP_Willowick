<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Willowick
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
            <blockquote class="testimonial clearfix">
            
		<?php
                
                    echo get_the_content();
                    the_title("<author>", "</author>");
                    
		?>
            </blockquote>
    
</article><!-- #post-## -->
