<?php
	// Our include
	define('WP_USE_THEMES', false);
	require_once('../../../../wp-load.php'); 
	
	$gridNum = (isset($_GET['gridNum'])) ? $_GET['gridNum'] : 0;
	$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
	$catSlug = (isset($_GET['catSlug'])) ? $_GET['catSlug'] : 0;
	$parentSlug = (isset($_GET['parentSlug'])) ? $_GET['parentSlug'] : 0;
	
		/**************************
			POSTS TO DISPLAY
		**************************/
		if(($gridNum == 4) ){
			$numPosts = 7;
		} else {
			$numPosts = 7;
		}		
		$post_category = $parentSlug;
	
	
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $numPosts,
	    'paged'          => $page,
		'tax_query' => array(
			array(
				'taxonomy' => POST_CATEGORY,
				'field'    => 'slug',
				'terms'    => $catSlug,
			),
		),
	);
	//$ajax_query = new WP_Query( $args );
	$ajax_query = new WP_Query( $args );
?>
    
<?php if ( $ajax_query->have_posts() ) { ?>

	<section class="row <?php //esc_html_e( $post_category ); ?>-section">
						
	<?php 
		/******************************
			IF GRID = 'grid_one'
		******************************/
		if( $gridNum == 1 ){
	?>	
	
			<?php $artculture_count = 1; ?>
			<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>
			
			
			<?php if($artculture_count == 1){ ?>
	    		<section id="latest-<?php esc_html_e( $post_category ); ?>" class="gridContainer flex total-container <?php echo esc_html_e( $post_category ); ?>-bg <?php echo $catslug; ?>-bg">
					<!-- 1st ARTICLE -->
					<div class="featured-post">
						<div class="content">
							<figure class="quick-read">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('section-large-thumb'); ?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
								</a>
								<!--<span></span>-->
							</figure>	
							
							<div class="share-row">
								<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
								
								<?php 
									$content = get_the_content();
									if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('[audio')) ) {
								?>
									<div class="go-to-share">
										<ul>
											<?php if(check_shortcode('jwplayer')) { ?>
												<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
											<?php } ?>
											<?php if(check_shortcode('nggallery')) { ?>
												<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
											<?php } ?>
											<?php if(check_shortcode('[audio')) { ?>
												<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
											<?php } ?>
										</ul>
									</div>											
								<?php } ?>	
							</div>
							<h2 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							<?php the_excerpt(); ?>
							
																
						</div>
						<?php } //COUNT = 1 ?>									
						<?php if($artculture_count == 2){ ?>									
						<div class="extra-post">
							<div class="content-div background-color">
								<div class="column-1">
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
										echo display_Grid_subCategory(get_the_ID());
									}?>
								</div>										
								<div class="column-2">
									<h4 class="post-title">											
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>										
									<div class="share-row">	
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>		
								</div>
							</div>
						</div>
						<?php } //COUNT = 2 ?>
						<?php if($artculture_count == 3){ ?>
					</div>
				<div class="mid-series">
						<!-- 2nd ARTICLE -->
						<article>
							<figure>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('trending-thumb'); ?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
								</a>
							</figure>
							<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
							<h4 class="post-title bg">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>
							<?php 
								$content = get_the_content();
								if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
							?>
								<div class="go-to-share white">
									<ul>
										<?php if(check_shortcode('jwplayer')) { ?>
											<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('nggallery')) { ?>
											<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('audio')) { ?>
											<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							<?php } ?>										
						</article>
			<?php } //COUNT = 2?>
					
			<?php if($artculture_count == 4){ ?>
					<figure>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('trending-thumb'); ?>
							<?php $word_count = bavotasan_word_count();?>
							<?php if($word_count < 350){?>
								<span class="quick-read-icon"></span>
							<?php } ?>
						</a>
					</figure>
					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
					<!-- 4rd ARTICLE -->
					<h4 class="post-title bg">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h4>
					<?php 
						$content = get_the_content();
						if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
					?>
						<div class="go-to-share white">
							<ul>
								<?php if(check_shortcode('jwplayer')) { ?>
									<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
								<?php } ?>
								<?php if(check_shortcode('nggallery')) { ?>
									<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
								<?php } ?>
								<?php if(check_shortcode('audio')) { ?>
									<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</div>
			<?php } //COUNT = 4 ?>
			
			<?php if($artculture_count == 5){ ?>
				<div class="more-posts">
					<div class="content flex">
						<!-- 5th ARTICLE -->
						<div class="sec-1">
							<figure class="quick-read">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('trending-thumb'); ?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
								</a>
								<!--<span></span>-->
							</figure>
							<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
							<h3 class="post-title pt-sans-narrow">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
								</a>
							</h3>										
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h4>
							<?php 
								$content = get_the_content();
								if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
							?>
								<div class="go-to-share less-spacing">
									<ul>
										<?php if(check_shortcode('jwplayer')) { ?>
											<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('nggallery')) { ?>
											<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('audio')) { ?>
											<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							<?php } ?>
							
						</div>
			<?php }//COUNT = 5 ?>
						
			<?php if($artculture_count == 6){ ?>
						<!-- 6th ARTICLE -->
						<div class="sec-1">
							<figure class="quick-read">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('trending-thumb'); ?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
								</a>
								<!--<span></span>-->
							</figure>
							<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
							<h3 class="post-title pt-sans-narrow">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
								</a>
							</h3>										
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h4>										
						</div>
					</div> <!-- //content -->
			<?php } //COUNT = 6 ?>
			<?php if($artculture_count == 7){ ?>
				<div class="food_count_bottom-container">
					<div class="content bottom-content flex">
						<!-- 7th ARTICLE -->
						<div class="boxed-content">
							<div class="flex">
								<div class="post-fig">
									<figure>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
									</figure>
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
										echo display_Grid_subCategory(get_the_ID());
									}?>
									<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
									?>
										<div class="go-to-share less-spacing">
											<ul>
												<?php if(check_shortcode('jwplayer')) { ?>
													<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('nggallery')) { ?>
													<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('audio')) { ?>
													<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
												<?php } ?>
											</ul>
										</div>
									<?php } ?>
									
								</div>
								<div class="post-content">
									
									<h4 class="post-title bg">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>	
									</h4>
								</div>
							</div>
						</div>
						
					</div>
					</div>
				</div> <!-- //more-posts --> 
			</section>
    		<?php } //COUNT = 7 ?>
    		
    		<?php $artculture_count++; ?>
    		<?php endwhile; ?>
    		<?php wp_reset_query(); ?>
    		
    	</section> 
	
	<?php 
		/******************************
			IF GRID = 'grid_two'
		******************************/
		} elseif( $gridNum == 2 ){ 
	?>
		
			
				<?php $britasian_count = 1; ?>
				<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>
		
				<?php if($britasian_count == 1) { ?>
					<div class="gridContainer latest-post-one flex <?php echo esc_html_e( $post_category ); ?>-bg <?php echo $catslug; ?>-bg">
						<div class="coloured-box grid-two-section-coloured">
							<article>
								<figure class="full-width">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('trending-thumb'); ?>
										<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
									</a>
								</figure>
								<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
								<h4 class="post-title bg">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
								
								<?php 
									$content = get_the_content();
									if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
								?>
									<div class="go-to-share white">
										<ul>
											<?php if(check_shortcode('jwplayer')) { ?>
												<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
											<?php } ?>
											<?php if(check_shortcode('nggallery')) { ?>
												<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
											<?php } ?>
											<?php if(check_shortcode('audio')) { ?>
												<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
											<?php } ?>
										</ul>
									</div>
								<?php } ?>
								
							</article>
							<?php } //END COUNT = 1 ?>
							
							<?php if($britasian_count == 2) { ?>
							<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
							<h4 class="post-title bg">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>
							
							<?php 
								$content = get_the_content();
								if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
							?>
								<div class="go-to-share white">
									<ul>
										<?php if(check_shortcode('jwplayer')) { ?>
											<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('nggallery')) { ?>
											<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
										<?php } ?>
										<?php if(check_shortcode('audio')) { ?>
											<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							<?php } ?>
							
						</div> <!-- //coloured-box -->
						<?php } //COUNT = 2 ?>
						
						<?php if($britasian_count == 3) { ?>
						<div class="thumb-post grid-two-section-thumb">
							<div class="content">
								<div>
									<div class="post-content">
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
										<h4 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h4>
									</div>
									<div class="post-fig"></div>
								</div> <!-- //flex -->
								<?php } //COUNT = 3 ?>
								
								<?php if($britasian_count == 4) { ?>
								<div class="flex">
									<div class="post-fig">
										<figure class="full-width">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
										</figure>
										
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share less-spacing">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>
										<?php } ?>
										
									</div>
									<div class="post-content">
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
										<h4 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h4>
									</div>
								</div> <!-- //flex -->
								<?php } //COUNT = 4 ?>
								
								<?php if($britasian_count == 5) { ?>
								<div class="flex">
									<div class="post-fig">
										<figure class="full-width">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
										</figure>
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share less-spacing">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>
										<?php } ?>
										
									</div>
									<div class="post-content">
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
										<h4 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h4>
									</div>
								</div> <!-- //flex -->
							</div>
						</div> <!-- //thumb-post -->
						<?php } //COUNT = 5 ?>
						
						<?php if($britasian_count == 6) { ?>
						<div class="wide-post">
							<article class="flex">
								<div class="post-fig">
									<figure class="full-width">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-medium-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
									</figure>
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
									<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
									?>
										<div class="go-to-share less-spacing">
											<ul>
												<?php if(check_shortcode('jwplayer')) { ?>
													<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('nggallery')) { ?>
													<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('audio')) { ?>
													<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
												<?php } ?>
											</ul>
										</div>
									<?php } ?>
									
								</div>
								<div class="post-content">
									<h4 class="post-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<?php the_excerpt(); ?>
								</div>
							</article>
							<?php } //COUNT = 6 ?>
							
							<?php if($britasian_count == 7) { ?>
							<div class="flex second-article">
								<figure class="full-width">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('trending-thumb'); ?>
										<?php $word_count = bavotasan_word_count();?>
										<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
										<?php } ?>
									</a>
									<h4 class="post-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h4>
								</figure>
								<div class="content">
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
								echo display_Grid_subCategory(get_the_ID());
							}?>
									<h3 class="post-title pt-sans-narrow">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
										</a>
									</h3>						    					
								</div>
								
							</div>
							
						</div> <!-- //wide-post -->
					</div>
				<?php } //COUNT = 7 ?>
				
			<?php $britasian_count++; ?>
			<?php endwhile; ?>
			
		</section> <!-- // #brit-asian-section -->
		
		<?php 
			/******************************
				IF GRID = 'grid_three'
			******************************/
			} elseif( $gridNum == 3 ){ 
		?>
		
			<?php $cinema_count = 1; ?>
			<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>				
				<?php if($cinema_count == 1) { ?>
					<div class="gridContainer grid_three_container flex latest-post-two <?php echo esc_html_e( $post_category ); ?>-bg <?php echo $catslug; ?>-bg">
						<div class="one-half grid_three_col">
							<div class="wrap">
								<div class="flex">
									<article>
										<figure class="full-width">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
										</figure>
										<div class="share-row">
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
											
											<?php 
												$content = get_the_content();
												if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
											?>
												<div class="go-to-share">
													<ul>
														<?php if(check_shortcode('jwplayer')) { ?>
															<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
														<?php } ?>
														<?php if(check_shortcode('nggallery')) { ?>
															<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
														<?php } ?>
														<?php if(check_shortcode('audio')) { ?>
															<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
														<?php } ?>
													</ul>
												</div>											
											<?php } ?>	
										</div>
										<h2 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
										<?php the_excerpt(); ?>					    					
									</article>
									<?php }//COUNT = 1 ?>
									
									<?php if($cinema_count == 2) { ?>
									<article>
										<figure class="full-width">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
										</figure>
										<div class="share-row">
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
											
											<?php 
												$content = get_the_content();
												if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
											?>
												<div class="go-to-share">
													<ul>
														<?php if(check_shortcode('jwplayer')) { ?>
															<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
														<?php } ?>
														<?php if(check_shortcode('nggallery')) { ?>
															<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
														<?php } ?>
														<?php if(check_shortcode('audio')) { ?>
															<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
														<?php } ?>
													</ul>
												</div>											
											<?php } ?>	
										</div>
										<h2 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
										<?php the_excerpt(); ?>					
									</article>
								</div>
								<?php } //COUNT = 2 ?>										
								<?php if($cinema_count == 3) { ?>
								
								<section class="flex">
									<article>
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
										<h2 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
									</article>
									
									<?php }//END COUNT = 3 ?>
									
									<?php if($cinema_count == 4) { ?>
									<article>
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
										<h2 class="post-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
									</article>
								</section>
							</div> <!-- //wrap -->
						</div>
						<?php }//END COUNT = 4 ?>
						
						<?php if($cinema_count == 5) { ?>
						<div class="one-half grid_three_last_col">
						
							<div class="flex box-bg">
								<figure class="full-width">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('trending-thumb'); ?>
										<?php $word_count = bavotasan_word_count();?>
										<?php if($word_count < 350){?>
											<span class="quick-read-icon"></span>
										<?php } ?>
									</a>
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
								</figure>
								<h2 class="post-title pt-sans-narrow bg">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
									</a>
								</h2>
								<span>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</span>
							</div> <!-- //box-bg -->
							<?php } //END COUNT = 5 ?>									
							<?php if($cinema_count == 6) { ?>
							<div class="bottom-articles flex">
								<article>
									<figure class="full-width">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
									</figure>
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
									<h4 class="post-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share less-spacing">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>
										<?php } ?>
								</article>
								<?php } //COUNT = 6 ?>
								
								<?php if($cinema_count == 7) { ?>
								<article>
									<figure class="full-width">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
									</figure>
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
									echo display_Grid_subCategory(get_the_ID());
								}?>
									<h4 class="post-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
									?>
										<div class="go-to-share less-spacing">
											<ul>
												<?php if(check_shortcode('jwplayer')) { ?>
													<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('nggallery')) { ?>
													<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
												<?php } ?>
												<?php if(check_shortcode('audio')) { ?>
													<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
												<?php } ?>
											</ul>
										</div>
									<?php } ?>
								</article>
								
								
								
							</div> <!-- //flex -->
							
						</div>
					</div>
					<?php } //COUNT = 7 ?>
				<?php $cinema_count++; ?>
				<?php endwhile; ?>
				
			</section> <!-- //latest-cinema -->
		
	<?php 
		/******************************
			IF GRID = 'grid_four'
		******************************/
		} elseif( $gridNum == 4 ){ 
	?>		    	
		<?php $fashion_count = 1; ?>
		<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>					
			<?php if($fashion_count == 1){ ?>
				<div class="gridContainer flex latest-post-three <?php echo esc_html_e( $post_category ); ?>-bg <?php echo $catslug; ?>-bg">
							<div class="first-post">
								<div class="box-bg">
									<article>
										<h5 class="post-title bg">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
										</h5>
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
									</article>
									<article>
										<h4 class="post-title bg pt-sans-narrow">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
					    					</a>
										</h4>
										
									</article>
								</div>
								<?php } //COUNT = 1 ?>
								
								<?php if($fashion_count == 2){ ?>
								<article>
									<figure class="full-width quick-read">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-medium-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>
			    					<div class="share-row">		
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>	
			    					<h4 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					
								</article>
							</div>
							<?php } //COUNT = 2 ?>
							
							<?php if($fashion_count == 3){ ?>
							<article class="featured-post">
			    				<div class="content">
			    					<figure class="quick-read full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-large-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>									
			    					<div class="share-row">	
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>	
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>	
			    					<h2 class="post-title bg">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h2>
			    					<?php the_excerpt(); ?>			    					
			    				</div>
							</article>
							<?php } //COUNT = 3 ?>
							
							<?php if($fashion_count == 4){ ?>
							<div class="third-post">
								<div class="box-bg">
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
			    					<h4 class="post-title bg">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
									?>
				    					<div class="go-to-share white">
				    						<ul>
				    							<?php if(check_shortcode('jwplayer')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('nggallery')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('audio')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
					    						<?php } ?>
				    						</ul>
				    					</div>
			    					<?php } ?>
								</div> <!-- //box-bg -->
								<?php } //END COUNT = 4 ?>
								
								<?php if($fashion_count == 5){ ?>
								<article class="only_title">
									<figure class="full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
			    					</figure>
			    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
			    					<h4 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
									?>
				    					<div class="go-to-share less-spacing">
				    						<ul>
				    							<?php if(check_shortcode('jwplayer')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('nggallery')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('audio')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
					    						<?php } ?>
				    						</ul>
				    					</div>
			    					<?php } ?>
								</article>
							</div>
							<?php } //COUNT = 5 ?>
							
							<?php if($fashion_count == 6){ ?>
							<div class="more-posts">
									<article>
										<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</h4>
				    					<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
					    					<div class="go-to-share less-spacing">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('audio')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
									</article>
							</div>
						</div> <!-- //.latest-post-three -->
				<?php } //COUNT = 6 ?>
			<?php $fashion_count++; ?>
			<?php endwhile; ?>
		
		</section> <!-- //#latest-fashion -->
	
	<?php 
		/******************************
			IF GRID = 'grid_five'
		******************************/
		} elseif( $gridNum == 5 ){ 
	?>
		<?php $food_count = 1; ?>
		<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>
		
			<?php if( $food_count == 1) { ?>
				<div class="gridContainer latest-post-four flex <?php echo esc_html_e( $post_category ); ?>-bg <?php echo $catslug; ?>-bg">
							<article class="featured-post">
			    				<div class="content">
			    					<figure class="quick-read full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-large-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>
			    					<div class="share-row">
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('audio')) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>
			    					<h2 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h2>
			    					<?php the_excerpt(); ?>			    					
			    				</div>
								<?php } //COUNT = 1 ?>
								<?php if($food_count == 2){ ?>
								<div class="extra-post">
									<div class="content-div">
										<div class="column-1">
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
										</div>										
										<div class="column-2">
											<h4 class="post-title">											
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_title(); ?>
												</a>
											</h4>	
											<div class="share-row">												
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
												?>
													<div class="go-to-share">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('audio')) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>											
												<?php } ?>	
											</div>
										</div>
									</div>
								</div>
							<?php } //COUNT = 2 ?>
							<?php if($food_count == 3){ ?>
							</article> <!-- // .featured-post -->							
							<div class="other-content">								
								<div class="top-row">
									<div class="content">
										<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    						
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</h4>
				    					<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
										?>
					    					<div class="go-to-share less-spacing">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('audio')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
				    				</div> <!-- //content -->
				    				<?php } //COUNT = 3 ?>
				    				
				    				<?php if( $food_count == 4) { ?>
				    				<div class="flex second-article">
				    					<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
											<h4 class="post-title">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h4>
				    					</figure>
				    					<div class="content">
					    					<h3 class="post-title pt-sans-narrow">
						    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
						    					</a>
					    					</h3>					    					
				    					</div>										
				    				</div>
								</div> <!-- //.top-row -->								
								<?php } //COUNT = 4 ?>								
								<?php if( $food_count == 5) { ?>
								<div class="food_count_bottom-container">
									<div class="bottom-row flex">									
										<div class="articles flex">
											<article>
												<figure class="full-width">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
												</figure>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
												<h4 class="post-title bg">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h4>
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
												?>
													<div class="go-to-share less-spacing white">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('audio')) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
											</article>
											<?php } //COUNT = 5 ?>
											
											<?php if( $food_count == 6) { ?>
											<article>
												<figure class="full-width">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
												</figure>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
												<h4 class="post-title bg">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h4>
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('audio')) ) {
												?>
													<div class="go-to-share less-spacing white">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('audio')) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
											</article>
										</div>
										
									</div>
								</div>
							</div>							
						</div> <!-- //latest-post-four -->
				<?php } //COUNT = 6 ?>
			<?php $food_count++; ?>
			<?php endwhile; ?>		
	</section> <!-- //#latest-food -->		
	<?php } //END GRID_SIE ?>

