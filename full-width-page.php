<?php
/**
 * Template Name: Full Width
 */
 get_header(); ?>
	<div class="post-page">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="wrapper">
				<div class="orange-bg page">
					<div class="flex thepage">
						<?php wp_reset_query(); ?>
						<div class="full-width-page">
							<div class="right-column-content">								
								<div class="post-img-big">
									<figure><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full-width-single-post');} ?></figure>	
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
					<!--fullwidth_ad-->
					<?php 
						if ( is_active_sidebar( 'fullwidth_ad' ) ) :
							dynamic_sidebar( 'fullwidth_ad' );
						endif; 
					?>
					<!--//fullwidth_ad-->		
					
				</div>	
			</div> <!-- //wrapper -->
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>  