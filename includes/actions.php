<?php

/**
 * Hook actions from the Fontseller plugin
 */


remove_action( 'fontseller_display_fontsets', 'fontseller_display_before_fontsets' );

add_action( 'fontseller_display_fontsets', 'fontlist_search', 10 );

remove_action( 'display_fontsets', 'display_fontlist' );
remove_action( 'fontseller_display_fontsets', 'fontseller_display_fontsets', 20 );
add_action( 'fontseller_display_fontsets', 'rh_display_fontsets', 20 );



function fontlist_search()
{   ?>
    <div class="search-widget">
        <label for="tags">Search Fontsets:</label>
        <input id="fontsets">
    </div>
    <?php    
}

function rh_display_fontsets()
{
    $perPage    = get_option( 'showFontSets', 20 );
    if( empty( $perPage ) ) $perPage    = 20;
    $pageNo = ( isset( $_GET['pageNo'] ) ) ? $_GET['pageNo'] : 1;
    
    $args = [
        'post_type'         => 'font',
        'post_parent'       => 0, //$parentId,
        'posts_per_page'    => $perPage, // [FIX]
        'offset'            => $perPage * ($pageNo - 1 ),
        'orderby'           => 'title',
        'order'             => 'ASC'
    ]; 
    
    $fontSetArray   = get_font_display_array( $args );
    //var_dump( $fontSetArray );

    // Count children
    foreach( $fontSetArray as $fId => $v )
    {
        $args   = [
            'post_type'     => 'font',
            'post_parent'   => $fId,
            'posts_per_page'=> -1
        ];

        $query  = new WP_Query( $args );
        $fontSetArray[$fId]['stylecount']   = $query->post_count;
    }

    include_once( CORE_TEMPLATES . 'partials/loops/font-sets.php' );
}