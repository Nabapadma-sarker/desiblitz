	<?php include('check_category.php'); ?>
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
				$advertLogoImg = get_field('advert_logo');
				
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
	
	<?php $sidebar_cat = strtolower($catslug);?>
	<div class="post-title-bar <?php echo strtolower($catslug);?>-bg">
		<div class="container">
			<div class="flex">
				<div class="col-12">				
					<h2>	
									
						<?php 
							if(!is_single()){?>
								
								<a class="category-link-tag" href="<?php echo get_term_link($IDterm); ?>"><?php echo $catName;?></a>
								
								<?php 
									if($term->parent != 0){
										echo ' > ' . $childTaxName; 	
									}
									
							} else {
								?>								
								<a class="category-link-tag" href="<?php echo get_term_link($term); ?>"><?php echo $catName;?></a>
								<?php 
									
									$titleCatID = get_child_category(get_the_ID(), 'id'); 
									$titleTerm = get_term_by( 'id', $titleCatID, POST_CATEGORY);
									
									if( !empty($titleCatID)){
										$titleCatURL =  get_term_link($titleTerm);
										echo ' > ' . '<a class="category-link-tag" href="'.$titleCatURL.'">'.get_child_category(get_the_ID(), 'name').'</a>';
									}
								?>
								
							<?php }	?>						
						
					</h2>	
					<div class="sponsored-by <?php esc_html_e( $post_category ); ?>">
						<?php if( !empty($logoAdvertUrl)){ ?>
	    					<a href="<?php echo $logoAdvertLink; ?>" target="_blank" title="Sponsored by">
	    						sponsored by <img src="<?php echo $logoAdvertUrl; ?>" />
	    					</a>
    					<?php } ?>
    				</div>
				</div>
			</div>
		</div>
	</div>			
	<div id="wrapper" class="category-page <?php echo strtolower($catslug);?>-bg">
		