<?php }//END IF HAVE POSTS ?>

<?php 
	$args = array(
		'post_type' => 'advertise',
		'meta_key'		=> 'advert_type',
		'meta_value'	=> 'CS',
		'posts_per_page' => -1,
	);
	$advertLogo_query = new WP_Query( $args );
	
?>

<?php 
	$logoAdvertUrl = '';
	if ( $advertLogo_query->have_posts() ) {
		$adCounter = 1;
		while ( $advertLogo_query->have_posts() ) : $advertLogo_query->the_post();
			$advertLogoImg = get_field('advert_image_upload');
			
			if(!empty($advertLogoImg)){ //CHECK IF THEY HAVE ADVERT LOGO
				
				$fromTime = strtotime(get_field('from_date_and_time'));
				$toTime = strtotime(get_field('to_date_and_time'));
				$todayDate = time();
				if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
					$advertTerm = get_field('advertise_category');
					
					if($parentSlug == $advertTerm->slug){ //CHECK IF THEY MATCH SELECTED CATEGORY
						//echo '<span>Grid: '.the_title().'</span>';
						if($adCounter == $gridNum){
							$advertLogoImgArr = wp_get_attachment_image_src( $advertLogoImg, 'advert-logo' );
							
							$logoAdvertUrl = $advertLogoImgArr[0];
							$logoAdvertLink = get_field('advert_link');
						} //COMPARE ADCOUNTER WITH PAGE AND DISPLAY
						$adCounter++;
					}
					
				}
				
			}
			
		endwhile;
		wp_reset_query();
	}
?>

<?php if( !empty($logoAdvertUrl)){ ?>
	<section class="row advert-area">
		<a href="<?php echo $logoAdvertLink; ?>" target="_blank" title="Sponsored by">
			<img src="<?php echo $logoAdvertUrl; ?>" />
		</a>
	</section>
<?php } ?>