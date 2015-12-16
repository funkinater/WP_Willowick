<?php
$args = array('post_type' => 'testimonial', 'orderby' => 'rand');
$query = New WP_Query($args);

?>
<div id="testimonials">
    
<div id="the_finger"></div>
    <p>What Our Clients Say...</p>
    <blockquote>
        <ul class="rotatelist">
            <?php 
                   if($query->have_posts()) {
                       while ($query->have_posts()) {
                           $query->the_post();
                           echo '<li>' . get_the_content() . '<author>' . get_the_title() . '</author></l1>';
                       }
                   }
                   
                   wp_reset_query();
            ?>
        </ul>
    </blockquote>
</div> <!--#testimonials-->