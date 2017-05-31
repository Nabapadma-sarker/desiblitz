<?php
	// Our include
	define('WP_USE_THEMES', false);
	require_once('../../../../wp-load.php'); 
	
	$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
	$authorId = (isset($_GET['authorId'])) ? $_GET['authorId'] : 0;
	
	$args = array(
		'post_type' => 'post',
		'author'	=> $authorId,
		'paged'          => $page,
	);
	
	
	$author_query = new WP_Query( $args );
	
	if ( $author_query->have_posts() ) {
		while ( $author_query->have_posts() ) : $author_query->the_post(); ?>
			<li>									 
				<div class="post-img-big">
					<a href="<?php echo get_permalink();?>">
					<?php the_post_thumbnail('trending-thumb' ); ?>
					</a>	
				</div>
				<div class="content-box">
					<h4 class="post-title">
						<a href="<?php echo get_permalink();?>"><?php the_title(); ?></a>
					</h4>
					<?php the_excerpt();?>
				</div>
			 </li>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	<?php } ?>