<?php
	// Our include
	define('WP_USE_THEMES', false);
	require_once('../../../../wp-load.php'); 
	
	$keyword = (isset($_GET['keyword'])) ? $_GET['keyword'] : 0;
	$catSlug = (isset($_GET['catSlug'])) ? $_GET['catSlug'] : '';
	
	
	/**************************
		POSTS TO DISPLAY
	**************************/
	
	if(!empty($catSlug)){
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 9,
			's' => $keyword,
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
			'posts_per_page' => 9,
			's' => $keyword,
		);	
	}
	
	$ajax_query = new WP_Query( $args );
?>
    
<?php if ( $ajax_query->have_posts() ) { ?>

	<?php while ( $ajax_query->have_posts() ) : $ajax_query->the_post(); ?>
		
		<div class="flex">
			<div class="post-fig">
				<figure class="full-width">
					<?php the_post_thumbnail('trending-thumb'); ?>
				</figure>
			</div>
			<div class="post-content">
				<h3 class="post-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
			</div>
		</div> <!-- //flex -->
		
	<?php endwhile; ?>

<?php } else { ?>
	<div class="flex">
		<div class="post-content">
			<h3 class="post-title">
				No Posts Found.
			</h3>
		</div>
	</div> <!-- //flex -->
<?php }//END IF HAVE POSTS ?>
