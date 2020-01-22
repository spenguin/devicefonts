<?php
/**
 *
 * @package WordPress
 * @subpackage Rian Hughes
 * @since Rian Hughes 1.0
 */

get_header(); ?>
<div class="container">
    <?php echo do_shortcode('[metaslider id="844"]'); ?>
</div>


<div class="container home-nav">
    <div class="row">
        <div class="col-4">
            <h3>Fonts</h3>
            <a href="<?php echo site_url(); ?>/fonts"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/recent1.jpg" alt="<?php echo $m[2]; ?>"/></a>
        </div>
        <div class="col-4">
            <h3>Illustration</h3>
            <a href="<?php echo site_url(); ?>/illustration"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/recent2.jpg" alt="<?php echo $m[2]; ?>"/></a>
        </div>
        <div class="col-4">
            <h3>Design</h3>
            <a href="<?php echo site_url(); ?>/design"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/recent3.jpg" alt="<?php echo $m[2]; ?>"/></a>
        </div>
        <div class="col-4">
            <h3>Logos</h3>
            <a href="<?php echo site_url(); ?>/logos"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/recent4.jpg" alt="<?php echo $m[2]; ?>"/></a>
        </div>                      
    </div>
</div>
<?php  get_footer(); ?>