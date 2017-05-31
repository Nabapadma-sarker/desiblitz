<?php get_header(); ?>
	<div class="post-page">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="wrapper">
				<div class="orange-bg page">				
					<div class="single-Page">
						<div class="left-column">
							<div class="left-column-content">
								<?php 
									if ( is_active_sidebar( 'page_sidebar' ) ) :
										dynamic_sidebar( 'page_sidebar' );
									endif; 
								?>
								<!--<div class="share_article borderbottom-only">
									<div class="content">
										<h2 class="center-title">Share</h2>
										<?php //echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,pinterest,mail" counters=1 counter_pos="right" total_counter_pos="right" style="button"]'); ?> 
									</div>
								</div>-->
								
							</div>
						</div><!-- //left-column -->	
						<?php wp_reset_query(); ?>
						<div class="right-column">
							<div class="right-column-content">								
								<div class="post-img-big">
									<figure><?php if ( has_post_thumbnail() ) {the_post_thumbnail('single-post');} ?></figure>	
								</div>
								<h2 class="post-name"><?php the_title();?></h2>															
								<div class="the-content pagecontent">
								
									<?php $pullquote = get_post_meta( get_the_ID(), 'pullquote', true );?>
									<?php if(!empty($pullquote)){ ?>
										<p class="pullquote"><?php echo $pullquote; ?></p>
									<?php } ?>
									<span class="paragraph">
									<?php the_content();?>
									</span>	
																	
								</div>								
								<div class="section-border"><i></i></div>
							</div>
						</div><!-- //right-column -->						
					</div><!-- //flex -->				
					<?php wp_reset_query(); ?>
					<div class="divider-border"></div>
					<section class="row flex">
						<div class="col-1 orange-bg">	
							<?php 
								if ( is_active_sidebar( 'home_trending_posts' ) ) :
									dynamic_sidebar( 'home_trending_posts' );
								endif; 
							?>
						</div> <!-- //col-1 -->
						<div class="col-1">
							<div class="section-border"><i></i></div>
							
							<?php 
								$args = array(
									'post_type' => 'post',
									'orderby' => 'rand',
									'posts_per_page' => 1,											
								);
								$randomPost = new WP_Query( $args );
							?>
							<?php if ( $randomPost->have_posts() ) while ( $randomPost->have_posts() ) : $randomPost->the_post();	?>
								<div class="single-article">
									<article class="featured-post">
										<div class="content">
											<figure class="quick-read full-width">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail('section-large-thumb'); ?>
												</a>
												<!--<span></span>-->
											</figure>
											<h2 class="post-title">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_title(); ?>
												</a>
											</h2>
											<?php the_excerpt(); ?>
											<div class="go-to-share">
												<ul>
					    							<?php if(has_shortcode($content, 'jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#watch-video" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(has_shortcode($content, 'nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#view-gallery" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if(has_shortcode($content, 'audio')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#hear-audio" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
											</div>
										</div>
									</article>
								</div>	
							<?php endwhile; ?>				
							
							<div class="divider-border"></div>
							
							<h2 class="section-title orange-bg">
								<span>LATEST VIDEOS</span><i></i>
							</h2>
							<section class="flex latest-video">
								<div class="col-3 more-link-container orange"><a class="more-badge" href="" title="Read More">more videos</a></div>
								<!--Code for this block is in site.js  file-->
							</section> <!-- //latest-video -->
						</div>
					</section>
					
					<!--fullwidth_ad-->
					<?php 
						if ( is_active_sidebar( 'fullwidth_ad' ) ) :
							dynamic_sidebar( 'fullwidth_ad' );
						endif; 
					?>
					<!--//fullwidth_ad-->
					
					<!-- multy-col-widgets -->
					<?php include('includes/multy-col-widgets.php'); ?>
					<!-- //multy-col-widgets -->
				</div>	
			</div> <!-- //wrapper -->
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>  