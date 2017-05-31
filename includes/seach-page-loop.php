<?php
	// Our include
	define('WP_USE_THEMES', false);
	require_once('../../../../wp-load.php'); 
	
	$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
	$catSlug = (isset($_GET['catSlug'])) ? $_GET['catSlug'] : 0;
	$keyword = (isset($_GET['searchKey'])) ? $_GET['searchKey'] : 0;
	
	if($keyword != ''){ 
						
		if(!empty($catSlug)){
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,
				's' => $keyword,
				'paged'          => $page,
				'tax_query' => array(
					array(
						'taxonomy' => POST_CATEGORY,
						'field'    => 'slug',
						'terms'    => $catSlug,
					),
				),
			);	
		} else {
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,
				'paged'          => $page,
				's' => $keyword,
			);	
		}
		
		$search_query = new WP_Query( $args );
	
	if ( $search_query->have_posts() ) {
		while ( $search_query->have_posts() ) : $search_query->the_post(); ?>
			<div class="col-2">
				<article class="trend-overlay flex">
					<div class="content">
						<figure>
							<a class="fancybox" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('trending-thumb'); ?>
							</a>
						</figure>										
					</div>								
					<div class="content text-content-overlay">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt();?></p>
					</div>
				</article>
			</div>							
		<?php endwhile;
		} else { ?>
			<div class="col-2">
				<article class="trend-overlay flex">
					<div class="content">
						<h3>No Posts Found.</h3>
					</div>
				</article>
			</div>
		<?php }//END IF HAVE POSTS ?>
	
	<?php } else { ?>
		<div class="col-2">
			<article class="trend-overlay flex">
				<div class="content">
					<p>Please enter a correct search keyword.</p>
				</div>
			</article>
		</div>
		
	<?php } ?>