<?php
$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'posts_per_page' => 1);
$tquery = New WP_Query($args);

        if($tquery->have_posts()) {
                $tquery->the_post();
                $the_content = get_the_content();
                $the_content = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_content);
                echo $the_content . '<author>' . get_the_title() . '</author></l1>';
            }

        wp_reset_query();
 ?>