<?php
/**
* Template Name: Work Page
*
* @package WordPress
* @subpackage Rian_Hughes
* @since Rian Hughes 1.0
*/

get_header(); 

$title  = str_ireplace( '/', '', $_SERVER['REQUEST_URI'] );

$args   = [
    'post_type'         => 'work',
    'posts_per_page'    => -1,
    'tax_query' => array(
		array(
			'taxonomy' => 'work_type',
			'field'    => 'slug',
			'terms'    => $title,
		),
	),
];

$query  = new WP_Query( $args );

if( $query->have_posts() ): 
?>

    <div class="container">
    <!--    <div class="row">-->
            <div class="work_type-list" id="work_type-list">
                <?php while( $query->have_posts() ): $query->the_post(); ?>
					<a href="#modal<?php echo the_ID(); ?>" class="work_type-list-entry">
						<?php the_post_thumbnail( 'thumb-229x' ); ?>
					</a>
                <?php endwhile; ?>
            </div>
        <!-- </div>-->
    </div>
	<?php while( $query->have_posts() ): $query->the_post(); ?>
		<div id="modal<?php echo $id = the_ID(); ?>" class="modal-popup work-popup">
			<div class="modal-content">
				<div class="header">
					<h2><?php echo \Modal\renderTheTitle( $id ); ?></h2>
				</div>
				<div class="copy">
					<?php the_post_thumbnail( 'thumb-550x' ); ?>				
				</div>
				<div class="cf footer">
					<a href="" class="btn">Close</a>
				</div>
			</div>
			<div class="overlay"></div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
	
<?php get_footer(); ?>