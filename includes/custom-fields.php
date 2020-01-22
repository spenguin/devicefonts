<?php

/**
 * https://metabox.io/how-to-create-custom-meta-boxes-custom-fields-in-wordpress/
 */

namespace CustomFields;

\CustomFields\register();


function register()
{
    add_action( 'add_meta_boxes', '\CustomFields\register_meta_boxes' );
    add_action( 'save_post', '\CustomFields\rh_save_meta_box' );
}

function register_meta_boxes()
{
    add_meta_box( 'fontParams', 'Font Set Special Selection', '\CustomFields\special_selection_form', 'font', 'side', 'high' );
}

function special_selection_form( $post )
{
    if( 0 == $post->post_parent )
    {   
        // Get the Custom Field values
        $rh_bestseller  = esc_attr( get_post_meta( get_the_ID(), 'rh_bestseller', TRUE ) );
        if( !$rh_bestseller ) $rh_bestseller    = 0;
        $rh_bestseller_ranking  = esc_attr( get_post_meta( get_the_ID(), 'rh_bestseller_ranking', TRUE ) );
        if( !$rh_bestseller_ranking ) $rh_bestseller_ranking    = 999;
        $rh_newfont  = esc_attr( get_post_meta( get_the_ID(), 'rh_newfont', TRUE ) );
        if( !$rh_newfont ) $rh_newfont    = 0;

        ?>
        <div class="rh_box">
            <style scoped>
                .rh_box{
                    display: grid;
                    grid-template-columns: max-content 1fr;
                    grid-row-gap: 10px;
                    grid-column-gap: 20px;
                }
                .rh_field{
                    display: contents;
                }
            </style>
            <p class="meta-options rh_field">
                <label for="rh_bestseller">Bestseller</label>
                <input id="rh_bestseller" type="checkbox" name="rh_bestseller" value=1 <?php echo ( 1 == $rh_bestseller ) ? 'checked' : ''; ?> >
            </p>
            <p class="meta-options rh_field">
                <label for="rh_bestseller_ranking">Bestseller<br />Ranking</label>
                <input id="rh_bestseller_ranking" type="number" name="rh_bestseller_ranking" value="<?php echo $rh_bestseller_ranking; ?>">
            </p>
            <p class="meta-options rh_field">
                <label for="rh_newfont">Price</label>
                <input id="rh_newfont" type="checkbox" name="rh_newfont" value=1 <?php echo ( 1 == $rh_newfont ) ? 'checked' : ''; ?> >
            </p>
        </div>
        <?php
    }
    else
    {
        echo 'These parameters are set on the collective Font Set post';
    }
}


/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function rh_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'rh_bestseller',
        'rh_bestseller_ranking',
        'rh_newfont',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
