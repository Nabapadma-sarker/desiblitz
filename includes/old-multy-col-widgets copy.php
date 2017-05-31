<?php 
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 11,											
	);
	$pagePost = new WP_Query( $args );
?>
<?php $pagePostCount = 1; ?>
<?php if ( $pagePost->have_posts() ) while ( $pagePost->have_posts() ) : $pagePost->the_post();	?>

<?php if($pagePostCount == 1){ ?>
<div class="single-page-widgets">	
	<section class="multy-col-widgets">						
		<div class="multy-col-1">
			<div class="col-inner-row">
				<div class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg col-inner-col">
					<h4 class="post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
					</h4>
				</div>
				<div class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg col-inner-col">
					<h5 class="post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?></a> 
					</h5>
				</div>
			</div>
			<?php } elseif($pagePostCount == 2){ ?>
			<div class="col-inner-row">
				<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
					<div class="content">
						<figure class="quick-read full-width">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('trending-thumb'); ?>
							</a>
							<!--<span></span>-->
						</figure>
						<div class="padding-box">
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>									
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
					</div>
				</article>
			</div>
		</div><!--/multy-col-1-->							
		<?php } elseif($pagePostCount == 3){ ?>
		<div class="multy-col-2">	
			<div class="single-article">
				<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
					<div class="content">
						<figure class="quick-read full-width">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('section-large-thumb'); ?>
							</a>
							<!--<span></span>-->
						</figure>
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
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
		</div><!--/multy-col-2-->
		<?php } elseif($pagePostCount == 4){ ?>
		<div class="multy-col-1">
			<div class="col-inner-row">
				<div class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg figure-box-flex">
					<figure class="figure-box">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('trending-thumb'); ?>
						</a>
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
					</figure>
					<div class="post-title-box">
						<h4 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
						</h4>
					</div>
				</div>									
			</div>
			<?php } elseif($pagePostCount == 5){ ?>
			<div class="col-inner-row">								
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">
							<figure class="quick-read full-width">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('section-large-thumb'); ?>
								</a>
							</figure>
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>											
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
				<?php } elseif($pagePostCount == 6){ ?>
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">											
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>												
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
			</div>
		</div><!--/multy-col-1-->							
	</section><!--/multy-col-widgets-->
	<?php } elseif($pagePostCount == 7){ ?>
	<section class="multy-col-widgets two-col-widg">						
		<div class="multy-col-2">	
			<div class="single-article">
				<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
					<div class="content">
						<figure class="quick-read full-width">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('section-large-thumb'); ?>
							</a>
							<!--<span></span>-->
						</figure>
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
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
		</div><!--/multy-col-2-->
	<?php } elseif($pagePostCount == 8){ ?>
		<div class="multy-col-1">
			<div class="col-inner-row">
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">											
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>												
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
				<?php } elseif($pagePostCount == 9){ ?>									
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">
							<figure class="quick-read">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('section-large-thumb'); ?>
								</a>
							</figure>
							<div class="post-title-box">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?></a> 
							</div>
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>
						</div>
					</article>
				</div>
			</div>
			<?php } elseif($pagePostCount == 10){ ?>
			<div class="col-inner-row">								
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">
							<figure class="quick-read full-width">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('section-large-thumb'); ?>
								</a>
							</figure>
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>											
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
				<?php } elseif($pagePostCount == 11){ ?>						
				<div class="col-inner-col">
					<article class="<?php echo get_parent_category(get_the_ID(), 'slug') ?>-bg featured-post">
						<div class="content">
							<figure class="quick-read full-width">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('section-large-thumb'); ?>
								</a>
							</figure>
							<h4 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
							</h4>											
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
			</div>
		</div><!--/multy-col-1-->							
	</section><!--/multy-col-widgets-->						
</div><!--/single-page-widgets-->					
<?php } ?>
<?php $pagePostCount++; ?>
<?php endwhile; ?>
					