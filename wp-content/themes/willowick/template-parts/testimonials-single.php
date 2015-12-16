<?php
$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'posts_per_page' => 1);
$tquery = New WP_Query($args);

        if($tquery->have_posts()) {
                $tquery->the_post();
                echo get_the_content() . '<author>' . get_the_title() . '</author></l1>';
            }

        wp_reset_query();
 ?>