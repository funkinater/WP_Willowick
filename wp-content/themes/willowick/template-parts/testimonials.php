<?php
$args = array('post_type' => 'testimonial', 'orderby' => 'rand');
$query = New WP_Query($args);

?>

<div id="testimonials">
    <p>See what our clients have to say!</p>
    <blockquote>
        <ul>
            <?php 
                   if($query->have_posts()) {
                       while ($query->have_posts()) {
                           the_post();
                           echo '<li>' . get_the_content() . '<li>';
                       }
                   }
                   
                   wp_reset_query();
            ?>
        </ul>
    </blockquote>
</div>