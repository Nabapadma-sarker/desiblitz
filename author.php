<?php get_header(); ?>
	<div class="post-page">		
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
										
									</div>
								</div>-->
								
							</div>
						</div><!-- //left-column -->
						
						<div class="right-column">
							
							<div class="right-column-content">
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
									<div class="single-page-author">
										<div class="content flex">
											<div class="author_name">
												<?php
													if(validate_gravatar(get_the_author_email())){
														//echo get_avatar( get_the_author_email(), 60 );
													} else {
														$author = get_the_author();
														$db_author_id = get_the_author_ID();
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
								<?php break; ?>
								<?php endwhile; ?>
								
								<ul id="authorPosts" class="authorpost-list">
									<!-- AJAX CODE WILL BE PASTED HERE -->
								</ul>
								
								<section id="subCategory_page" class="row" style="border-top: 1px solid #cccccc;">
									<div class="load-more-btn">
										<a id="load-more" class="alm-load-more-btn" href="#">Load More</a>
									</div>
							    </section>
								
								<div class="section-border"><i></i></div>								
							</div>
							
						</div><!-- //right-column -->
						
					</div><!-- //flex -->	
					<div class="divider-border"></div>
					<section class="flex">
						<div class="full-width-team orange-bg">	
						   <div style="clear:both;"></div>
							<?php 
								if ( is_active_sidebar( 'home_trending_posts' ) ) :
									dynamic_sidebar( 'home_trending_posts' );
								endif; 
							?>
							<div class="divider-border"></div>
							<div style="clear:both;"></div>
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
				</div>	
			</div> <!-- //wrapper -->		
	</div>
	
	<script>
		jQuery(function(){	
			$ = jQuery;
			
			/***************************************
				LOAD SUB CATEGORY POSTS IN AJAX
			***************************************/
			var page = 1;
			var authorCode = '<?php echo $db_author_id; ?>';
		    var loading = true;
		    var $window = $(window);
		    var $content = $('#authorPosts');
		    
		    var load_posts = function(){
		            $.ajax({
		                type       : "GET",
		                data       : {pageNumber: page, authorId: authorCode},
		                dataType   : "html",
		                url        : "<?php echo get_template_directory_uri(); ?>/includes/author-loop.php",
		                beforeSend : function(){
		                    if(page != 1){
		                        $content.append('<div id="temp_load">\
		                            	<img style="display:inline" src="https://www.desiblitz.com/wp-content/themes/desiblitz-v2/images/ajax-loader.gif" />\
		                            </div>');
		                    }
		                },
		                success    : function(data){
		                	$data = $(data);
		                	//console.log($data);
		                    $data.hide();
		                    $content.append($data);
		                    $data.fadeIn(500, function(){
		                        $("#temp_load").remove();
		                        loading = false;
		                    });
		                },
		                error     : function(jqXHR, textStatus, errorThrown) {
		                    $("#temp_load").remove();
		                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
		                }
					});// END AJAX
		    } //END LOAD_POSTS
		    
		    $('#load-more').click(function(){
		        if(!loading) {
			        loading = true;
			        page++;
			        load_posts();
		        }//IF NOT LOADING
		        return false;
		    });
		    
		    load_posts();
		    
		}); //END DOCUMENT.READY
		
	</script>
<?php get_footer(); ?>  