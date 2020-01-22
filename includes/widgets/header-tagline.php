<?php
/**
 * Plugin Name:   Header Tagline Widget
 * Plugin URI:    https://soaringpenguin.com
 * Description:   Add one or more taglines to the site; designed for multiple lines
 * Version:       1.0
 * Author:        John Anderson
 * Author URI:    https://soaringpenguin.com
 */

class header_Tagline_Widget extends WP_Widget {


    // Set up the widget name and description.
    public function __construct() 
    {
        $widget_options = array( 'classname' => 'header-tagline', 'description' => 'This widget allows multiple taglines to be added to a site' );
        parent::__construct( 'header-tagline', 'Header Tagline Widget', $widget_options );
    }

    // Create the widget output.
    public function widget( $args, $instance ) 
    {
        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];
        $taglines   = json_decode( $instance['taglines'] );
        foreach( $taglines as $t ):
            $t  = explode( '|', $t );
            ?>
            <div class="tagline"><span><?php echo $t[0]; ?></span><?php echo $t[1]; ?></div>
        <?php endforeach; ?>
        <?php echo $args['after_widget'];  
    } 
    
    // Create the admin area widget settings form.
    public function form( $instance ) 
    {   
        $taglines   = ( "null" ==  $instance['taglines'] ) ? [] : json_decode( $instance['taglines'] );
        foreach( $taglines as $k => $t ): ?>
            <p>
                <label>Tagline <?php echo $k+1; ?>:</label>
                <input type="text" name="tagline[]" value="<?php echo $t; ?>">
            </p>
        <?php endforeach; ?>
        <p>
            <label>new Tagline:</label>
            <input type="text" name="tagline[]" value="">
        </p>
        <?php
    }  
    
    // Apply settings to the widget instance.
    public function update( $new_instance, $old_instance ) 
    {
        $instance = $old_instance;
        $instance['taglines']   = json_encode( $new_instance['taglines'] );
        //$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        return $instance;
    }    
  
}