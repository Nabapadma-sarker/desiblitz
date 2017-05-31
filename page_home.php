<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>
<style>
#home-banner h2.orange{
	display:none;
}
</style>
<div id="wrapper">
	<h2 class="center-title orange">
        <span>WHAT'S NEW</span>
        <i></i>
    </h2>
    <div class="home-whats-new row">
              <div class="whats_new_half">
                      <?php 
					if ( is_active_sidebar( 'home-banner-slider-left' ) ) :
						dynamic_sidebar( 'home-banner-slider-left' );
					endif; ?>
                </div>
               <div class="whats_new_half">
				<?php	if ( is_active_sidebar( 'home-banner-slider-right' ) ) :
						dynamic_sidebar( 'home-banner-slider-right' );
					endif;
                       // if ( is_active_sidebar( 'banner-lefttop-latest' ) ) :
                         //   dynamic_sidebar( 'banner-lefttop-latest' );
                        //endif; 
                    ?> 
                </div>
     </div>
    
    <?php 
	
    		/*
				Widget, CSS, JS and HTML will be removed completely related to following.
			if ( is_active_sidebar( 'home-banner-slider' ) ) :
				dynamic_sidebar( 'home-banner-slider' );
			endif; */
		?>
<div style="clear:both;"></div>
        <div class="full-width-home trending-sidebar">
            <?php 
		    		if ( is_active_sidebar( 'home_trending_posts' ) ) :
						dynamic_sidebar( 'home_trending_posts' );
					endif; 
				?>
        </div>
        <!-- //col-1 -->
        <div class="full-width-home trending-sidebar nomargin">
		  <div class="two-post-section">
            <?php 
				if ( is_active_sidebar( 'home_two_posts_left' ) ) :
					dynamic_sidebar( 'home_two_posts_left' );
				endif; 
			?>
		  </div>
		  <div class="two-post-section">
		    <?php 
				if ( is_active_sidebar( 'home_two_posts_right' ) ) :
					dynamic_sidebar( 'home_two_posts_right' );
				endif; 
			?>
		  </div>
        </div>
        <div style="clear:both;"></div>

    <?php 
    		if ( is_active_sidebar( 'home_latest_posts' ) ) :
				dynamic_sidebar( 'home_latest_posts' );
			endif; 
		?>
</div>
<!-- //wrapper -->
<?php get_footer(); ?>
