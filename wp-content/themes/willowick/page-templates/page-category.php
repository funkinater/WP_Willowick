<?php

/* 
 * Template Name: Product Category
 */

get_header(); the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <?php 
                    //Get the categories of the products to list
                    $categories = get_post_meta($post->ID, "categories", true);
                       //example: returns "Prod1|123::Prod2|231::Prod3|133"
                    $allCategories = explode("::", $categories);
                       //example: $allCategories[0] = "Prod1|123"
                    
                    //Initialize HTML output variable
                    $output = '';
                    
                    foreach ($allCategories as $category) {
                        $pieces = explode("|", $category);
                           //example: $pieces[0] = "Prod1"  $pieces[1]=123
                        $link = get_permalink($pieces[1]);
                        $args = array(
                          'post_type' => 'page',
                          'post_parent' => $pieces[1],
                          'posts_per_page' => -1
                        );
                        
                        ?>
                    
                    <div class="product-group group">
                        <h3><a href="<?php echo $link; ?>"><?php echo $pieces[0]; ?></a></h3>
                        <?php
                            //Query for products in this category
                            $query = new WP_Query($args);
                            while ( $query->have_posts()) {
                                $query->the_post();
                        ?>
                        <a href="<?php $query->the_permalink(); ?>" class="product-jump" title="<?php echo $query->the_title(); ?>"
                        <?php
                            } //endwhile
                        ?>
                    </div><!--.product-group .group -->
                    <?php
                        } //endfor
                    ?>
                    
                    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();