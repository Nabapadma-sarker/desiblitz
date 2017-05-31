<?php get_header(); ?>

<!---TITLE ROW--->
	<?php include('includes/category-title.php'); ?>
	<!---/TITLE ROW--->

	<h2 class="current-title">Current</h2>
	<section id="<?php echo strtolower($catslug);?>" class="row <?php echo strtolower($catslug);?>-section">
		<div class="flex <?php echo strtolower($catslug);?>">
			<div class="new-post-list">
				<ul>
					<?php if ( have_posts() ) {
						 while ( have_posts() ) : the_post(); ?>
						<?php 
							$fromTime = strtotime(get_field('from_date_and_time'));
							$toTime = strtotime(get_field('to_date_and_time'));
							$todayDate = time();
							if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
						?>
							<li>
								<figure class="full-width">
									<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('post-thumbnails');} ?></a>
								</figure>															
								<h4 class="post-title">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h4>
							</li>
						<?php }//END CHECK IF CURRENT ?>
					<?php 
						endwhile; 
						} else {
							echo "<p>No Competitions are currently running.</p>";
						}
					?>
					
				</ul>
			</div>		
		</div>
	</section>	
	
	<div class="single-page-widgets">					
		<?php 
			if ( is_active_sidebar( 'single-post-page' ) ) :
				dynamic_sidebar( 'single-post-page' );
			endif; 
		?>
		
	</div><!--/single-page-widgets-->
			
	</div> <!-- //wrapper -->
<?php get_footer(); ?> 