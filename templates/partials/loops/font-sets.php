<?php
/**
 * New Font Sets loop
 */
$fontDir    = FS_UPLOAD . 'recorded/';
?>
    <div class="font-list-new <?php echo $class; ?>">
        
        <?php foreach( $fontSetArray as $fId => $fSet ):
            //$path   = FS_UPLOAD . 'recorded/' . $fSet['repFont']['title'];
            //$size   = $fSet['repFont']['size'];
            //$str    = $fSet['title'] . ' ' . $fSet['repFont']['str'];
            //$adj    = $fSet['repFont']['adj'];            
            ?>
            <a href="/fonts?fontFamily=<?php echo $fSet['slug']; ?>">
                        
                <div class="font-list-entry-new">
                    <div class="font-list-entry-new-desc">
                        <h2><?php echo $fSet['title']; ?></h2>&nbsp;<span><?php echo $fSet['stylecount']; ?> style<?php echo ( 1 == $fSet['stylecount'] ) ? '' : 's'; ?></span>
                    </div>
                    <?php if( file_exists( $fontDir . $fSet['repFont']['title'] ) ): 
                        $args   = [
                            'size'          => 70, //[FIX] overridden for presentation purposes $fSet['repFont']['size'],
                            'wrapLength'    => 250,
                            'transparent'   => TRUE,
                            'padding'       => '2' //$fSet['padding']
                        ];
                        ?>
                        <img src="<?php echo fontToImage( $fontDir . $fSet['repFont']['title'], $fSet['title'] . ' ' . $fSet['repFont']['str'], $args ); ?>" style="height:60px;" />
                    <?php else: ?>
                        <!-- <?php echo $fontDir . $fSet['repFont']['title']; ?> -->
                    <?php endif; ?>
                </div>
            </a>
        <?php endforeach;?>
    </div>
