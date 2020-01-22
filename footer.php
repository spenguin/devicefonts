<?php
/**
 * @package WordPress
 * @subpackage Rian Hughes
 * @since Rian Hughes 1.0
 */
?>
        </main>
    </div><!-- end .wrapper -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4>Contact</h4>
                    <?php
                        $address    = get_page_by_title( 'address', OBJECT, 'post' );
                        echo $address->post_content; 
                    ?>
                </div>
                <div class="col-4">
                    <h4>Departments</h4>
                    <?php echo wp_nav_menu( ['menu' => 'Departments'] ); ?>
                </div>
                <div class="col-4">
                    <h4>Work</h4>
                    <?php echo wp_nav_menu( ['menu' => 'Work'] ); ?>
                </div>
                <div class="col-4">
                    <h4>Connect</h4>
                    
                </div>
            </div>
            <div class="row">
                <p class="copyright">&copy; Device/Rian Hughes 2006 - <?php echo date( 'Y' ); ?></p>
            </div>
        </div>  
        <?php wp_footer(); ?>
    </footer>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    <script src="<?php echo site_url(); ?>/wp-content/themes/rianhughes/js/bootstrap.min.js"></script>
</body>
</html>

