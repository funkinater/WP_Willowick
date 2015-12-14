<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Willowick
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		
		<div id="contact">
			
			<h1>Have a Question?</h1>
			<?php get_template_part('contact'); ?>
		</div> <!--#contact -->
		
		<div id="footerLeft">
                    <div id="scentwidget">
                        <h2>Find the Perfect Scent</h2>
                            <?php 
                                $args = array (
                                    'post_type' => 'scent',
                                    'posts_per_page' => 1,
                                    'orderby' => 'rand'
                                );
                                
                                $query = new WP_query($args);
                                
                                if ( $query->have_posts() ) : $query->the_post();
 
                                ?>
                        <a href="#" class="scent-thumbnail">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                            <strong><?php  the_title(); ?></strong>
                            <?php the_content(); ?>
                            <?php endif;
                            wp_reset_query();
                            ?>
                        
                    </div> <!--#scentwidget -->
			
		</div> <!--#footerLeft -->
                
                <div id="footerRight">
                    
                    <h2>Important Pages</h2>
                    <ul class="important-pages">
                        <li>My account</li>
                        <li>Policies</li>
                        <li>Terms & Conditions</li>
                        <li>Sitemap</li>
                    </ul><!--.important-pages-->
                </div><!--#footerRight-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
