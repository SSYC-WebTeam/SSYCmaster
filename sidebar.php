<aside id="primary">
<!-- #top sidebar -->
    <div class="top sidebar">
        <?php if ( is_active_sidebar( 'widget-top' ) ) : ?>        
        <?php dynamic_sidebar( 'widget-top' ); ?>
        <?php endif; ?>
    </div><!-- end .top sidebar-->

<!-- #middle sidebar -->
    <div class="middle sidebar">
        <?php if ( is_active_sidebar( 'widget-middle' ) ) : ?>        
        <?php dynamic_sidebar( 'widget-middle' ); ?>
        <?php endif; ?>
    </div><!-- end .middle sidebar--> 

<!-- #bottom sidebar -->
    <div class="bottom sidebar">
        <?php if ( is_active_sidebar( 'widget-bottom' ) ) : ?>        
        <?php dynamic_sidebar( 'widget-bottom' ); ?>
        <?php endif; ?>
    </div><!-- end .bottom sidebar-->   
</aside>

