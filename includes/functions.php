<?php
/**
 * Yeah, I know there's already a functions.php file. I just like to keep things organised
 */

function get_available_font_sets()
{
    global $post;
    $args   = [
        'post_type'     => 'font',
        'post_parent'   => 0,
        'posts_per_page'=> -1,
        'orderby'       => 'title'

    ];

    $query  = new WP_Query( $args );
    
    $o      = [];
    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
        $o[]    = [
             get_the_title(),
             site_url() . '/fonts?fontFamily=' . $post->post_name
        ];

    endwhile; endif; wp_reset_postdata();

    return $o;
}