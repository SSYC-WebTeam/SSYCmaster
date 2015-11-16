<aside id="front"> 
<!-- #left sidebar -->
        <div class="one-third-left">
                <?php if ( is_active_sidebar( 'left-front' ) ) : ?>
                <?php dynamic_sidebar( 'left-front' ); ?>
                <?php endif; ?>                
        </div> <!-- end .one-third left-->

<!-- #main sidebar -->           
        <div id="main-front">
            <div class="one-third-middle">                
                <?php if ( is_active_sidebar( 'main-front' ) ) : ?>
                <?php dynamic_sidebar( 'main-front' ); ?>
                <?php endif; ?>                       
            </div> <!-- end .one-third middle -->
 
<!-- #right sidebar -->                  
            <div class="one-third-right last">                
                <?php if ( is_active_sidebar( 'right-front' ) ) : ?>
                <?php dynamic_sidebar( 'right-front' ); ?>
                <?php endif; ?>                
            </div> <!-- end .one-third -->                             
         </div> <!-- end #main-front -->  
</aside>