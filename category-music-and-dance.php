<?php get_header(); ?>

<!---TITLE ROW--->
	<?php include('includes/category-title.php'); ?>
	<!---/TITLE ROW--->

	<?php 
		if ( is_active_sidebar( 'musicdance_category_banner' ) ) :
			dynamic_sidebar( 'musicdance_category_banner' );
		endif; 
	?>
	<?php if ( is_active_sidebar( 'musicdance_category_trending' ) || is_active_sidebar( 'musicdance_category_single' ) ) { ?>
	<section class="flex category-section">
		<?php if ( is_active_sidebar( 'musicdance_category_trending' ) ) :?>				
			<div class="col-1">
			<?php dynamic_sidebar( 'musicdance_category_trending' );?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'musicdance_category_single' ) ) :?>				
			<div class="col-1">
			<?php dynamic_sidebar( 'musicdance_category_single' );?>
			</div>
		<?php endif; ?>			
	</section>	
	<?php }?>
	<?php 
		if ( is_active_sidebar( 'musicdance_category_latest' ) ) :
			dynamic_sidebar( 'musicdance_category_latest' );
		endif; 
	?>	
	
	</div> <!-- //wrapper -->
<?php get_footer(); ?> 