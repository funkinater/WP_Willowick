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

	<div class="entry-content">
            
            <blockquote>
            
		<?php
                
                    the_content();
                    the_title("<author>", "</author>");
                    
		?>
            </blockquote>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php willowick_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
