<?php 
/**
 * Template Name: Oct Test Theme 2
 */
get_header('slim'); ?>
<style>
.right-column-content {
    margin-bottom: 20px;
    padding: 0px 0px; 
	border:0px !important;
	background:#fff !important;
}
.left_side{
width:70%; float:right;
}
.right_side{
width:30%; float:left;
}
@media screen and (max-width: 480px) {
.left_side{
width:100%;
}
.right_side{
width:100%;
}
}
</style>
		<!---TITLE ROW--->
			<?php include('includes/category-title.php'); ?>
		<!---/TITLE ROW--->
		<br>
			<div class="post-page">	
				<div class="<?php echo $sidebar_cat; ?>-bg">

                                <div class="left_side">
                                    <h1 class="post-name"><?php the_title();?></h1>
                                    </div>
								<div class="right_side">
                            <?php
                              echo  showadbox300x200();
                                ?>	
                                </div>
                                
                                <div class="left_side">    
                                    <div class="the-excerpt">
                                        <p><?php the_excerpt(); ?> </p>									
                                    </div>
                                    
                                    <div align="center" style="padding:10px 0">	
                                    <?PHP 
                                  echo showads();
                                    ?>
                                    </div>
                                
                                </div>
                                
                                <div style="clear:both"></div>
                                
					<?php 
						$showSidebar = get_field('do_not_show_sidebar'); 
						//var_dump($showSidebar);
					?>
					<?php if($showSidebar){	?>
						<div class="single-Page notShowSidebar">	
					<?php } else { ?>					
							<div class="single-Page" data-sticky_parent="">
					<?php } ?>					
					<?php if($showSidebar) { ?>
						<!-- Hide Sidebar-->
					<?php } else { ?>
						<div class="left-column" data-sticky_column="">
							<div class="left-column-content " style="border:0">
							
								<?php if($sidebar_cat == 'competitions'){?>
									<?php 
										if ( is_active_sidebar( 'competitions_sidebar' ) ) :
											dynamic_sidebar( 'competitions_sidebar' );
										endif; 
									?>
								<?php } else {?>
								<?php 
									if ( is_active_sidebar( 'single-post-sidebar' ) ) :
										dynamic_sidebar( 'single-post-sidebar' );
									endif; 
								?>
								<?php } ?>
								<?php wp_reset_query(); ?>								
											
							</div>
						</div><!-- //left-column -->
					<?php } ?>
					
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div class="right-column" data-sticky_column="">
							<div class="right-column-content">
								<?php 
									$hideDate = get_field('do_not_display_date');
										if($hideDate == 'yes'){?>
										<div class="post-date">
											<time> <i class="fa fa-calendar-o"></i> <?php echo the_time('F j, Y'); ?></time >
										</div>
									<?php } else { ?>
										
								<?php } ?>
								<?php if($showSidebar){	?>
								<div class="post-img-big">
									<figure><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full-width-single-post');} ?></figure>	
								</div>
								<?php } else { ?>
									<div class="post-img-big">
										<figure><?php if ( has_post_thumbnail() ) {the_post_thumbnail('single-post');} ?></figure>	
									</div>
								<?php } ?>
								<div class="author-info">								
									<?php 
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
									?>			
											<div class="meida-option <?php echo get_parent_category(get_the_ID(), 'slug'); ?>-bg" >
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li class="video-icon">
															<a href="#jwplayer-0"> 
																<i class="fa fa-youtube-play"></i>
																<label>Watch Video</label>
															</a>
														</li>
													<?php } ?>
													<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
														<li class="gallery-icon">
															<a href="#ngg-image-0">
																<i class="fa fa-camera"></i>
																<label>View Gallery</label>
															</a>
														</li>
													<?php } ?>
													<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
														<li class="audio-icon">
															<a href="#mep_0">
																<i class="fa fa-volume-up"></i>
																<label>Hear Audio</label>
															</a>
														</li>
													<?php } ?>										
												</ul>
											</div>
									<?php } ?>								

                                    <div class="author-details">
										<div class="author-img">
											<h3>By  <label><?php the_author_posts_link(); ?> </label></h3>
											<label class="email-id"><?php //the_author_email(); ?></label>
										</div>
										<label class="user-img">
											<?php
												if(validate_gravatar(get_the_author_email())){
													echo get_avatar( get_the_author_email(), 60 );
												} else {
													$db_author_id = get_the_author_ID();
													$author = get_the_author();
													$author_img = get_template_directory_uri().'/images/authors/' . $db_author_id . '.jpg';
													echo '<img src="'.$author_img.'" alt="'. $author .'" />';
												}
											?>
											
										</label>										
									</div>									
									<div class="content">
									
										<?php echo do_shortcode('[social_warfare post_id="'.get_the_ID().'"]'); ?>
									</div>
								</div>								
								<div class="the-content single-page-content">
									<?php $pullquote = get_post_meta( get_the_ID(), 'pullquote', true );?>
									<?php if(!empty($pullquote)){ ?>
										<p class="pullquote"><?php echo $pullquote; ?></p>
									<?php } ?>
									<span class="paragraph">
									<?php $content = get_the_content('',FALSE,''); // arguments remove 'more' text
										echo split_content($content);?>
									</span>
								</div>									
								<div class="single-page-author">
									<div class="content flex">
										<div class="author_name">
											<?php
												if(validate_gravatar(get_the_author_email())){
													echo get_avatar( get_the_author_email(), 60 );
												} else {
													$db_author_id = get_the_author_ID();
													$author = get_the_author();
													$author_img = get_template_directory_uri().'/images/authors/' . $db_author_id . '.jpg';
													echo '<img src="'.$author_img.'" alt="'. $author .'" />';
												}
											?>
											
											<h5><?php the_author_posts_link(); ?> </h5>
											<h6><?php //the_author_email(); ?></h6>
										</div>
										<div class="author_desc">
											<?php the_author_description(); ?>
										</div>
										
									</div>
								</div>
								
								<?php 
									$args = array(
										'post_type' => 'advertise',
										'meta_key'		=> 'advert_type',
										'meta_value'	=> 'CS',
										'posts_per_page' => -1,
									);
									$advertLogo_query = new WP_Query( $args );
									
									$logoAdvertUrl = '';
									if ( $advertLogo_query->have_posts() ) {
										while ( $advertLogo_query->have_posts() ) : $advertLogo_query->the_post();
											$advertLogoImg = get_field('advert_image_upload');
											
											if(!empty($advertLogoImg)){ //CHECK IF THEY HAVE ADVERT LOGO
												
												$fromTime = strtotime(get_field('from_date_and_time'));
												$toTime = strtotime(get_field('to_date_and_time'));
												$todayDate = time();
												if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
													
													$advertTerm = get_field('advertise_category');
													if($catslug == $advertTerm->slug){ //CHECK IF THEY MATCH SELECTED CATEGORY
														$advertLogoImgArr = wp_get_attachment_image_src( $advertLogoImg, 'advert-logo' );
														
														$logoAdvertUrl = $advertLogoImgArr[0];
														$logoAdvertLink = get_field('advert_link');
														
														break; //BREAK AFTER THE FIRST LOOP
													}
													
												}
												
											}
											
										endwhile;
										wp_reset_query();
									}
								?>
								
								<?php $Photocredits = get_post_meta( get_the_ID(), 'Photocredits', true );?>
								<?php if(!empty($Photocredits)){ ?>
									<p class="Photocredits"><i class="fa fa-camera"></i> <?php echo $Photocredits; ?></p>
								<?php } ?>
								
								<?php $Videocredits = get_post_meta( get_the_ID(), 'Videocredits', true );?>
								<?php if(!empty($Videocredits)){ ?>
									<p class="Photocredits"><i class="fa fa-video-camera"></i> <?php echo $Videocredits; ?></p>
								<?php } ?>
								
								<?php $Credits = get_post_meta( get_the_ID(), 'Credits', true );?>
								<?php if(!empty($Credits)){ ?>
									<p class="Photocredits"><i class="fa fa-star"></i> <?php echo $Credits; ?></p>
								<?php } ?>
								
						
									
								<?php if( !empty($logoAdvertUrl)){ ?>
			    					<section class="row advert-area">
										<a href="<?php echo $logoAdvertLink; ?>" target="_blank" title="Sponsored by">
											<img src="<?php echo $logoAdvertUrl; ?>" />
										</a>
									</section>
		    					<?php } ?>								
								
								<div class="share_article">
									<div class="content">
										<h2 class="center-title">Share Article</h2>
									
										<?php echo do_shortcode('[social_warfare post_id="'.get_the_ID().'"]'); ?>
									</div>
								</div>
												
								<div class="single-pagination">
									<div class="previous">
										<label class="link"><?php previous_post_link('%link', 'Previous Article', TRUE);?> </label>
										<div class="pagetitle"><?php previous_post_link('%link', '%title', TRUE, ' ', 'category'); ?></div>
									</div>
									<div class="next">
										<label class="link"><?php next_post_link('%link','Next Article', TRUE); ?> </label>
										<div class="pagetitle"><?php next_post_link('%link', '%title', TRUE, ' ', 'category'); ?></div>
									</div>
								</div>
								
								<div class="section-border"><i></i></div>
							</div>						                                              
                            
                            
                           </br>
								
							<div class="border-tag"></div>
							
							<section class="related-reads-section">
								<h2 class="section-title capitalize">
									<span>Related Reads</span><i></i>
								</h2>
								<div class="flex">
								<?php 
									if ( is_active_sidebar( 'single-related-post' ) ) :
										dynamic_sidebar( 'single-related-post' );
									endif; 
								?>								
								</div>
								<h4 class="title"> Sponsored</h4>
								<div class="clear"></div>
								<div id="contentad144907"></div>								
								<script type="text/javascript">
									(function(d) {
									var params =
									{
									id: "96ede7b6-af88-41b3-888e-3d1574a96101",
									d: "ZGVzaWJsaXR6LmNvbQ==",
									wid: "144907",
									cb: (new Date()).getTime()
									};
									
									var qs=[];
									for(var key in params) qs.push(key+'='+encodeURIComponent(params[key]));
									var s = d.createElement('script');s.type='text/javascript';s.async=true;
									var p = 'https:' == document.location.protocol ? 'https' : 'http';
									s.src = p + "://api.content.ad/Scripts/widget2.aspx?" + qs.join('&');
									d.getElementById("contentad144907").appendChild(s);
									})(document);
								</script>
							</section>
							
							<?php
								if ( is_active_sidebar( 'single-content-ad' ) ) :
									dynamic_sidebar( 'single-content-ad' );
								endif;
							?>
							
							
							<!--<?php 
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 7,
									'tax_query' => array(
										array(
											'taxonomy' => POST_CATEGORY,
											'field'    => 'slug',
											'terms'    => $catslug,
										),
									),
								);
								$latestPost_query = new WP_Query( $args );
								if ( $latestPost_query->have_posts() ) {
									$latestPostCount = 1;
									while ( $latestPost_query->have_posts() ) : $latestPost_query->the_post();
							?>
									<?php if($latestPostCount == 1){ ?>
									<section id="latest-arts-culture" class="flex widgets <?php echo $catslug; ?>-bg">
										<div class="featured-post">
											<div class="content">										
												<h3 class="post-title">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h3>										
												<div class="go-to-share">
													<ul>
														<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
														<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
													</ul>
													<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
												</div>
											</div>
											<?php } elseif($latestPostCount == 2){ ?>
											<div class="content">										
												<h3 class="post-title">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h3>										
												<div class="go-to-share">
													<ul>
														<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
														<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
													</ul>
													<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
												</div>
											</div>									
										</div>
										<?php } elseif($latestPostCount == 3){ ?>
										<div class="mid-series">
											<div class="mid-series-bg">
												<article>
													<figure>
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
														</a>
													</figure>
													<h3 class="post-title bg">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="go-to-share white">
														<ul>
															<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
														</ul>
														<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
													</div>
												</article>
												<?php } elseif($latestPostCount == 4){ ?>
												<article>
													<h3 class="post-title bg">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="go-to-share white">
														<ul>
															<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
														</ul>
														<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
													</div>
												</article>
											</div>
										</div>
										<?php } elseif($latestPostCount == 5){ ?>
										<div class="more-posts">
											<div class="content flex">
												<div class="sec-1">
													<figure class="quick-read">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
														</a>
														<span></span>
													</figure>
													<h3 class="post-title">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="go-to-share less-spacing">
														<ul>
															<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
														</ul>
														<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
													</div>
												</div>
												<?php } elseif($latestPostCount == 6){ ?>
												<div class="sec-1">
													<figure class="quick-read">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
														</a>
														<span></span>
													</figure>
													<h3 class="post-title pt-sans-narrow">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>										
													
												</div>										
											</div>
											<?php } elseif($latestPostCount == 7){ ?>
											<div class="content bottom-content flex">
												<div class="boxed-content">
													<div class="flex">
														<div class="post-fig">
															<figure>
																<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																	<?php the_post_thumbnail('trending-thumb'); ?>
																</a>
															</figure>
															<div class="go-to-share white less-spacing">
																<ul>
																	<li><a href="#" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
																	<li><a href="#" title="View Video"><i class="fa fa-camera"></i></a></li>
																</ul>
																<a class="shares" href="#" title="320 Shares"><i class="fa fa-share"></i> <strong>320</strong> Shares</a>
															</div>
														</div>
														<div class="post-content">
															<h3 class="post-title bg">
																<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																	<?php the_title(); ?>
																</a>
															</h3>
														</div>
													</div>
												</div>
												<div class="more-link-container health-beauty">
													<a class="more-badge" href="<?php echo get_term_link( $catslug, POST_CATEGORY ); ?>" title="More Posts">more</a>
												</div>
											</div>
										</div>
									</section>
									<?php } ?>
									<?php $latestPostCount++; ?>
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							<?php } ?>-->							
							
						</div><!-- //right-column -->
						<?php endwhile; ?>						
							
					</div><!-- //flex -->
					
					
					<div class="section-border"><i></i></div>
					
				</div>				
				<div class="single-page-widgets">						
             
		
					<?php 
						if ( is_active_sidebar( 'single-post-page' ) ) :
							dynamic_sidebar( 'single-post-page' );
						endif; 
					?> 
					
					
				</div><!--/single-page-widgets-->
				
			</div> <!-- //wrapper -->
		
	</div>
	
	<script>
		jQuery(document).ready(function( $ ) {
			/******** MOST LIKED POST *************/
		if($('.post-page').length != 0){		
			setTimeout(function(){
				$('.ac_header_title').wrapInner('<span></span>');
				$('.ac_container').wrapInner('<div class="post-thum-bax"></div>');			
				$('.ac_header_title').addClass('section-title capitalize');
				$('.ac_header_title').append('<i></i>');
				$('#ac_84357').insertAfter('.related-reads-section');
			}, 2000);
		}	

		/****** FOR Audio ICON ********/
			if($('.right-column-content iframe').length != 0){		
				$('.right-column-content iframe[src*="soundcloud.com"]').each(function() {
		        	 $(this).attr('id', 'mep_0');
		        });   	   
			}//IF
			
		}); //END jQUERY FUNCTION
	</script>

<?php get_footer(); ?>  