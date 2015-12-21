<?php
$args = array('post_type' => 'testimonial', 'orderby' => 'rand');
$query = New WP_Query($args);

?>
<div id="testimonials">
    
<div id="the_finger"></div>
<blockquote>
    <p>Client Testimonials</p>
        <ul class="rotatelist">
            <?php 
                   if($query->have_posts()) {
                       while ($query->have_posts()) {
                            $query->the_post();
                            $the_content = get_the_content();
                            $the_content = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_content);
                            echo '<li>' . $the_content . '<author>' . get_the_title() . '</author></l1>';
                       }
                   }
                   
                   wp_reset_query();
            ?>
        </ul>
</blockquote>
</div> <!--#testimonials-->