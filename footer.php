    <?php 
    	if ( is_front_page() || is_author() || is_page() || is_404() ){
	    	$catSlugfootbg = 'orange';	
    	} else {
	    	$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
    	}    	
    	wp_reset_query();
    	global $wp_query;
		$term = $wp_query->get_queried_object();
		$is_childCat = false;
		if(!empty($term)){
			if($term->parent != 0){
				$is_childCat = true;
			} //endif
		} //endif
	?>  
	<?php if(is_front_page()){ ?>
		<div class="scroll-top-bar">	
			<div class="scroll-top-menu closer-element">
				<div class="wrapper-box">
					<div class="scroll-top-menu-container">
						<div class="left-col-menu">					
							<a class="go-top" href="#">Top</a>
							<a class="go-middle" href="#">Middle</a>
							<a class="go-Bottom" href="#">Bottom</a>						
						</div>			
						<div class="right-col-menu">
							<?php $terms = get_terms( POST_CATEGORY, 'exclude=15411,4423,5685' ); ?>
							<?php
								$defaults = array(
									'theme_location'  => 'scroll-to-menu',
									'container'       => false,
									'container_id'    => '',
									'menu_class'      => 'scroll-menu',
								);
								wp_nav_menu( $defaults );
							?>
							
							<!--<ul class="scroll-menu">
							<?php
								foreach($terms as $term){
									if($term->parent == 0){ ?>
										<li><a href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
								<?php }
								}
							?>
							</ul>-->
						</div>
						<a class="close-element" href="#">Close</a>
					</div>
				</div>
			 </div>		 
			<div class="scroll-togall-bar">
				<div class="footer-menu-icons">
					<a class="menu-slide-link" href="#"><i class="fa fa-bars"></i></a>						
					<a class="scroll-top" href="#"><span class="list-icon"></span>Scroll To</a>
					<a class="search-box-open-link" href="#"><i class="fa fa-search"></i></a>
				</div>			
			</div>
		</div>		
		<?php } elseif(is_page()){ ?>
			<div class="scroll-top-bar">	
				<div class="scroll-top-menu closer-element">
					<div class="wrapper-box is_singular">
						<div class="scroll-top-menu-container">
							<div class="left-col-menu">					
								<a class="go-top" href="#">Top</a>
								<a class="go-middle" href="#">Middle</a>
								<a class="go-Bottom" href="#">Bottom</a>	
								<div class="clear"></div>
								<div class="widgets-post-links">
									<a href="#wahtsnew">What's New</a>								
								</div>					
							</div>			
							
							<a class="close-element" href="#">Close</a>
						</div>
					</div>
				 </div>		 
				<div class="scroll-togall-bar">
					<div class="wrapper-box">
						<div class="footer-menu-icons">
							<a class="menu-slide-link" href="#"><i class="fa fa-bars"></i></a>						
							<a class="scroll-top" href="#"><span class="list-icon"></span>Scroll To</a>
							<a class="search-box-open-link" href="#"><i class="fa fa-search"></i></a>
						</div>					
					</div>			
				</div>
			</div>
			<?php } elseif(is_404()){ ?>
			<div class="scroll-top-bar">	
				<div class="scroll-top-menu closer-element">
					<div class="wrapper-box is_singular">
						<div class="scroll-top-menu-container">
							<div class="left-col-menu">					
								<a class="go-top" href="#">Top</a>
								<a class="go-middle" href="#">Middle</a>
								<a class="go-Bottom" href="#">Bottom</a>
								</div>			
							
							<a class="close-element" href="#">Close</a>
						</div>
					</div>
				 </div>		 
				<div class="scroll-togall-bar">
					<div class="wrapper-box">
						<div class="footer-menu-icons">
							<a class="menu-slide-link" href="#"><i class="fa fa-bars"></i></a>						
							<a class="scroll-top" href="#"><span class="list-icon"></span>Scroll To</a>
							<a class="search-box-open-link" href="#"><i class="fa fa-search"></i></a>
						</div>					
					</div>			
				</div>
			</div>
			<?php } elseif( (is_singular()) || ($is_childCat) ){?>
			<div class="scroll-top-bar">	
				<div class="scroll-top-menu closer-element">
					<div class="wrapper-box is_singular">
						<div class="scroll-top-menu-container">
							<div class="left-col-menu">					
							<a class="go-top" href="#">Top</a>
							<a class="go-middle" href="#">Middle</a>						
							<a class="go-Bottom" href="#">Bottom</a>	
							
							<?php 
								if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
								?>
								<div class="footer-meida-option">		
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
									
								</div>
							<?php } ?>
							
							<div class="clear"></div>
							<div class="widgets-post-links">
								<a href="#wahtsnew">What's New</a>
								<a href="#mostpopular">Popular</a>						
								<a href="#wpp-3">Trending</a>	
							</div>				
						</div>						
						<a class="close-element" href="#">Close</a>
						
					</div>
				</div>
			 </div>		 
			<div class="scroll-togall-bar">
				<div class="wrapper-box">
					<div class="footer-menu-icons">
						<a class="menu-slide-link" href="#"><i class="fa fa-bars"></i></a>						
						<a class="scroll-top" href="#"><span class="list-icon"></span>Scroll To</a>
						<a class="search-box-open-link" href="#"><i class="fa fa-search"></i></a>
					</div>		
				</div>		
			</div>
		</div>			
    	
	<?php } elseif( !$is_childCat ){ ?>
			<div class="scroll-top-bar">	
				<div class="scroll-top-menu closer-element">
					<div class="wrapper-box">
						<div class="scroll-top-menu-container">
							<div class="left-col-menu">					
								<a class="go-top" href="#">Top</a>
								<a class="go-middle" href="#">Middle</a>
								<a class="go-Bottom" href="#">Bottom</a>						
							</div>			
							<div class="right-col-menu">
								<ul class="scroll-menu">
								<?php
									$terms = get_the_terms(get_the_ID(), POST_CATEGORY);
									foreach($terms as $term){
										if($term->parent == 0){
											$catID = $term->term_id;
											break;
										}
									}
									$terms = get_term_children( $catID, POST_CATEGORY ); 
									foreach($terms as $term){
										$childTerm = get_term_by( 'id', $term, POST_CATEGORY);
										echo '<li><a href="#'.$childTerm->slug.'">'.$childTerm->name.'</a></li>';
									}
								?>
								</ul>
							</div>
							<a class="close-element" href="#">Close</a>
						</div>
					</div>
				 </div>		 
				<div class="scroll-togall-bar">
					<div class="wrapper-box">
						<div class="footer-menu-icons">
							<a class="menu-slide-link" href="#"><i class="fa fa-bars"></i></a>						
							<a class="scroll-top" href="#"><span class="list-icon"></span>Scroll To</a>
							<a class="search-box-open-link" href="#"><i class="fa fa-search"></i></a>
						</div>					
					</div>			
				</div>
			</div>
		<?php }?>	
	
    <!-- SCROLL TO MENU -->
           
    
    <?php wp_reset_query(); ?>
    <footer class="<?php echo $catSlugfootbg; ?>-bg">
    	<div class="container">
    		<div class="footer-col-1">
    			<h2>RECENTLY</h2>
				
    			<ul>
					<?php 
						$args = array(
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => 5,													
						);
						$trending = new WP_Query( $args );
					?>
				<?php if ( $trending->have_posts() ) while ( $trending->have_posts() ) : $trending->the_post();	?>
	    			<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></li>
				<?php endwhile; ?>
    			</ul>
    		</div> <!-- //footer-col-1 -->
    		<div class="social-newsletter">
    			<h2>Socialise with us</h2>
    			<ul class="social">
	    			<li><a href="https://www.facebook.com/desiblitz" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
		    			<li><a href="https://twitter.com/desiblitz" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
		    			<li><a href="https://plus.google.com/112046945673800482470/about" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		    			<li><a href="https://in.pinterest.com/desiblitz/" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
		    			<li><a href="https://www.youtube.com/user/desiblitzer" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a></li>
    			</ul>
    			<div class="newsletter">
    				<h2>SIGNUP FOR OUR LATEST NEWS, GOSSIP & GUPSHUP</h2>
    				<form>
    					<p>
	    					<label>First Name</label>
	    					<input type="text" />
    					</p>
    					<p>
	    					<label>Last Name</label>
	    					<input type="text" />
    					</p>
    					<p>
	    					<label>Email Address</label>
	    					<input type="email" />
    					</p>
    					<p>
	    					<input type="submit" value="Sign up" />
    					</p>
    				</form>
    			</div>
    		</div> <!-- //social-newsletter -->
    		<div class="footer-col-2">
					<h2>About Us</h2>
					<?php
							wp_nav_menu(array(
							'theme_location'  => 'footer-menu',
							'container'=> false,
							'menu_class'=>' '
					       ));
				  ?>
    		</div> <!-- //footer-col-1 -->
    	</div>
    	<div class="copyright">
    		<div class="container">
    			<p> Copyright © 2008-<?php echo date(Y); ?> DESIblitz. DESIblitz is a ® registered trade mark | Email:info@desiblitz.com  </p>
    		</div>
    	</div>
	</footer>	
	
      <?php wp_footer(); ?>
	  <script type="text/javascript">
	window._taboola = window._taboola || [];
	_taboola.push({flush: true});
	</script>
  </body>
  
</html>
<?php
// this can live in /themes/mytheme/functions.php, or maybe as a dev plugin?
function get_template_name () {
  foreach ( debug_backtrace() as $called_file ) {
    foreach ( $called_file as $index ) {
      if ( !is_array($index[0]) AND strstr($index[0],'/themes/') AND !strstr($index[0],'footer.php') ) {
        $template_file = $index[0] ;
      }
    }
  }
  $template_contents = file_get_contents($template_file) ;
  preg_match_all("(Template Name:(.*)\n)siU",$template_contents,$template_name);
  $template_name = trim($template_name[1][0]);
  if ( !$template_name ) { $template_name = '(default)' ; }
  $template_file = array_pop(explode('/themes/', basename($template_file)));
  return $template_file . ' > '. $template_name ;
}


	if($user_ID==2634){
		echo '<div class="alert alert-info"><h3>For Technical Use'.$user_ID.' </small>(Only admins can see this)</small></h3>';
		echo get_template_name();
	}
	?>