<?php get_header(); ?>	
		<!---TITLE ROW--->
			<?php include('includes/category-title.php'); ?>
		<!---/TITLE ROW--->
		<br>
			<div class="post-page single-post-page">	
				<div class="<?php echo $sidebar_cat; ?>-bg">
					
					<?php 
						$showSidebar = get_field('do_not_show_sidebar'); 
						//var_dump($showSidebar);
						
						/*$advert_type = get_field('acf-field-advert_type');
						
						echo "<h1>".$advert_type."</h1>";
						exit;*/
						
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
							<div class="left-column-content ">								
								<?php if($sidebar_cat == 'competitions'){?>
									<?php 
										if ( is_active_sidebar( 'competitions_sidebar' ) ) :
											dynamic_sidebar( 'competitions_sidebar' );
										endif; 
									?>
								<?php } else {?>
								<?php 
									if ( is_active_sidebar( 'single-post-sidebar' ) ) :
                                                             
                                                         $cate=get_the_category();
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
								<h1 class="post-name"><?php the_title();?></h1>
								
								<div class="the-excerpt">
									<p><?php the_excerpt(); ?> </p>									
								</div>
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
                                
                                
                                
                                    <!-- Sponsorship Advert -->
                                        
                                        <?php 
                                        $args = array(
                                            'post_type' => 'advertise',
                                            'meta_key'		=> 'advert_type',
                                            'meta_value'	=> 'PSA',
                                            'posts_per_page' => -1,
                                        );
                                        $advert_arg = new WP_Query( $args );
                                        
                                        if ( $advert_arg->have_posts() ) {
                                            while ( $advert_arg->have_posts() ) : $advert_arg->the_post();
                                                $actual_link = $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                
                                                $sponsor_link = get_field('post_url');
                                                
                                                if( $actual_link == $sponsor_link )
                                                {
                                                    $advert_impression = get_field('impressions');
                                                    $advert_impression_c = get_field('current_impressions');
                                                    $advert_impression_c = empty($advert_impression_c) ? 0 : $advert_impression_c;
                                                    
                                                    //echo $advert_impression_c."<br>";
                                                    
                                                    $advert_image = get_field('advert_image_upload');
                                                    if( !empty( $advert_image ) ) {
                                                        $advert_image_url = wp_get_attachment_image_src( $advert_image, 'advert-as' );
                                                        $advert_image_url = $advert_image_url[0];
                                                    } else {
                                                        $advert_image_url = "";
                                                    }
                                                    
                                                    $advert_link = get_field('advert_link');
                                                    // Check if Impressions are available
                                                    if( $advert_impression <= 0 )
                                                    {
                                                        $todayDate = time();
                                                        $advert_start_time=strtotime(str_replace('/', '-',get_field('from_date_&_time')));
                                                        $advert_end_time = strtotime(str_replace('/', '-',get_field('to_date_and_time')));
                                                        
                                                        if($advert_start_time <= $todayDate && $advert_end_time >= $todayDate) {
                                                            echo '<div class="post-sponsorship-advert"><p class="post-name">Article Sponsored By</p><a href="'.$advert_link.'"><img src="'.$advert_image_url.'" alt="Sponsored Image"></a></div>';
                                                        }
                                                    } else {
                                                        if( $advert_impression >= $advert_impression_c )
                                                            echo '<div class="post-sponsorship-advert"><p class="post-name">Article Sponsored By</p><a href="'.$advert_link.'"><img src="'.$advert_image_url.'" alt="Sponsored Image"></a></div>';
                                                        
                                                    }
                                                    
                                                    update_field("current_impressions", $advert_impression_c +1 );
                                                        
                                                }
                                                
                                            endwhile;
                                            wp_reset_query();
                                        }
                                    ?>                                       
                                        
                                    <!-- ./Sponsorship Advert -->
                                
 
 
                                
                                
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

                               <?php 
							   $display_jobs = get_field('do_not_display_jobs');
										if($display_jobs != 'no'){
                              if ( is_active_sidebar( 'job-ads-widget' ) ) :
                                            dynamic_sidebar( 'job-ads-widget' );
                                        endif; 
										}
							   ?>
							
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
							
							<section class="related-reads-section <?=$sidebar_cat;?>_cate_wid">
								<h2 class="section-title capitalize h2-related">
									<span>Related Reads</span><i></i>
								</h2>
								<div class="flex">
									<ul>                                
									<?php 
                                        if ( is_active_sidebar( 'single-related-post' ) ) :
                                            dynamic_sidebar( 'single-related-post' );
                                        endif; 
                                    ?>	
                                    </ul>							
								</div>
								<div class="clear"></div>
							</section>
							
						
							
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
			
			
			var total_p_tags = parseInt( $(".single-page-content span p").length );
			var set_after_tags = Math.floor( total_p_tags / 2);
			
		
			$(".post-sponsorship-advert").insertAfter( $('.single-page-content span p:eq("'+set_after_tags+'")') );
		 
			
		}); //END jQUERY FUNCTION
		
	</script>

<?php get_footer(); ?>  
