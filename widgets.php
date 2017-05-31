<?php
	
	/*******************************************
		WIDGET AREA - HOME BANNER
	********************************************/
	function lym_home_bannerSlider() {		
		register_sidebar( array(			
					'name' => 'Homepage - Whats New',			
					'id' => 'home-banner-slider',
					));	
	}	
	add_action( 'widgets_init', 'lym_home_bannerSlider' );
	
	
	/*******************************************
		WIDGET AREA - HOME TRENDING
	********************************************/
	function lym_home_trendingPosts() {		
		register_sidebar( array(			
					'name' => 'Homepage - Trending',			
					'id' => 'home_trending_posts',
					));	
	}	
	add_action( 'widgets_init', 'lym_home_trendingPosts' );
	
	/*******************************************
		WIDGET AREA - HOME TWO POSTS
	********************************************/
	function lym_home_twoPosts() {		
		register_sidebar( array(			
					'name' => 'Homepage - Two Posts Section',			
					'id' => 'home_two_posts',
					));	
	}	
	add_action( 'widgets_init', 'lym_home_twoPosts' );
	
	/*******************************************
		WIDGET AREA - HOME PAGE GRIDS
	********************************************/
	function lym_home_latestPosts() {		
		register_sidebar( array(			
					'name' => 'Homepage - Latest Post Grids',			
					'id' => 'home_latest_posts',
					));	
	}	
	add_action( 'widgets_init', 'lym_home_latestPosts' );
	
	/*******************************************
		WIDGET AREA - FULL WIDTH AD
	********************************************/
	function lym_home_fullwidth_ad() {		
		register_sidebar( array(			
					'name' => 'Full Width Ad - One Post Section',			
					'id' => 'fullwidth_ad',
					));	
	}	
	add_action( 'widgets_init', 'lym_home_fullwidth_ad' );
	
		
	/*******************************************
		WIDGET AREA - ARTS & CULTURE Category
	********************************************/
	function artculture_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Arts & Culture - Banner',			
					'id' => 'artculture_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'artculture_cat_banner' );
	
	function artculture_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Arts & Culture - Trending',			
					'id' => 'artculture_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'artculture_cat_trending' );
	
	function artculture_cat_single() {		
		register_sidebar( array(			
					'name' => 'Arts & Culture - Single Post',			
					'id' => 'artculture_category_single',
					));	
	}	
	add_action( 'widgets_init', 'artculture_cat_single' );
	
	function artculture_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Arts & Culture - Latest Post Grids',			
					'id' => 'artculture_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'artculture_cat_latest' );
	
	/*******************************************
		WIDGET AREA - BRIT-ASIAN Category
	********************************************/
	function britasian_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Brit-Asian - Banner',			
					'id' => 'britasian_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'britasian_cat_banner' );
	
	function britasian_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Brit-Asian - Trending',			
					'id' => 'britasian_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'britasian_cat_trending' );
	
	function britasian_cat_single() {		
		register_sidebar( array(			
					'name' => 'Brit-Asian - Single Post',			
					'id' => 'britasian_category_single',
					));	
	}	
	add_action( 'widgets_init', 'britasian_cat_single' );
	
	function britasian_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Brit-Asian - Latest Post Grids',			
					'id' => 'britasian_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'britasian_cat_latest' );
	
	/*******************************************
		WIDGET AREA - FASHION Category
	********************************************/
	function fashion_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Fashion - Banner',			
					'id' => 'fashion_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'fashion_cat_banner' );
	
	function fashion_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Fashion - Trending',			
					'id' => 'fashion_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'fashion_cat_trending' );
	
	function fashion_cat_single() {		
		register_sidebar( array(			
					'name' => 'Fashion - Single Post',			
					'id' => 'fashion_category_single',
					));	
	}	
	add_action( 'widgets_init', 'fashion_cat_single' );
	
	function fashion_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Fashion - Latest Post Grids',			
					'id' => 'fashion_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'fashion_cat_latest' );
	
		/*******************************************
		WIDGET AREA - FILM & TV Category
	********************************************/
	function cinema_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Film & TV - Banner',			
					'id' => 'cinema_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'cinema_cat_banner' );
	
	function cinema_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Film & TV - Trending',			
					'id' => 'cinema_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'cinema_cat_trending' );
	
	function cinema_cat_single() {		
		register_sidebar( array(			
					'name' => 'Film & TV - Single Post',			
					'id' => 'cinema_category_single',
					));	
	}	
	add_action( 'widgets_init', 'cinema_cat_single' );
	
	function cinema_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Film & TV - Latest Post Grids',			
					'id' => 'cinema_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'cinema_cat_latest' );
	
	
	/*******************************************
		WIDGET AREA - FOOD Category
	********************************************/
	function food_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Food - Banner',			
					'id' => 'food_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'food_cat_banner' );
	
	function food_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Food - Trending',			
					'id' => 'food_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'food_cat_trending' );
	
	function food_cat_single() {		
		register_sidebar( array(			
					'name' => 'Food - Single Post',			
					'id' => 'food_category_single',
					));	
	}	
	add_action( 'widgets_init', 'food_cat_single' );
	
	function food_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Food - Latest Post Grids',			
					'id' => 'food_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'food_cat_latest' );
		
		
	/*******************************************
		WIDGET AREA - HEALTH & BEAUTY Category
	********************************************/
	function healthybeauty_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Health & Beauty - Banner',			
					'id' => 'healthybeauty_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'healthybeauty_cat_banner' );
	
	function healthybeauty_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Health & Beauty - Trending',			
					'id' => 'healthybeauty_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'healthybeauty_cat_trending' );
	
	function healthybeauty_cat_single() {		
		register_sidebar( array(			
					'name' => 'Health & Beauty - Single Post',			
					'id' => 'healthybeauty_category_single',
					));	
	}	
	add_action( 'widgets_init', 'healthybeauty_cat_single' );
	
	function healthybeauty_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Health & Beauty - Latest Post Grids',			
					'id' => 'healthybeauty_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'healthybeauty_cat_latest' );
	
		
	/*******************************************
		WIDGET AREA - MUSIC & DANCE Category
	********************************************/
	function musicdance_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Music & Dance - Banner',			
					'id' => 'musicdance_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'musicdance_cat_banner' );
	
	function musicdance_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Music & Dance - Trending',			
					'id' => 'musicdance_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'musicdance_cat_trending' );
	
	function musicdance_cat_single() {		
		register_sidebar( array(			
					'name' => 'Music & Dance - Single Post',			
					'id' => 'musicdance_category_single',
					));	
	}	
	add_action( 'widgets_init', 'musicdance_cat_single' );
	
	function musicdance_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Music & Dance - Latest Post Grids',			
					'id' => 'musicdance_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'musicdance_cat_latest' );
	
	
	/*******************************************
		WIDGET AREA - SPORT Category
	********************************************/
	function sport_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Sport - Banner',			
					'id' => 'sport_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'sport_cat_banner' );
	
	function sport_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Sport - Trending',			
					'id' => 'sport_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'sport_cat_trending' );
	
	function sport_cat_single() {		
		register_sidebar( array(			
					'name' => 'Sport - Single Post',			
					'id' => 'sport_category_single',
					));	
	}	
	add_action( 'widgets_init', 'sport_cat_single' );
	
	function sport_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Sport - Latest Post Grids',			
					'id' => 'sport_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'sport_cat_latest' );
	
	/*******************************************
		WIDGET AREA - TABOO Category
	********************************************/
	function taboo_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Taboo - Banner',			
					'id' => 'taboo_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'taboo_cat_banner' );
	
	function taboo_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Taboo - Trending',			
					'id' => 'taboo_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'taboo_cat_trending' );
	
	function taboo_cat_single() {		
		register_sidebar( array(			
					'name' => 'Taboo - Single Post',			
					'id' => 'taboo_category_single',
					));	
	}	
	add_action( 'widgets_init', 'taboo_cat_single' );
	
	function taboo_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Taboo - Latest Post Grids',			
					'id' => 'taboo_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'taboo_cat_latest' );
	
	/*******************************************
		WIDGET AREA - TRENDS Category
	********************************************/
	function trend_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Trends - Banner',			
					'id' => 'trend_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'trend_cat_banner' );
	
	function trend_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Trends - Trending',			
					'id' => 'trend_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'trend_cat_trending' );
	
	function trend_cat_single() {		
		register_sidebar( array(			
					'name' => 'Trends - Single Post',			
					'id' => 'trend_category_single',
					));	
	}	
	add_action( 'widgets_init', 'trend_cat_single' );
	
	function trend_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Trends - Latest Post Grids',			
					'id' => 'trend_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'trend_cat_latest' );
	
	
	/*******************************************
		WIDGET AREA - GOSSIP Category
	********************************************/
	function gossip_cat_banner() {		
		register_sidebar( array(			
					'name' => 'Gossip - Banner',			
					'id' => 'gossip_category_banner',
					));	
	}	
	add_action( 'widgets_init', 'gossip_cat_banner' );
	
	function gossip_cat_trending() {		
		register_sidebar( array(			
					'name' => 'Gossip - Trending',			
					'id' => 'gossip_category_trending',
					));	
	}	
	add_action( 'widgets_init', 'gossip_cat_trending' );
	
	function gossip_cat_single() {		
		register_sidebar( array(			
					'name' => 'Gossip - Single Post',			
					'id' => 'gossip_category_single',
					));	
	}	
	add_action( 'widgets_init', 'gossip_cat_single' );
	
	function gossip_cat_latest() {		
		register_sidebar( array(			
					'name' => 'Gossip - Latest Post Grids',			
					'id' => 'gossip_category_latest',
					));	
	}	
	add_action( 'widgets_init', 'gossip_cat_latest' );
	
	
	/*******************************************
		WIDGET AREA - SINGLE POST
	********************************************/
	
	function lym_post_sidebar() {		
		register_sidebar( array(			
					'name' => 'Single Post - Sidebar',			
					'id' => 'single-post-sidebar',
					));	
	}	
	add_action( 'widgets_init', 'lym_post_sidebar' );
	
	function lym_post_relatedPost() {		
		register_sidebar( array(			
					'name' => 'Single Post - Below Posts',			
					'id' => 'single-related-post',
					));	
	}	
	add_action( 'widgets_init', 'lym_post_relatedPost' );	

	function lym_post_page() {		
		register_sidebar( array(			
					'name' => 'Single Post - Above Footer',			
					'id' => 'single-post-page',
					));	
	}	
	add_action( 'widgets_init', 'lym_post_page' );
	
	function lym_video_pageWiget() {		
		register_sidebar( array(			
					'name' => 'Video Page',			
					'id' => 'video-page-widget',
					));	
	}	
	add_action( 'widgets_init', 'lym_video_pageWiget' );
	
		function lym_job_adsWiget() {		
		register_sidebar( array(			
					'name' => 'Job Ads',			
					'id' => 'job-ads-widget',
					));	
	}	
	add_action( 'widgets_init', 'lym_job_adsWiget' );
	
	/*******************************************
		WIDGET AREA - PAGE SIDEBAR
	********************************************/
	function lym_pagetem_sidebar() {		
		register_sidebar( array(			
					'name' => 'Page - Sidebar',			
					'id' => 'page_sidebar',
					));	
	}	
	add_action( 'widgets_init', 'lym_pagetem_sidebar' );
	
	/*******************************************
		WIDGET AREA - COMPETITIONS SIDEBAR
	********************************************/
	function lym_competitions_sidebar() {		
		register_sidebar( array(			
					'name' => 'Competitions - Sidebar',			
					'id' => 'competitions_sidebar',
					));	
	}	
	add_action( 'widgets_init', 'lym_competitions_sidebar' );	
	/********************************************
		WIDGET - WHATS NEW
	*********************************************/
	class lym_whatsNew_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_whatsNew_section', // Base ID
				__('(Desiblitz) What New' ), // Name
				array( 'description' => __( 'Display the what new slider.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$post_category = $instance['post_category'];
		?>
			<?php 
				if($post_category == 'all'){
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 25,
					);	
				} else {
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 25,
						'tax_query' => array(
							array(
								'taxonomy' => POST_CATEGORY,
								'field'    => 'slug',
								'terms'    => $post_category,
							),
						),
					);
				} //END CHECK CATEGORY SLUG
			?>
			<?php 
				$whatsnew_query = new WP_Query( $args );
			?>
	    	<section id="home-banner" class="row flex">
	    		<h2 class="center-title orange">
		    		<span><?php esc_html_e($widget_title); ?></span>
		    		<i></i>
	    		</h2>	    		
	    		<?php if ( $whatsnew_query->have_posts() ) { ?>
	    			<?php $whatsnew_count = 1; ?>
	    			<?php while ( $whatsnew_query->have_posts() ) : $whatsnew_query->the_post(); ?>
	    				<?php 
							$terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY ); 
							foreach($terms as $term){
								//print_a($term);
								if($term->parent == 0){
									$catID 	 = $term->term_id;
									$catName = $term->name;
									$catSlug = $term->slug;
								}
							}
						?>
	    				<?php if($whatsnew_count == 1) { ?>
			    		<div id="banner-rotator" class="show-only-desktop ca-section">			    		
			    			<!-- BANNER -->
							<div class="ca-container">
								<div class="ca-wrapper">
									<!-- BANNER ITEM 1 -->
									<div class="ca-item ca-item-1">						
										<div class="grid-one item flex ca-item-main">
											<div class="row">
												
												<article class="fadeIn-In big flex <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('section-large-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php echo limit_words((get_the_title()),20,''); ?></a></h3>
														<?php the_excerpt(); ?>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 2) { ?>
												<article class="medium fadeIn-In flex <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 3) { ?>
											<div class="row">
												<article class="wide flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 4) { ?>
												<div class="inner-row">
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
													<?php } elseif($whatsnew_count == 5) { ?>
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->								
									<?php } elseif($whatsnew_count == 6) { ?>
									<!-- BANNER ITEM 2 -->
									<div class="ca-item ca-item-2">						
										<div class="grid-one item flex ca-item-main">
											<div class="row">
												<article class="wide flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 7) { ?>
												<div class="inner-row">
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
													<?php } elseif($whatsnew_count == 8) { ?>
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 9) { ?>
											<div class="row">
												<article class="big flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('large-section-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h3>
														<?php the_excerpt(); ?>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 10) { ?>
												<article class="medium flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
											</div> <!-- //row -->
										</div> <!-- //grid-item -->								
									</div><!-- /. BANNER ITEM 2 -->
									<?php } elseif($whatsnew_count == 11) { ?>
									<!-- BANNER ITEM 3 -->
									<div class="ca-item ca-item-3">
										<div class="grid-one item flex ca-item-main">
											<div class="row">
												<article class="wide flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>										
												</article>
												<?php } elseif($whatsnew_count == 12) { ?>
												<div class="inner-row">
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
													<?php } elseif($whatsnew_count == 13) { ?>
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 14) { ?>
											<div class="row">
												<article class="medium flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 15) { ?>
												<article class="big flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('large-section-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h3>
														<?php the_excerpt(); ?>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
											</div> <!-- //row -->
										</div> <!-- //grid-item -->
									</div><!-- /.BANNER ITEM 3 --><?php } elseif($whatsnew_count == 16) { ?>
                           				 <!-- BANNER ITEM 4 -->
									<div class="ca-item ca-item-4">
										<div class="grid-four item">
											<div class="verti-column">
												<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content transparent-bg">
														<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 17) { ?>
												<article class="medium flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
											</div> <!-- //verti-column -->
											<?php } elseif($whatsnew_count == 18) { ?>
											<div class="right-column-flex">
												<div class="row">
													<article class="big flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('large-section-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h3>
															<?php the_excerpt(); ?>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div> <!-- //row -->
												<?php } elseif($whatsnew_count == 19) { ?>
												<div class="row">
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
													<?php } elseif($whatsnew_count == 20) { ?>
													<article class="wide flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div> <!-- //row -->
											</div> <!-- //right-column-flex -->
										</div> <!-- //grid-item -->
									</div><!-- /.BANNER ITEM 4 -->
									
									<?php } elseif($whatsnew_count == 21) { ?>
									<!-- BANNER ITEM 5 -->
									<div class="ca-item ca-item-5">
										<div class="grid-four item flex ca-item-main">
											<div class="verti-column">
												<article class="medium flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content">
														<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
														<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
													</div>
												</article>
												<?php } elseif($whatsnew_count == 22) { ?>
												<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<div class="content transparent-bg">
														<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
													</div>
												</article>
											</div> <!-- //verti-column -->
											<?php } elseif($whatsnew_count == 23) { ?>
											<div class="right-column-flex">
												<div class="row">
													<article class="big flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('large-section-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h3>
															<?php the_excerpt(); ?>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div> <!-- //row -->
												<?php } elseif($whatsnew_count == 24) { ?>
												<div class="row">
													<article class="thumb flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content transparent-bg">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h5>
														</div>
													</article>
													<?php } elseif($whatsnew_count == 25) { ?>
													<article class="wide flex fadeIn-In <?php echo $catSlug; ?>-bg-color">
														<figure class="full-width">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="content">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo limit_words((get_the_title()),20,''); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div> <!-- //row -->
											</div> <!-- //right-column-flex -->								
										</div> <!-- //grid-item -->                       	    			
									</div><!-- /.BANNER ITEM 5 -->																		
								</div><!---//ca-wrapper-->
							</div><!---//.ca-container-->				
			    		</div><!--/banner-rotator-->
			    		<?php }  ?>
			    		<?php $whatsnew_count++; ?>
	    			<?php endwhile; ?>
	    		<?php } ?>
	    		
				<?php if ( $whatsnew_query->have_posts() ) { ?>
					<?php $whatsnew_count = 1; ?>
					<?php while ( $whatsnew_query->have_posts() ) : $whatsnew_query->the_post(); ?>
						<?php 
							$terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY ); 
							foreach($terms as $term){
								//print_a($term);
								if($term->parent == 0){
									$catID = $term->term_id;
									$catName = $term->name;
									$catSlug = $term->slug;
								}
							}
						?>
						<?php if($whatsnew_count == 1) { ?>
						<div id="tablet-banner" class="show-only-tablet ca-section">    		
			    			<!-- BANNER -->
							<div class="ca-container">
								<div class="ca-nav"><span class="ca-nav-prev">Previous</span><span class="ca-nav-next">Next</span></div>
								<div class="ca-wrapper">
									<!-- BANNER ITEM 1 -->						
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>												
														</div>
													</article>
													<?php } elseif($whatsnew_count == 2) { ?>
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
														</div>
													</article>										
												</div>		
												<?php } elseif($whatsnew_count == 3) { ?>							
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 4) { ?>
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
												<?php } elseif($whatsnew_count == 5) { ?>
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>									
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->	
									
									<?php } elseif($whatsnew_count == 6) { ?>
									<div class="ca-item ca-item-2">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>												
														</div>
													</article>
													<?php } elseif($whatsnew_count == 7) { ?>
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
														</div>
													</article>										
												</div>	
												<?php } elseif($whatsnew_count == 8) { ?>								
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 9) { ?>
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
												<?php } elseif($whatsnew_count == 10) { ?>
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>									
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->
									<?php } elseif($whatsnew_count == 11) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
												<?php } elseif($whatsnew_count == 12) { ?>
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>									
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 13) { ?>
											<div class="row">
												<div class="flex-box">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>												
														</div>
													</article>
													<?php } elseif($whatsnew_count == 14) { ?>
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
														</div>
													</article>										
												</div>			
												<?php } elseif($whatsnew_count == 15) { ?>						
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->
									
									<?php } elseif($whatsnew_count == 16) { ?>
									<div class="ca-item ca-item-4">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
												<?php } elseif($whatsnew_count == 17) { ?>
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>									
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 18) { ?>
											<div class="row">
												<div class="flex-box">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>												
														</div>
													</article>
													<?php } elseif($whatsnew_count == 19) { ?>
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
														</div>
													</article>										
												</div>	
												<?php } elseif($whatsnew_count == 20) { ?>								
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->
									<?php } elseif($whatsnew_count == 21) { ?>
									<div class="ca-item ca-item-5">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
												<?php } elseif($whatsnew_count == 22) { ?>
												<div class="flex-box">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>												
														</div>
													</article>
													<?php } elseif($whatsnew_count == 23) { ?>
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color transparent-bg">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
														</div>
													</article>										
												</div>							
											</div> <!-- //row -->
											<?php } elseif($whatsnew_count == 24) { ?>
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>			
												<?php } elseif($whatsnew_count == 25) { ?>					
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div> <!-- //row -->
										</div>
									</div><!-- //BANNER ITEM 1 -->
									
									
								</div><!---//ca-wrapper-->
							</div><!---//.ca-container-->
						</div><!--/banner-rotator-->
						<?php } ?>
						<?php $whatsnew_count++; ?>
					<?php endwhile; ?>					
				<?php } ?>		
						
				<?php if ( $whatsnew_query->have_posts() ) { ?>
					<?php $whatsnew_count = 1; ?>
					<?php while ( $whatsnew_query->have_posts() ) : $whatsnew_query->the_post(); ?>
						<?php 
							$terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY ); 
							foreach($terms as $term){
								//print_a($term);
								if($term->parent == 0){
									$catID = $term->term_id;
									$catName = $term->name;
									$catSlug = $term->slug;
								}
							}
						?>
						<?php if($whatsnew_count == 1) { ?>
						
						<div id="mobile-banner" class="show-only-mobile ca-section">
						
							<!-- BANNER -->
							<div class="ca-container">
								<div class="ca-nav"><span class="ca-nav-prev">Previous</span><span class="ca-nav-next">Next</span></div>
								<div class="ca-wrapper">
									<!-- BANNER ITEM 1 -->	
									
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box full-width-post">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->	
									<?php } elseif($whatsnew_count == 2) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->	
									<?php } elseif($whatsnew_count == 3) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>											
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 4) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 5) { ?>									
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 6) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 7) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>	
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>											
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 8) { ?>								
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box full-width-post">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>	
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>											
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 9) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 10) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 11) { ?>									
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 12) { ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 13){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 14){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 15){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box full-width-post">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 16){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color ">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 17){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 18){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 19){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 20){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box full-width-post">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 21){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color ">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 22){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 23){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box full-width-post">
													<article class="position-article fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 24){ ?>
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->										
									<?php } elseif($whatsnew_count == 25){ ?>									
									<div class="ca-item ca-item-1">						
										<div class="grid-one item ca-item-main">
											<div class="row">
												<div class="flex-box">
													<article class="article-box fadeIn-In">
														<figure class="figure-box">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php the_post_thumbnail('trending-thumb'); ?>
																<?php $word_count = bavotasan_word_count();?>
																<?php if($word_count < 350){?>
																	<span class="quick-read-icon"></span>
																<?php } ?>
															</a>
														</figure>
														<div class="article-content <?php echo $catSlug; ?>-bg-color">
															<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
															<a class="category" href="<?php echo get_term_link( $catSlug, POST_CATEGORY ); ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>												
														</div>
													</article>
												</div>
											</div><!--//ROW ITEM 1 -->	
										</div><!--//grid-one 1 -->	
									</div><!--//ca-item 1 -->
								</div><!--//ca-wrapper-->
							</div><!--//ca-container-->
						</div><!--//mobile-banner-->						
						<?php } ?>
						<?php $whatsnew_count++; ?>
					<?php endwhile; ?>
				<?php } ?>
				
			</section> <!-- //banner-rotator section-->				
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
				$post_category = $instance['post_category'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$post_category = __( 'Post Category' );
			}
			?>
			
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'post_category' ); ?>">
							<?php _e( 'Select Category:' ); ?>
					</label> 
					<?php $terms = get_terms( POST_CATEGORY ); ?>
					<select 
						id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
						name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
					>
						<option value="all" <?php selected('all', $post_category, true); ?> >All Categories</option>
						<?php
							foreach($terms as $term){
								if($term->parent == 0){ ?>
									<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
							<?php }
							}
						?>
					</select>
				</p>
			
			
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_fullWidth_Ad Widget
	function lym_whatsNew_widget() {
		register_widget( 'lym_whatsNew_section' );
	}
	add_action( 'widgets_init', 'lym_whatsNew_widget' );
	/*************************************************/
		// WIDGET - WHATs NEW //
	/*************************************************/

	
	/********************************************
		WIDGET - TWO POSTS
	*********************************************/
	class lym_twoPosts_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_twoPosts_section', // Base ID
				__('(Desiblitz) Two Posts Section' ), // Name
				array( 'description' => __( 'Display the two posts section.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$post_category = $instance['post_category'];
			$more_text = $instance['more_text'];
		?>
			<?php 
				$args = array(
					'post_type' => 'post',
					'tax_query' => array(
						array(
							'taxonomy' => POST_CATEGORY,
							'field'    => 'slug',
							'terms'    => $post_category,
						),
					),
					'posts_per_page' => 2,
				);
				$twoPost_query = new WP_Query( $args );
			?>
			<?php if ( $twoPost_query->have_posts() ) { ?>

    			<h2 class="section-title <?php echo $post_category; ?>-bg">
    				<span><?php esc_html_e($widget_title); ?></span><i></i>
    			</h2>
    			
    			<section class="flex only-border-bottom <?php echo $post_category; ?>-section">
    				
    				<?php while ( $twoPost_query->have_posts() ) : $twoPost_query->the_post(); ?>
	    				<div class="col-4">
			    			<article class="trend-overlay <?php echo $post_category; ?> flex">
			    				<div class="content">
				    				<figure>
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
											<?php if($word_count < 350){?>
												<span class="quick-read-icon"></span>
											<?php } ?>
				    					</a>
				    				</figure>									
				    				<h3>
					    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				    				</h3>
			    				</div>
			    			</article>
			    		</div> <!-- //end article col-4 -->
		    		<?php endwhile; ?>
		    		<?php wp_reset_query(); ?>
		    		
		    		<div class="col-2 more-link-container <?php echo $post_category; ?>">
		    			<a class="more-badge" href="<?php echo get_term_link( $post_category, POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
		    		</div>
		    		
    			</section>
			<?php } ?><!-- //END GOSSIP -->
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
				$post_category = $instance['post_category'];
				$more_text = $instance['more_text'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$post_category = __( 'Post Category' );
				$more_text = __( 'More Text' );
			}
			?>
			
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'post_category' ); ?>">
							<?php _e( 'Select Category:' ); ?>
					</label> 
					<?php $terms = get_terms( POST_CATEGORY ); ?>
					<select 
						id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
						name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
					>
						<?php
							foreach($terms as $term){ ?>
									<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php } ?>
					</select>
				</p>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'more_text' ); ?>">
							<?php _e( 'More Text:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'more_text' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'more_text' ); ?>" 
						value="<?php echo esc_html($more_text); ?>" />
				</p>
			
		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			$instance['more_text'] = ( ! empty( $new_instance['more_text'] ) ) ? ( $new_instance['more_text'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_twoPosts_widget() {
		register_widget( 'lym_twoPosts_section' );
	}
	add_action( 'widgets_init', 'lym_twoPosts_widget' );
	/*************************************************/
		// WIDGET - Two Posts //
	/*************************************************/
	
	/********************************************
		WIDGET - CATEGORY SINGLE POST
	*********************************************/
	class lym_catSinglePost_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_catSinglePost_section', // Base ID
				__('(Desiblitz) Category Single Post' ), // Name
				array( 'description' => __( 'Display a single big post.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$post_category = $instance['post_category'];
		?>
			
			<div class="food-cat">
				<h2 class="section-title <?php echo $post_category;?>-bg"><i></i></h2>	
				<?php 
    				$args = array(
						'post_type' => 'post',
						'tax_query' => array(
							array(
								'taxonomy' => POST_CATEGORY,
								'field'    => 'slug',
								'terms'    => $post_category,
							),
						),
						'orderby'        => 'rand',
						'posts_per_page' => 1,
					);
					$random_post_query = new WP_Query( $args );
    			?>
    			<?php if ( $random_post_query->have_posts() ) { ?>
					<?php while ( $random_post_query->have_posts() ) : $random_post_query->the_post(); ?>
					<article class="featured-post <?php echo $post_category;?>-box">
	    				<div class="content">
	    					<figure class="quick-read full-width">
	    						<a href="#" title="Permalink">
	    							<?php the_post_thumbnail('section-large-thumb');?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
	    						</a>
	    						<!--<span></span>-->
	    					</figure>
	    					<h2 class="post-title bg">
		    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		    						<?php the_title();?>
		    					</a>
	    					</h2>
	    					<p><?php the_excerpt();?> </p>
	    					<?php 
								$content = get_the_content();
								if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('audio')) || (check_shortcode('soundcloud.com')) ) {
							?>
		    					<div class="go-to-share">
		    						<ul>
		    							<?php if(check_shortcode('jwplayer')) { ?>
			    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
			    						<?php } ?>
			    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
			    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
			    						<?php } ?>
			    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
			    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
			    						<?php } ?>
		    						</ul>
		    					</div>
	    					<?php } ?>
	    				</div>
					</article>		
					<?php endwhile; ?>
				<?php }?>
				<?php wp_reset_query(); ?>
			
			</div>
			
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'post_category' ]) ) {
				$post_category = $instance['post_category'];
			}
			else {
				$post_category = __( 'Post Category' );
			}
			?>
			
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'post_category' ); ?>">
							<?php _e( 'Select Category:' ); ?>
					</label> 
					<?php $terms = get_terms( POST_CATEGORY ); ?>
					<select 
						id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
						name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
					>
						<?php
							foreach($terms as $term){ ?>
									<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php } ?>
					</select>
				</p>
			
		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_catSinglePost_widget() {
		register_widget( 'lym_catSinglePost_section' );
	}
	add_action( 'widgets_init', 'lym_catSinglePost_widget' );
	/*************************************************/
		// WIDGET - CATEGORY SINGLE POST //
	/*************************************************/
	
	/********************************************
		WIDGET - LATEST VIDEOS
	*********************************************/
	class lym_latestVideo_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_latestVideo_section', // Base ID
				__('(Desiblitz) Latest Video Posts' ), // Name
				array( 'description' => __( 'Display latest videos from YouTube.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$post_category = $instance['post_category'];
			$more_text = $instance['more_text'];
		?>
		<div class="latest-video-section">
			<h2 class="section-title orange-bg">
				<span><?php esc_html_e($widget_title); ?></span><i></i>
			</h2>
			<section class="flex latest-video orange-bg">
				<div class="col-3 more-link-container"><a class="more-badge" href="<?php bloginfo('url'); ?>/video" title="Read More"><?php echo $more_text; ?></a></div>
				<!--Code for this block is in site.js  file-->
			</section> <!-- //latest-video -->	
		</div>	
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
				$post_category = $instance['post_category'];
				$more_text = $instance['more_text'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$post_category = __( 'Post Category' );
				$more_text = __( 'More Text' );
			}
			?>
			
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				<!-- <p>
					<label 
						for="<?php echo $this->get_field_id( 'post_category' ); ?>">
							<?php _e( 'Select Category:' ); ?>
					</label> 
					<?php $terms = get_terms( POST_CATEGORY ); ?>
					<select 
						id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
						name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
					>
						<?php
							foreach($terms as $term){ ?>
									<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php } ?>
					</select>
				</p> -->
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'more_text' ); ?>">
							<?php _e( 'More Text:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'more_text' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'more_text' ); ?>" 
						value="<?php echo esc_html($more_text); ?>" />
				</p>
			
		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			$instance['more_text'] = ( ! empty( $new_instance['more_text'] ) ) ? ( $new_instance['more_text'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_latestVideo_widget() {
		register_widget( 'lym_latestVideo_section' );
	}
	add_action( 'widgets_init', 'lym_latestVideo_widget' );
	/*************************************************/
		// WIDGET - Latest Videos //
	/*************************************************/
	
	
	/********************************************
		WIDGET - HOME LATEST POST (GRID ONE)
	*********************************************/
	class lym_homeLatestPost_GridOne extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_homeLatestPost_GridOne', // Base ID
				__('(Desiblitz) Latest Post Grid' ), // Name
				array( 'description' => __( 'Display this widget in homepage with - Grid One Style' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$grid_style = $instance['grid_style'];
			$widget_title = $instance['widget_title'];
			$more_text = $instance['more_text'];
			$post_category = $instance['post_category'];
		?>			
			<?php
				/**************************
					POSTS TO DISPLAY
				**************************/
				if(($grid_style == 'grid_four') ){
					$postInPage = 6;
				} else {
					$postInPage = 7;
				}
			?>
			
			<?php
				/*************************************************
					CATEGORY SPONSOR LOGO - QUERY & CONDITION
				*************************************************/
				$args = array(
					'post_type' => 'post',
					'tax_query' => array(
						array(
							'taxonomy' => POST_CATEGORY,
							'field'    => 'slug',
							'terms'    => esc_html($post_category),
						),
					),
					'posts_per_page' => $postInPage ,
				);
				$artculture_query = new WP_Query( $args );
			?>
		
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'meta_key'		=> 'advert_type',
					'meta_value'	=> 'CS',
					'posts_per_page' => -1,
				);
				$advertLogo_query = new WP_Query( $args );
				
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
				}
				
				$logoAdvertUrl = '';
				if ( $advertLogo_query->have_posts() ) {
					while ( $advertLogo_query->have_posts() ) : $advertLogo_query->the_post();
						$advertLogoImg = get_field('advert_logo');
						
						if(!empty($advertLogoImg)){ //CHECK IF THEY HAVE ADVERT LOGO
							$fromTime = strtotime(get_field('from_date_&_time'));
							$toTime = strtotime(get_field('to_date_and_time'));
							$todayDate = time();
							if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
								
								$advertTerm = get_field('advertise_category');
								if($post_category == $advertTerm->slug){ //CHECK IF THEY MATCH SELECTED CATEGORY
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
			<?php //THIS CODE IS EXECUTED IN SINGLE POST - PAGE
				$termscats = wp_get_post_terms( get_the_ID(), POST_CATEGORY, $args );
				foreach($termscats as $termcats){
					if( $termcats->parent == 0 ){
						$catName = $termcats->name;
						$catslug = $termcats->slug;
						$IDterm = $termcats->term_id;
						break;
					} elseif( $termcats->parent != 0 ){
						$childName = $termcats->name;
						$childslug = $termcats->slug;
						$childID = $termcats->term_id;
					} //ENDIF
					
				} //END FOREACH
			?>			
			<?php if ( $artculture_query->have_posts() ) { ?>				
					<section id="<?php echo esc_html_e( $post_category ); ?>" class="row <?php esc_html_e( $post_category ); ?>-section">
			    		<div id="<?php echo esc_html_e( $childTerm->slug ); ?>" class="flex">
			    			<div class="col-12">
			    				<div class="grid-logo">
						    		<h2 class="section-title text <?php echo esc_html_e( $post_category ); ?>-bg">
										<a href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>">
											<span><?php esc_html_e( $widget_title ); ?></span><i></i>
										</a>
									</h2>
									<div class="sponsored-by <?php echo esc_html_e( $post_category ); ?>">
										<?php if( !empty($logoAdvertUrl)){ ?>
					    					<a href="<?php echo $logoAdvertLink; ?>" target="_blank" title="Sponsored by">
					    						sponsored by <img src="<?php echo $logoAdvertUrl; ?>" />
					    					</a>
				    					<?php } ?>
				    					<span class="hide-section">
				    						close
				    						<i></i>
				    					</span>
				    				</div>
			    				</div> <!-- //grid-logo -->			    				
			    			</div>
			    		</div>			
						
						<?php 
							/******************************
								IF GRID = 'grid_one'
							******************************/
							if( $grid_style == 'grid_one'){
						?>
			    		<?php $artculture_count = 1; ?>
			    		<?php while ( $artculture_query->have_posts() ) : $artculture_query->the_post(); ?>
			    		<?php if($artculture_count == 1){ ?>						
				    		<section id="latest-<?php esc_html_e( $post_category ); ?>" class="gridContainer flex total-container <?php echo esc_html_e( $post_category ); ?>-bg">
				    			<!-- 1st ARTICLE -->
				    			<div class="featured-post">
				    				<div class="content">
				    					<figure class="quick-read">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    							<?php the_post_thumbnail('section-large-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
				    						</a>
				    					</figure>	
										
										<div class="share-row">
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>											
											<?php 
												$content = get_the_content();
												if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
											?>
												<div class="go-to-share">
													<ul>
														<?php if(check_shortcode('jwplayer')) { ?>
															<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
														<?php } ?>
														<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
															<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
														<?php } ?>
														<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
															<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
														<?php } ?>
													</ul>
												</div>											
											<?php } ?>	
										</div>
				    					<h2 class="post-title">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</h2>
				    					<?php the_excerpt(); ?>
				    					
				    								    					
				    				</div>
									<?php } //COUNT = 1 ?>									
									<?php if($artculture_count == 2){ ?>									
									<div class="extra-post">
										<div class="content-div background-color">
											<div class="column-1">
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
													echo display_Grid_subCategory(get_the_ID());
												}?>
											</div>										
											<div class="column-2">
												<h4 class="post-title">											
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h4>										
												<div class="share-row">	
													<?php 
														$content = get_the_content();
														if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
													?>
														<div class="go-to-share">
															<ul>
																<?php if(check_shortcode('jwplayer')) { ?>
																	<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
																<?php } ?>
																<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																	<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
																<?php } ?>
																<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
																	<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
																<?php } ?>
															</ul>
														</div>											
													<?php } ?>	
												</div>		
											</div>
										</div>
									</div>
									<?php } //COUNT = 2 ?>
									<?php if($artculture_count == 3){ ?>
				    			</div>
			    		
		
			    			
			    			<div class="mid-series">
				    				<!-- 2nd ARTICLE -->
				    				<article>
					    				<figure>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
										</figure>
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										<h4 class="post-title bg">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
										</h4>
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
					    					<div class="go-to-share white">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>										
				    				</article>
			    		<?php } //COUNT = 2?>
			    				
			    		<?php if($artculture_count == 4){ ?>
			    				<figure>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('trending-thumb'); ?>
										<?php $word_count = bavotasan_word_count();?>
										<?php if($word_count < 350){?>
											<span class="quick-read-icon"></span>
										<?php } ?>
									</a>
								</figure>
			    				<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
			    				<!-- 4rd ARTICLE -->
								<h4 class="post-title bg">
			    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_title(); ?>
			    					</a>
								</h4>
								<?php 
									$content = get_the_content();
									if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
								?>
			    					<div class="go-to-share white">
			    						<ul>
			    							<?php if(check_shortcode('jwplayer')) { ?>
				    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
				    						<?php } ?>
				    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
				    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
				    						<?php } ?>
				    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
				    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
				    						<?php } ?>
			    						</ul>
			    					</div>
		    					<?php } ?>
			    			</div>
			    		<?php } //COUNT = 4 ?>
			    		
			    		<?php if($artculture_count == 5){ ?>
			    			<div class="more-posts">
			    				<div class="content flex">
			    					<!-- 5th ARTICLE -->
				    				<div class="sec-1">
				    					<figure class="quick-read">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    						<!--<span></span>-->
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
				    					<h3 class="post-title pt-sans-narrow">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
					    					</a>
				    					</h3>										
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    					</h4>
				    					<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
					    					<div class="go-to-share less-spacing">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
				    					
				    				</div>
						<?php }//COUNT = 5 ?>
				    				
				    	<?php if($artculture_count == 6){ ?>
				    				<!-- 6th ARTICLE -->
				    				<div class="sec-1">
				    					<figure class="quick-read">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    						<!--<span></span>-->
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										<h3 class="post-title pt-sans-narrow">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
					    					</a>
				    					</h3>										
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    					</h4>										
				    				</div>
			    				</div> <!-- //content -->
			    		<?php } //COUNT = 6 ?>
			    		<?php if($artculture_count == 7){ ?>
							<div class="food_count_bottom-container">
			    				<div class="content bottom-content flex">
			    					<!-- 7th ARTICLE -->
			    					<div class="boxed-content">
			    						<div class="flex">
			    							<div class="post-fig">
			    								<figure>
			    									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
			    								</figure>
			    								<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
													echo display_Grid_subCategory(get_the_ID());
												}?>
			    								<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
												?>
							    					<div class="go-to-share less-spacing">
							    						<ul>
							    							<?php if(check_shortcode('jwplayer')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
								    						<?php } ?>
								    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
								    						<?php } ?>
								    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
								    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
								    						<?php } ?>
							    						</ul>
							    					</div>
						    					<?php } ?>
						    					
			    							</div>
			    							<div class="post-content">
			    								
			    								<h4 class="post-title bg">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>	
												</h4>
			    							</div>
			    						</div>
			    					</div>
			    					
			    					<div class="more-link-container">
							    		<a class="more-badge" href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
			    					</div>			    					
			    				</div>
								</div>
			    			</div> <!-- //more-posts --> 
			    		</section>
			    		<?php } //COUNT = 7 ?>
			    		
			    		<?php $artculture_count++; ?>
			    		<?php endwhile; ?>
			    		<?php wp_reset_query(); ?>
			    		
			    	</section> 
		    	
		    	<?php 
		    		/******************************
						IF GRID = 'grid_two'
					******************************/
		    		} elseif( $grid_style == 'grid_two'){ 
		    	?> 		
		    			
							<?php $britasian_count = 1; ?>
							<?php while ( $artculture_query->have_posts() ) : $artculture_query->the_post(); ?>
					
							<?php if($britasian_count == 1) { ?>
								<div class="gridContainer latest-post-one flex <?php echo esc_html_e( $post_category ); ?>-bg">
									<div class="coloured-box grid-two-section-coloured">
					    				<article>
						    				<figure class="full-width">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail('trending-thumb'); ?>
													<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
												</a>
											</figure>
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
											<h4 class="post-title bg">
						    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    						<?php the_title(); ?>
						    					</a>
											</h4>
											
											<?php 
												$content = get_the_content();
												if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
											?>
						    					<div class="go-to-share white">
						    						<ul>
						    							<?php if(check_shortcode('jwplayer')) { ?>
							    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
							    						<?php } ?>
							    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
							    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
							    						<?php } ?>
							    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
							    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
							    						<?php } ?>
						    						</ul>
						    					</div>
					    					<?php } ?>
											
					    				</article>
					    				<?php } //END COUNT = 1 ?>
					    				
					    				<?php if($britasian_count == 2) { ?>
					    				<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										<h4 class="post-title bg">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
										</h4>
										
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
					    					<div class="go-to-share white">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
										
									</div> <!-- //coloured-box -->
									<?php } //COUNT = 2 ?>
									
									<?php if($britasian_count == 3) { ?>
									<div class="thumb-post grid-two-section-thumb">
										<div class="content">
											<div>
												<div class="post-content">
													<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
													<h4 class="post-title">
								    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								    						<?php the_title(); ?>
								    					</a>
													</h4>
												</div>
												<div class="post-fig"></div>
											</div> <!-- //flex -->
											<?php } //COUNT = 3 ?>
											
											<?php if($britasian_count == 4) { ?>
											<div class="flex">
												<div class="post-fig">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													
													<?php 
														$content = get_the_content();
														if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
													?>
								    					<div class="go-to-share less-spacing">
								    						<ul>
								    							<?php if(check_shortcode('jwplayer')) { ?>
									    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
									    						<?php } ?>
									    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
									    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
									    						<?php } ?>
									    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
									    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
									    						<?php } ?>
								    						</ul>
								    					</div>
							    					<?php } ?>
							    					
												</div>
												<div class="post-content">
													<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
													<h4 class="post-title">
								    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								    						<?php the_title(); ?>
								    					</a>
													</h4>
												</div>
											</div> <!-- //flex -->
											<?php } //COUNT = 4 ?>
											
											<?php if($britasian_count == 5) { ?>
											<div class="flex">
												<div class="post-fig">
													<figure class="full-width">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<?php the_post_thumbnail('trending-thumb'); ?>
															<?php $word_count = bavotasan_word_count();?>
															<?php if($word_count < 350){?>
																<span class="quick-read-icon"></span>
															<?php } ?>
														</a>
													</figure>
													<?php 
														$content = get_the_content();
														if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
													?>
								    					<div class="go-to-share less-spacing">
								    						<ul>
								    							<?php if(check_shortcode('jwplayer')) { ?>
									    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
									    						<?php } ?>
									    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
									    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
									    						<?php } ?>
									    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
									    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
									    						<?php } ?>
								    						</ul>
								    					</div>
							    					<?php } ?>
													
												</div>
												<div class="post-content">
													<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
													<h4 class="post-title">
								    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								    						<?php the_title(); ?>
								    					</a>
													</h4>
												</div>
											</div> <!-- //flex -->
										</div>
									</div> <!-- //thumb-post -->
									<?php } //COUNT = 5 ?>
									
									<?php if($britasian_count == 6) { ?>
									<div class="wide-post">
										<article class="flex">
											<div class="post-fig">
												<figure class="full-width">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('section-medium-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
												</figure>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
												?>
							    					<div class="go-to-share less-spacing">
							    						<ul>
							    							<?php if(check_shortcode('jwplayer')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
								    						<?php } ?>
								    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
								    						<?php } ?>
								    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
								    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
								    						<?php } ?>
							    						</ul>
							    					</div>
						    					<?php } ?>
						    					
											</div>
											<div class="post-content">
												<h4 class="post-title">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>
												</h4>
												<?php the_excerpt(); ?>
											</div>
										</article>
										<?php } //COUNT = 6 ?>
										
										<?php if($britasian_count == 7) { ?>
										<div class="flex second-article">
											<div class="grid_two-lastpost">
						    					<figure class="full-width">
						    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>	
													<h4 class="post-title">
								    					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							    					</h4>													
						    					</figure>
						    					<div class="content">
						    						<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
														echo display_Grid_subCategory(get_the_ID());
												}?>
													<h3 class="post-title pt-sans-narrow">
								    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
								    					</a>
							    					</h3>
							    									    					
						    					</div>
					    					</div>
					    					<div class="more-link-container">
									    		<a class="more-badge" href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
					    					</div>
					    				</div>
					    				
									</div> <!-- //wide-post -->
								</div>
							<?php } //COUNT = 7 ?>
							
						<?php $britasian_count++; ?>
						<?php endwhile; ?>
						
					</section> <!-- // #brit-asian-section -->
					
					<?php 
			    		/******************************
							IF GRID = 'grid_three'
						******************************/
			    		} elseif( $grid_style == 'grid_three'){ 
			    	?>			    	
			    		<?php $cinema_count = 1; ?>
						<?php while ( $artculture_query->have_posts() ) : $artculture_query->the_post(); ?>
							<?php if($cinema_count == 1) { ?>
							<div class="gridContainer grid_three_container flex latest-post-two <?php echo esc_html_e( $post_category ); ?>-bg">
								<div class="one-half grid_three_col">
									<div class="wrap">
										<div class="flex">
											<article>
						    					<figure class="full-width">
						    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
						    					</figure>
						    					<div class="share-row">
													<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
														echo display_Grid_subCategory(get_the_ID());
													}?>
													
													<?php 
														$content = get_the_content();
														if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
													?>
														<div class="go-to-share">
															<ul>
																<?php if(check_shortcode('jwplayer')) { ?>
																	<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
																<?php } ?>
																<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																	<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
																<?php } ?>
																<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
																	<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
																<?php } ?>
															</ul>
														</div>											
													<?php } ?>	
												</div>
						    					<h2 class="post-title">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>
						    					</h2>
						    					<?php the_excerpt(); ?>					    					
											</article>
											<?php }//COUNT = 1 ?>
											
											<?php if($cinema_count == 2) { ?>
											<article>
												<figure class="full-width">
						    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
						    					</figure>
												<div class="share-row">
													<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
														echo display_Grid_subCategory(get_the_ID());
													}?>
													
													<?php 
														$content = get_the_content();
														if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
													?>
														<div class="go-to-share">
															<ul>
																<?php if(check_shortcode('jwplayer')) { ?>
																	<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
																<?php } ?>
																<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																	<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
																<?php } ?>
																<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
																	<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
																<?php } ?>
															</ul>
														</div>											
													<?php } ?>	
												</div>
						    					<h2 class="post-title">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>
						    					</h2>
						    					<?php the_excerpt(); ?>					
											</article>
										</div>
										<?php } //COUNT = 2 ?>										
										<?php if($cinema_count == 3) { ?>
										
										<section class="flex">
											<article>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
						    					<h2 class="post-title">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>
						    					</h2>
											</article>
											
											<?php }//END COUNT = 3 ?>
											
											<?php if($cinema_count == 4) { ?>
											<article>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
						    					<h2 class="post-title">
							    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							    						<?php the_title(); ?>
							    					</a>
						    					</h2>
											</article>
										</section>
									</div> <!-- //wrap -->
								</div>
								<?php }//END COUNT = 4 ?>
								
								<?php if($cinema_count == 5) { ?>
								<div class="one-half grid_three_last_col">
								
									<div class="flex box-bg">
										<figure class="full-width">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										</figure>
										<h2 class="post-title pt-sans-narrow bg">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
					    					</a>
				    					</h2>
				    					<span>
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</span>
									</div> <!-- //box-bg -->
									<?php } //END COUNT = 5 ?>									
									<?php if($cinema_count == 6) { ?>
									<div class="bottom-articles flex">
										<article>
					    					<figure class="full-width">
					    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail('trending-thumb'); ?>
													<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
												</a>
					    					</figure>
					    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
					    					<h4 class="post-title">
						    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    						<?php the_title(); ?>
						    					</a>
					    					</h4>
					    					<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
												?>
							    					<div class="go-to-share less-spacing">
							    						<ul>
							    							<?php if(check_shortcode('jwplayer')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
								    						<?php } ?>
								    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
								    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
								    						<?php } ?>
								    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
								    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
								    						<?php } ?>
							    						</ul>
							    					</div>
						    					<?php } ?>
										</article>
										<?php } //COUNT = 6 ?>
										
										<?php if($cinema_count == 7) { ?>
										<article>
					    					<figure class="full-width">
					    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail('trending-thumb'); ?>
													<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
												</a>
					    					</figure>
					    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
					    					<h4 class="post-title">
						    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    						<?php the_title(); ?>
						    					</a>
					    					</h4>
					    					<?php 
												$content = get_the_content();
												if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
											?>
						    					<div class="go-to-share less-spacing">
						    						<ul>
						    							<?php if(check_shortcode('jwplayer')) { ?>
							    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
							    						<?php } ?>
							    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
							    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
							    						<?php } ?>
							    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
							    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
							    						<?php } ?>
						    						</ul>
						    					</div>
					    					<?php } ?>
										</article>
										
										<div class="more-link-container">
								    		<a class="more-badge" href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
				    					</div>
				    					
									</div> <!-- //flex -->
									
								</div>
							</div>
							<?php } //COUNT = 7 ?>
						<?php $cinema_count++; ?>
						<?php endwhile; ?>
						
					</section> <!-- //latest-cinema -->
					
				<?php 
		    		/******************************
						IF GRID = 'grid_four'
					******************************/
		    		} elseif( $grid_style == 'grid_four'){ 
		    	?>		    	
		    		<?php $fashion_count = 1; ?>
					<?php while ( $artculture_query->have_posts() ) : $artculture_query->the_post(); ?>					
						<?php if($fashion_count == 1){ ?>
						<div class="gridContainer flex latest-post-three <?php echo esc_html_e( $post_category ); ?>-bg">
							<div class="first-post">
								<div class="box-bg">
									<article>
										<h5 class="post-title bg">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
										</h5>
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
									</article>
									<article>
										<h4 class="post-title bg pt-sans-narrow">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
					    					</a>
										</h4>
										
									</article>
								</div>
								<?php } //COUNT = 1 ?>
								
								<?php if($fashion_count == 2){ ?>
								<article>
									<figure class="full-width quick-read">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-medium-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>
			    					<div class="share-row">		
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>	
			    					<h4 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					
								</article>
							</div>
							<?php } //COUNT = 2 ?>
							
							<?php if($fashion_count == 3){ ?>
							<article class="featured-post">
			    				<div class="content">
			    					<figure class="quick-read full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-large-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>									
			    					<div class="share-row">	
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>	
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>	
			    					<h2 class="post-title bg">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h2>
			    					<?php the_excerpt(); ?>			    					
			    				</div>
							</article>
							<?php } //COUNT = 3 ?>
							
							<?php if($fashion_count == 4){ ?>
							<div class="third-post">
								<div class="box-bg">
									<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
			    					<h4 class="post-title bg">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
									?>
				    					<div class="go-to-share white">
				    						<ul>
				    							<?php if(check_shortcode('jwplayer')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
					    						<?php } ?>
					    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
					    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
					    						<?php } ?>
				    						</ul>
				    					</div>
			    					<?php } ?>
								</div> <!-- //box-bg -->
								<?php } //END COUNT = 4 ?>
								
								<?php if($fashion_count == 5){ ?>
								<article class="only_title">
									<figure class="full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('trending-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
										</a>
			    					</figure>
			    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
			    					<h4 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h4>
			    					<?php 
										$content = get_the_content();
										if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
									?>
				    					<div class="go-to-share less-spacing">
				    						<ul>
				    							<?php if(check_shortcode('jwplayer')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
					    						<?php } ?>
					    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
					    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
					    						<?php } ?>
					    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
					    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
					    						<?php } ?>
				    						</ul>
				    					</div>
			    					<?php } ?>
								</article>
							</div>
							<?php } //COUNT = 5 ?>
							
							<?php if($fashion_count == 6){ ?>
							<div class="more-posts">
									<article>
										<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</h4>
				    					<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
					    					<div class="go-to-share less-spacing">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
									</article>
									<div class="more-link-container">
							    		<a class="more-badge" href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
			    					</div>			
							</div>
						</div> <!-- //.latest-post-three -->
						<?php } //COUNT = 6 ?>
					<?php $fashion_count++; ?>
					<?php endwhile; ?>
				
				</section> <!-- //#latest-fashion -->
				
				<?php 
		    		/******************************
						IF GRID = 'grid_five'
					******************************/
		    		} elseif( $grid_style == 'grid_five'){ 
		    	?>
		    		<?php $food_count = 1; ?>
					<?php while ( $artculture_query->have_posts() ) : $artculture_query->the_post(); ?>
						<?php if( $food_count == 1) { ?>						
						<div class="gridContainer latest-post-four flex <?php echo esc_html_e( $post_category ); ?>-bg">
							<article class="featured-post">
			    				<div class="content">
			    					<figure class="quick-read full-width">
			    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('section-large-thumb'); ?>
											<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
										</a>
			    						<!--<span></span>-->
			    					</figure>
			    					<div class="share-row">
										<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										
										<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
											<div class="go-to-share">
												<ul>
													<?php if(check_shortcode('jwplayer')) { ?>
														<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
													<?php } ?>
													<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
														<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
													<?php } ?>
													<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
														<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
													<?php } ?>
												</ul>
											</div>											
										<?php } ?>	
									</div>
			    					<h2 class="post-title">
				    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				    						<?php the_title(); ?>
				    					</a>
			    					</h2>
			    					<?php the_excerpt(); ?>			    					
			    				</div>
								<?php } //COUNT = 1 ?>
								<?php if($food_count == 2){ ?>
								<div class="extra-post">
									<div class="content-div">
										<div class="column-1">
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
										</div>										
										<div class="column-2">
											<h4 class="post-title">											
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_title(); ?>
												</a>
											</h4>	
											<div class="share-row">												
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
												?>
													<div class="go-to-share">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>											
												<?php } ?>	
											</div>
										</div>
									</div>
								</div>
							<?php } //COUNT = 2 ?>
							<?php if($food_count == 3){ ?>
							</article> <!-- // .featured-post -->							
							<div class="other-content">								
								<div class="top-row">
									<div class="content">
										<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
				    						<!--<span></span>-->
				    					</figure>
				    					<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
										
				    					<h4 class="post-title">
					    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					    						<?php the_title(); ?>
					    					</a>
				    					</h4>
				    					<?php 
											$content = get_the_content();
											if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
										?>
					    					<div class="go-to-share less-spacing">
					    						<ul>
					    							<?php if(check_shortcode('jwplayer')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
						    						<?php } ?>
						    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
						    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
						    						<?php } ?>
						    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
						    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
						    						<?php } ?>
					    						</ul>
					    					</div>
				    					<?php } ?>
				    				</div> <!-- //content -->
				    				<?php } //COUNT = 3 ?>
				    				
				    				<?php if( $food_count == 4) { ?>
				    				<div class="flex second-article">
				    					<figure class="full-width">
				    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('trending-thumb'); ?>
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
											</a>
											<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
											echo display_Grid_subCategory(get_the_ID());
										}?>
											<h4 class="post-title">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h4>
				    					</figure>
				    					<div class="content">
					    					<h3 class="post-title pt-sans-narrow">
						    					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						    						<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
						    					</a>
					    					</h3>					    					
				    					</div>										
				    				</div>
								</div> <!-- //.top-row -->								
								<?php } //COUNT = 4 ?>								
								<?php if( $food_count == 5) { ?>
								<div class="food_count_bottom-container">
									<div class="bottom-row flex">									
										<div class="articles flex">
											<article>
												<figure class="full-width">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
												</figure>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
												<h4 class="post-title bg">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h4>
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
												?>
													<div class="go-to-share less-spacing white">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
											</article>
											<?php } //COUNT = 5 ?>
											
											<?php if( $food_count == 6) { ?>
											<article>
												<figure class="full-width">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_post_thumbnail('trending-thumb'); ?>
														<?php $word_count = bavotasan_word_count();?>
														<?php if($word_count < 350){?>
															<span class="quick-read-icon"></span>
														<?php } ?>
													</a>
												</figure>
												<?php if(is_front_page()){//DISPLAY SUB CATEGORY in GRID
												echo display_Grid_subCategory(get_the_ID());
											}?>
												<h4 class="post-title bg">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php the_title(); ?>
													</a>
												</h4>
												<?php 
													$content = get_the_content();
													if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('audio')) ) {
												?>
													<div class="go-to-share less-spacing white">
														<ul>
															<?php if(check_shortcode('jwplayer')) { ?>
																<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
																<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
															<?php } ?>
															<?php if(check_shortcode('audio')) { ?>
																<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
											</article>
										</div>
										
										<div class="more-link-container">
											<a class="more-badge" href="<?php echo get_term_link( esc_html($post_category), POST_CATEGORY ); ?>" title="Read More"><?php echo $more_text; ?></a>
										</div>
										
									</div>
								</div>
							</div>							
						</div> <!-- //latest-post-four -->
						<?php } //COUNT = 6 ?>
					<?php $food_count++; ?>
					<?php endwhile; ?>
					
				</section> <!-- //#latest-food -->
		    		
		    	<?php } //END GRID_SIE ?>
	    	
	    	<?php }//END IF HAVE POSTS ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'grid_style' ]) ) {
				$grid_style = $instance['grid_style'];
				$widget_title = $instance['widget_title'];
				$more_text = $instance['more_text'];
				$post_category = $instance['post_category'];
			}
			else {
				$grid_style = __( 'Choose Grid Style' );
				$widget_title = __( 'Title of the Widget' );
				$more_text = __( 'More Link Text' );
				$post_category = __( 'Select Category' );
			}
			?>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'grid_style' ); ?>">
						<?php _e( 'Choose Grid Style:' ); ?>
				</label> 
				<select 
					id="<?php echo $this->get_field_id( 'grid_style' ); ?>" 
					name="<?php echo $this->get_field_name( 'grid_style' ); ?>" 
				>
					<option value="grid_one" <?php selected('grid_one', $grid_style, true); ?> >Grid One</option>
					<option value="grid_two" <?php selected('grid_two', $grid_style, true); ?> >Grid Two</option>
					<option value="grid_three" <?php selected('grid_three', $grid_style, true); ?> >Grid Three</option>
					<option value="grid_four" <?php selected('grid_four', $grid_style, true); ?> >Grid Four</option>
					<option value="grid_five" <?php selected('grid_five', $grid_style, true); ?> >Grid Five</option>
				</select>
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'more_text' ); ?>">
						<?php _e( 'More Text:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'more_text' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'more_text' ); ?>" 
					value="<?php echo esc_html($more_text); ?>" />
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'post_category' ); ?>">
						<?php _e( 'Select Category:' ); ?>
				</label> 
				<?php $terms = get_terms( POST_CATEGORY ); ?>
				<select 
					id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
					name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
				>
					<?php
						foreach($terms as $term){
							//if($term->parent == 0){ ?>
								<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php //}
						}
					?>
				</select>
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['grid_style'] = ( ! empty( $new_instance['grid_style'] ) ) ? ( $new_instance['grid_style'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['more_text'] = ( ! empty( $new_instance['more_text'] ) ) ? ( $new_instance['more_text'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_homeLatestPost_GridOne Widget
	function lym_register_homeLatestGridOne_widget() {
		register_widget( 'lym_homeLatestPost_GridOne' );
	}
	add_action( 'widgets_init', 'lym_register_homeLatestGridOne_widget' );
	/*************************************************/
		// WIDGET - HOME LATEST POST (GRID ONE) //
	/*************************************************/
	
	/********************************************
		WIDGET - EDITOR PICK
	*********************************************/
	class lym_editorPick_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_editorPick_section', // Base ID
				__('(Desiblitz) Editor Pick' ), // Name
				array( 'description' => __( 'Display one post as Editor Pick.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$article_id = $instance['article_id'];
		?>
			
			<?php 
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 1 ,
					'page_id' => $article_id
					
				);
				$editor_post = new WP_Query( $args );
			?>
			<?php if ( $editor_post->have_posts() ) { ?>
				<?php while ( $editor_post->have_posts() ) : $editor_post->the_post(); ?>
					
					<section id="editor-pick" class="container">
						<div class="flex">
							<h2><?php esc_html_e($widget_title); ?></h2>
							<!--<?php 
								//DISPLAY SUB CATEGORY in GRID
								//echo display_Grid_subCategory(get_the_ID()); 
							?>-->
							<div class="title">
								<h3>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
							</div>
							<figure class="full-width">
								<?php the_post_thumbnail('section-medium-thumb'); ?>
								<?php $word_count = bavotasan_word_count();?>
								<?php if($word_count < 350){?>
									<span class="quick-read-icon"></span>
								<?php } ?>
                                
                                <a class="homePage_grid sub_cat_link_b" href="<?=the_permalink()?>"><?php
									$word_count = bavotasan_word_count($postContent);
									if($word_count < 350){echo '<span class="quick-read-icon"></span>';}
								?></a>
								
							</figure>
							<div class="content">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</section> <!-- //#editor-pick -->
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'article_id' ]) ) {
				$article_id = $instance['article_id'];
				$widget_title = $instance['widget_title'];
			}
			else {
				$article_id = __( 'Enter the ID' );
				$widget_title = __( 'Widget Title' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'article_id' ); ?>">
						<?php _e( 'Post ID:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'article_id' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'article_id' ); ?>" 
					value="<?php echo esc_html($article_id); ?>" />
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['article_id'] = ( ! empty( $new_instance['article_id'] ) ) ? ( $new_instance['article_id'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_fullWidth_Ad Widget
	function lym_editorPick_section_widget() {
		register_widget( 'lym_editorPick_section' );
	}
	add_action( 'widgets_init', 'lym_editorPick_section_widget' );
	/*************************************************/
		// WIDGET - EDITOR PICK //
	/*************************************************/
	
	/********************************************
		WIDGET - FEATURED POST
	*********************************************/
	class lym_featuredPost_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_featuredPost_section', // Base ID
				__('(Desiblitz) Featured Post' ), // Name
				array( 'description' => __( 'Display one post as Featured Post.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$article_id = $instance['article_id'];
		?>
			
			<?php 
				$postID = trim($article_id);
				if(empty($postID)){
					$args = array(
						'post_type' 	=> 'post',
						'orderby'       => 'rand',
						'posts_per_page'=> 1 ,
					);
				} else {
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1 ,
						'page_id' => $article_id
						
					);	
				}
				
				$editor_post = new WP_Query( $args );
			?>
			<?php if ( $editor_post->have_posts() ) { ?>
				<?php while ( $editor_post->have_posts() ) : $editor_post->the_post(); ?>
					
					<h2 class="section-title <?php echo get_parent_category(get_the_ID(), 'slug'); ?>-bg">
	    				<span><?php esc_html_e($widget_title); ?></span><i></i>
	    			</h2>				
					<section class="flex only-border-bottom <?php echo get_parent_category(get_the_ID(), 'slug'); ?>-bg featured-post-widget">
						<article class="flex singlethum-post">
							<div class="post-fig">
								<figure>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('section-medium-thumb'); ?>
                                 		<?php  $word_count = bavotasan_word_count();?>
										<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span> 
										<?php  }; ?>
									</a>
								</figure>
                                <p class="category"><?php
							$cat_id = get_the_category(get_the_ID());
							$child = get_category( $cat_id[0]->term_id );
							
							$category_slug ="";
							$category_name = "";
							
							if( $child->parent == 0 )
							{
								$category_name = $child->name;
								$category_slug = $child->slug;	
							} else {
								$parent_name = get_category($child->parent);
								$category_name = $parent_name->name;	
								$category_slug = $parent_name->slug;
							}
						?>
                    <a class="homePage_grid sub_cat_link" href="https://www.desiblitz.com/content/category/<?=$category_slug?>"><?=$category_name?></a>
					</p>
								<h4 class="post-title">
									<a class="post-name" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>														    					
							</div>
							<div class="post-content">								
								<a class="cat_link" href="<?php echo get_term_link ( get_parent_category(get_the_ID(), 'id'), POST_CATEGORY ) ?>" title="<?php echo get_parent_category(get_the_ID(), 'name'); ?>"><?php echo get_parent_category(get_the_ID(), 'name'); ?></a>
							</div>
						</article>
					</section>
					
					
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'article_id' ]) ) {
				$article_id = $instance['article_id'];
				$widget_title = $instance['widget_title'];
			}
			else {
				$article_id = __( 'Enter the ID' );
				$widget_title = __( 'Widget Title' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'article_id' ); ?>">
						<?php _e( 'Post ID:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'article_id' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'article_id' ); ?>" 
					value="<?php echo esc_html($article_id); ?>" />
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['article_id'] = ( ! empty( $new_instance['article_id'] ) ) ? ( $new_instance['article_id'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_featuredPost_section_widget() {
		register_widget( 'lym_featuredPost_section' );
	}
	add_action( 'widgets_init', 'lym_featuredPost_section_widget' );
	/*************************************************/
		// WIDGET - FEATURED POST //
	/*************************************************/
	
	/********************************************
		WIDGET - QUOTED POST
	*********************************************/
	class lym_quotedPost_section extends WP_Widget {

		function __construct() {
			parent::__construct(
				'lym_quotedPost_section', // Base ID
				__('(Desiblitz) Quoted Post' ), // Name
				array( 'description' => __( 'Display one post as Quoted Post.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$article_id = $instance['article_id'];
		?>
			
			<?php 
				$postID = trim($article_id);
				if(empty($postID)){
					$args = array(
						'post_type' 	=> 'post',
						'orderby'       => 'rand',
						'posts_per_page'=> 1 ,
					);
				} else {
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1 ,
						'page_id' => $article_id
						
					);	
				}
				
				$editor_post = new WP_Query( $args );
			?>
			<?php if ( $editor_post->have_posts() ) { ?>
				<?php while ( $editor_post->have_posts() ) : $editor_post->the_post(); ?>
					
					<h2 class="section-title <?php echo get_parent_category(get_the_ID(), 'slug'); ?>-bg">
	    				<span><?php esc_html_e($widget_title); ?></span><i></i>
	    			</h2>				
					<section class="flex only-border-bottom <?php echo get_parent_category(get_the_ID(), 'slug'); ?>-bg quoted-post-widget">
						<article class="flex singlethum-post">
							<div class="post-fig">
								<figure>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('section-medium-thumb'); ?>
										<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
									</a>
                                    
								</figure>	
                                <p class="home-pull-quote"><?=get_post_meta(get_the_ID(), 'pullquote', TRUE); ?></p>
                                <div class="clear"></div>
                                <p class="category"><?php
									$cat_id = get_the_category(get_the_ID());
									$child = get_category( $cat_id[0]->term_id );
									
									$category_slug ="";
									$category_name = "";
									
									if( $child->parent == 0 )
									{
										$category_name = $child->name;
										$category_slug = $child->slug;	
									} else {
										$parent_name = get_category($child->parent);
										$category_name = $parent_name->name;	
										$category_slug = $parent_name->slug;
									}
								?>
							<a class="homePage_grid sub_cat_link" href="https://www.desiblitz.com/content/category/<?=$category_slug?>"><?=$category_name?></a>
							</p>
								<h4 class="post-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
							</div>
							<div class="post-content">
								<figcaption>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
									</a>
								</figcaption>
								<a class="cat_link" href="<?php echo get_term_link ( get_parent_category(get_the_ID(), 'id'), POST_CATEGORY ) ?>" title="<?php echo get_parent_category(get_the_ID(), 'name'); ?>"><?php echo get_parent_category(get_the_ID(), 'name'); ?></a>
							</div>
						</article>
					</section>
					
					
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'article_id' ]) ) {
				$article_id = $instance['article_id'];
				$widget_title = $instance['widget_title'];
			}
			else {
				$article_id = __( 'Enter the ID' );
				$widget_title = __( 'Widget Title' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'article_id' ); ?>">
						<?php _e( 'Post ID:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'article_id' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'article_id' ); ?>" 
					value="<?php echo esc_html($article_id); ?>" />
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['article_id'] = ( ! empty( $new_instance['article_id'] ) ) ? ( $new_instance['article_id'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_quotedPost_section_widget() {
		register_widget( 'lym_quotedPost_section' );
	}
	add_action( 'widgets_init', 'lym_quotedPost_section_widget' );
	/*************************************************/
		// WIDGET - QUOTED POST //
	/*************************************************/
	
	/********************************************
		WIDGET - FULLWIDTH AD
	*********************************************/
	class lym_fullWidth_Ad extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_fullWidth_Ad', // Base ID
				__('(Desiblitz) Fullwidth Ad' ), // Name
				array( 'description' => __( 'Display a Full Width Ad.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$select_ad = $instance['select_ad'];
		?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => 1 ,
					'page_id' => $select_ad
					
				);
				$fullwidth_ad = new WP_Query( $args );
			?>
			<?php if ( $fullwidth_ad->have_posts() ) { ?>
				<?php while ( $fullwidth_ad->have_posts() ) : $fullwidth_ad->the_post(); ?>
					<?php
						$post_featured_image = get_field('advert_image_upload', $post_ID);
				        if ($post_featured_image) { 
				        	$featured_url = wp_get_attachment_image_src( $post_featured_image, 'advert-fw' );
			        ?>
						<?php
							$fromTime = strtotime(get_field('from_date_&_time'));
							$toTime = strtotime(get_field('to_date_and_time'));
							$todayDate = time();
							if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
						?>
							<section class="row">
					    		<div class="advert-area">
					    			<a href="<?php the_field('advert_link'); ?>" title="<?php the_title(); ?>">
					    				<img src="<?php echo $featured_url[0]; ?>" alt="<?php the_title(); ?>" />
					    			</a>
					    		</div>
					    	</section>
				    	<?php } ?>
				    	
				    	
			    	<?php } ?>
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'select_ad' ]) ) {
				$select_ad = $instance['select_ad'];
			}
			else {
				$select_ad = __( 'Choose the Ad' );
			}
			?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => -1 ,
					'meta_key'		=> 'advert_type',
					'meta_value'	=> 'FW'
				);
				$fullwidth_query = new WP_Query( $args );
			?>
			<?php if ( $fullwidth_query->have_posts() ) { ?>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'select_ad' ); ?>">
							<?php _e( 'Select Advert:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'select_ad' ); ?>" 
						name="<?php echo $this->get_field_name( 'select_ad' ); ?>" 
					>
						<?php while ( $fullwidth_query->have_posts() ) : $fullwidth_query->the_post(); ?>
							<?php
							$fromTime = strtotime(get_field('from_date_&_time'));
							$toTime = strtotime(get_field('to_date_and_time'));
							$todayDate = time();
								if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
							?>
								<option value="<?php echo get_the_ID(); ?>" <?php selected(get_the_ID(), $select_ad, true); ?> ><?php the_title(); ?></option>
							<?php } ?>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</select>
				</p>
				
			<?php } ?>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['select_ad'] = ( ! empty( $new_instance['select_ad'] ) ) ? ( $new_instance['select_ad'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_fullWidth_Ad Widget
	function lym_fullWidth_Ad_widget() {
		register_widget( 'lym_fullWidth_Ad' );
	}
	add_action( 'widgets_init', 'lym_fullWidth_Ad_widget' );
	/*************************************************/
		// WIDGET - FULL WIDTH AD //
	/*************************************************/
	
	/********************************************
		WIDGET - HEADER ADVERT
	*********************************************/

	class lym_headerAd_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_headerAd_section', // Base ID
				__('(Desiblitz) Header Ad' ), // Name
				array( 'description' => __( 'Display Advert in the Header.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$select_ad = $instance['select_ad'];
		?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => 1 ,
					'page_id' => $select_ad
					
				);
				$header_ad = new WP_Query( $args );
			?>
			<?php if ( $header_ad->have_posts() ) { ?>
				<?php while ( $header_ad->have_posts() ) : $header_ad->the_post(); ?>
					<?php
						$post_featured_image = get_field('advert_image_upload', $post_ID);
				        if ($post_featured_image) { 
				        	$featured_url = wp_get_attachment_image_src( $post_featured_image, 'advert-hdr' );
			        ?>
			        	<?php
							$fromTime = strtotime(get_field('from_date_&_time'));
							$toTime = strtotime(get_field('to_date_and_time'));
							$todayDate = time();
							if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
						?>
							<div class="item advert">
					    		<a href="<?php the_field('advert_link'); ?>" title="<?php the_title(); ?>">
				    				<img src="<?php echo $featured_url[0]; ?>" alt="<?php the_title(); ?>" />
				    			</a>
					    	</div>
				    	<?php } ?>
			    	<?php } ?>
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'select_ad' ]) ) {
				$select_ad = $instance['select_ad'];
			}
			else {
				$select_ad = __( 'Choose the Ad' );
			}
			?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => -1 ,
					'meta_key'		=> 'advert_type',
					'meta_value'	=> 'HDR'
				);
				$header_query = new WP_Query( $args );
			?>
			<?php if ( $header_query->have_posts() ) { ?>
				<p>
					<?php //echo $select_ad; ?>
					<label 
						for="<?php echo $this->get_field_id( 'select_ad' ); ?>">
							<?php _e( 'Select Advert:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'select_ad' ); ?>" 
						name="<?php echo $this->get_field_name( 'select_ad' ); ?>" 
					>
						<?php while ( $header_query->have_posts() ) : $header_query->the_post(); ?>
							<?php
								$fromTime = strtotime(get_field('from_date_&_time'));
								$toTime = strtotime(get_field('to_date_and_time'));
								$todayDate = time();
								if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
							?>
								<option value="<?php echo get_the_ID(); ?>" <?php selected(get_the_ID(), $select_ad, true); ?> ><?php the_title(); ?></option>
							<?php } ?>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</select>
				</p>
				
			<?php } ?>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['select_ad'] = ( ! empty( $new_instance['select_ad'] ) ) ? ( $new_instance['select_ad'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_fullWidth_Ad Widget
	function lym_headerAd_widget() {
		register_widget( 'lym_headerAd_section' );
	}
	add_action( 'widgets_init', 'lym_headerAd_widget' );
	/*************************************************/
		// WIDGET - HEADER AD //
	/*************************************************/

	/********************************************
		WIDGET - HALF WIDTH
	*********************************************/
	class lym_hwAdvert_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_hwAdvert_section', // Base ID
				__('(Desiblitz) Half Width Advert' ), // Name
				array( 'description' => __( 'Display two Half Width Advert.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$select_ad_one = $instance['select_ad_one'];
			$select_ad_two = $instance['select_ad_two'];
		?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => 2 ,
					'post__in' => array($select_ad_one, $select_ad_two)
					
				);
				$halfwidth_ad = new WP_Query( $args );
			?>
			<?php if ( $halfwidth_ad->have_posts() ) { ?>
				
					<section class="row flex">
						<?php while ( $halfwidth_ad->have_posts() ) : $halfwidth_ad->the_post(); ?>
							<?php
								$fromTime = strtotime(get_field('from_date_&_time'));
								$toTime = strtotime(get_field('to_date_and_time'));
								$todayDate = time();
								if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
							?>
								<?php
									$post_featured_image = get_field('advert_image_upload', $post_ID);
							        if ($post_featured_image) { 
							        	$featured_url = wp_get_attachment_image_src( $post_featured_image, 'advert-hw' );
						        ?>
									<div class="one-half">
										<figure class="full-width">
											<a href="<?php the_field('advert_link'); ?>" title="<?php the_title(); ?>">
							    				<img src="<?php echo $featured_url[0]; ?>" alt="<?php the_title(); ?>" />
												<?php $word_count = bavotasan_word_count();?>
												<?php if($word_count < 350){?>
													<span class="quick-read-icon"></span>
												<?php } ?>
							    			</a>
										</figure>
									</div>
								<?php } ?>
							<?php } //CHECK IF BETWEEN DATE ?>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</section> <!-- //two halfs advertisement -->
				
					
			<?php } ?>
			
		<?php }
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'select_ad_one' ]) ) {
				$select_ad_one = $instance['select_ad_one'];
				$select_ad_two = $instance['select_ad_two'];
			}
			else {
				$select_ad_one = __( 'Choose the Ad' );
				$select_ad_two = __( 'Choose the Ad' );
			}
			?>
			
			<?php 
				$args = array(
					'post_type' => 'advertise',
					'posts_per_page' => -1 ,
					'meta_key'		=> 'advert_type',
					'meta_value'	=> 'HW'
				);
				$header_query = new WP_Query( $args );
			?>
			<?php if ( $header_query->have_posts() ) { ?>
				<p>
					<?php //echo $select_ad_one; ?>
					<label 
						for="<?php echo $this->get_field_id( 'select_ad_one' ); ?>">
							<?php _e( 'Select Advert One:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'select_ad_one' ); ?>" 
						name="<?php echo $this->get_field_name( 'select_ad_one' ); ?>" 
					>
						<?php while ( $header_query->have_posts() ) : $header_query->the_post(); ?>
							<?php
								$fromTime = strtotime(get_field('from_date_&_time'));
								$toTime = strtotime(get_field('to_date_and_time'));
								$todayDate = time();
								if($fromTime <= $todayDate && $toTime >= $todayDate) { //IS BETWEEN THE FROM AND TO DATE
							?>
								<option value="<?php echo get_the_ID(); ?>" <?php selected(get_the_ID(), $select_ad_one, true); ?> ><?php the_title(); ?></option>
							<?php } ?>
						<?php endwhile; ?>
					</select>
				</p>
				<p>
					<?php //echo $select_ad_two; ?>
					<label 
						for="<?php echo $this->get_field_id( 'select_ad_two' ); ?>">
							<?php _e( 'Select Advert Two:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'select_ad_two' ); ?>" 
						name="<?php echo $this->get_field_name( 'select_ad_two' ); ?>" 
					>
						<?php while ( $header_query->have_posts() ) : $header_query->the_post(); ?>
							<option value="<?php echo get_the_ID(); ?>" <?php selected(get_the_ID(), $select_ad_two, true); ?> ><?php the_title(); ?></option>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</select>
				</p>
				
			<?php } ?>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['select_ad_one'] = ( ! empty( $new_instance['select_ad_one'] ) ) ? ( $new_instance['select_ad_one'] ) : '';
			$instance['select_ad_two'] = ( ! empty( $new_instance['select_ad_two'] ) ) ? ( $new_instance['select_ad_two'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS
	// register lym_fullWidth_Ad Widget
	function lym_hwAdvert_widget() {
		register_widget( 'lym_hwAdvert_section' );
	}
	add_action( 'widgets_init', 'lym_hwAdvert_widget' );
	/*************************************************/
			// WIDGET - HEADER AD //
	/*************************************************/
	
	/********************************************
		WIDGET - SIDEBAR POPULAR
	*********************************************/
	class lym_sidebarPopular_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_sidebarPopular_section', // Base ID
				__('(Desiblitz) Sidebar Popular Posts' ), // Name
				array( 'description' => __( 'Displays Popular Posts in Single Posts Page.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$time_range = $instance['time_range'];
			$exclude_post = $instance['exclude_post'];
			$exclude_author = $instance['exclude_author'];
			$exclude_cat = $instance['exclude_cat'];
		?>
			<?php $terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY);// , $args ); ?>
				<?php 
					foreach($terms as $term)
					{	
						if( $term->parent == 0 ){
							$catName = $term->name;
							$catslug = $term->slug;
							$IDterm = $term->term_id;
							$currentPostID = get_the_ID();
							break;
						} elseif( $term->parent != 0 ){
							$catName = $term->name;
							$catslug = $term->slug;
							$IDterm = $term->term_id;
							$currentPostID = get_the_ID();
						} //ENDIF
					}
				?>		
			<h2 id="mostpopular" class="center-title <?php echo $catslug; ?>-bg popular">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			<div class="single-popular-list">
				<?php		
					echo $exclude_cat;	
				if (function_exists('wpp_get_mostpopular'))
				wpp_get_mostpopular('cat="'.$IDterm.'"&range="'.$time_range.'"&pid="'.$exclude_post.'"&author="'.$exclude_author.'"&stats_category=1&thumbnail_width=249&thumbnail_height=112&order_by=weekly');				
				?>
			</div>
			
		<?php }		
		/**
		 * Back-end widget form.
		 */
		 
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
				$time_range = $instance['time_range'];
				$exclude_post = $instance['exclude_post'];
				$exclude_author = $instance['exclude_author'];
				$exclude_cat = $instance['exclude_cat'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$time_range = __( 'all' );
				$exclude_post = __( '' );
				$exclude_author = __( '' );
				$exclude_cat = __( '' );
			}
			?>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'time_range' ); ?>">
							<?php _e( 'Time Range:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'time_range' ); ?>" 
						name="<?php echo $this->get_field_name( 'time_range' ); ?>" 
					>
						<option value="all" <?php selected('all', $time_range, true); ?> >All</option>
						<option value="daily" <?php selected('daily', $time_range, true); ?> >Daily</option>
						<option value="weekly" <?php selected('weekly', $time_range, true); ?> >Weekly</option>
						<option value="monthly" <?php selected('monthly', $time_range, true); ?> >Monthly</option>
					</select>
				</p>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'exclude_post' ); ?>">
							<?php _e( 'POST IDs to Exclude:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'exclude_post' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'exclude_post' ); ?>" 
						value="<?php echo esc_html($exclude_post); ?>" />
				</p>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'exclude_author' ); ?>">
							<?php _e( 'Author IDs to Exclude:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'exclude_author' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'exclude_author' ); ?>" 
						value="<?php echo esc_html($exclude_author); ?>" />
				</p>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'exclude_cat' ); ?>">
							<?php _e( 'Category IDs to Exclude:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'exclude_cat' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'exclude_cat' ); ?>" 
						value="<?php echo esc_html($exclude_cat); ?>" />
				</p>
				
				

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['time_range'] = ( ! empty( $new_instance['time_range'] ) ) ? ( $new_instance['time_range'] ) : '';
			$instance['exclude_post'] = ( ! empty( $new_instance['exclude_post'] ) ) ? ( $new_instance['exclude_post'] ) : '';
			$instance['exclude_author'] = ( ! empty( $new_instance['exclude_author'] ) ) ? ( $new_instance['exclude_author'] ) : '';
			$instance['exclude_cat'] = ( ! empty( $new_instance['exclude_cat'] ) ) ? ( $new_instance['exclude_cat'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS
	function lym_sidebarPopular_widget() {
		register_widget( 'lym_sidebarPopular_section' );
	}
	add_action( 'widgets_init', 'lym_sidebarPopular_widget' );
	/*************************************************/
			// WIDGET - SIDEBAR POPULAR //
	/*************************************************/
	/********************************************
		WIDGET - PAGE SIDEBAR WHAT'S NEW
	*********************************************/
	class lym_pagesidebarWhatsNew_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_pagesidebarWhatsNew_section', // Base ID
				__('(Desiblitz) Page Sidebar Whats New' ), // Name
				array( 'description' => __( 'Displays the Latest Post of that Category.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$number_posts = $instance['number_posts'];
		?>			
			<h2 id="wahtsnew" class="center-title orange-bg">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			
			<div class="new-post-list">
				<ul>
					<?php 
						$args = array(
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => 6,											
						);
						$postnew = new WP_Query( $args );
					?>					
					<?php if ( $postnew->have_posts() ) while ( $postnew->have_posts() ) : $postnew->the_post();	?>
					<li>
						<figure class="full-width">
							<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('trending-thumb');} ?>
								<?php $word_count = bavotasan_word_count();?>
								<?php if($word_count < 350){?>
									<span class="quick-read-icon"></span>
								<?php } ?>
							</a>
						</figure>
						<h4 class="post-title">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h4>
						<?php 
							if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
						?>			
							<div class="go-to-share less-spacing">
								<ul>
	    							<?php if(check_shortcode('jwplayer')) { ?>
		    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
		    						<?php } ?>
		    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
		    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
		    						<?php } ?>
		    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
		    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
		    						<?php } ?>
	    						</ul>
							</div>		
						<?php } ?>								
						
					</li>
					<?php endwhile; ?>
				</ul>				
				<!--<a href="<?php bloginfo('url'); ?>/content/category/" class="alm-load-more-btn">MORE</a>-->
			</div><!--//new-post-list-->
		<?php }
		
		/**
		 * Back-end widget form.
		 */
		 
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
				$number_posts = $instance['number_posts'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$number_posts = __( 'Number of Posts' );
			}
			?>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" 
						type="text" 
						name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'number_posts' ); ?>">
							<?php _e( 'Preloaded Posts:' ); ?>
					</label> 
					<select 
						id="<?php echo $this->get_field_id( 'number_posts' ); ?>" 
						name="<?php echo $this->get_field_name( 'number_posts' ); ?>" 
					>
						<option value="1" <?php selected(1, $number_posts, true); ?> >1</option>
						<option value="2" <?php selected(2, $number_posts, true); ?> >2</option>
						<option value="3" <?php selected(3, $number_posts, true); ?> >3</option>
						<option value="4" <?php selected(4, $number_posts, true); ?> >4</option>
						<option value="5" <?php selected(5, $number_posts, true); ?> >5</option>
						<option value="6" <?php selected(6, $number_posts, true); ?> >6</option>
						<option value="7" <?php selected(7, $number_posts, true); ?> >7</option>
						<option value="8" <?php selected(8, $number_posts, true); ?> >8</option>
						<option value="9" <?php selected(9, $number_posts, true); ?> >9</option>
						<option value="10" <?php selected(10, $number_posts, true); ?> >10</option>
					</select>
				</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['number_posts'] = ( ! empty( $new_instance['number_posts'] ) ) ? ( $new_instance['number_posts'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS
	function lym_pagesidebarWhatsNew_widget() {
		register_widget( 'lym_pagesidebarWhatsNew_section' );
	}
	add_action( 'widgets_init', 'lym_pagesidebarWhatsNew_widget' );
	/****************/
		//PAGE SIDEBAR
	/****************/
	/********************************************
		WIDGET - SIDEBAR WHAT'S NEW
	*********************************************/
	class lym_sidebarWhatsNew_section extends WP_Widget {

		/**		 * Register widget with WordPress.		 */
		function __construct() {
			parent::__construct(
				'lym_sidebarWhatsNew_section', // Base ID
				__('(Desiblitz) Sidebar Whats New' ), // Name
				array( 'description' => __( 'Displays the Latest Post of that Category.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$number_posts = $instance['number_posts'];
		?>
			<?php $terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY ); //, $args ); ?>
			<?php
				//echo '<pre style="display:none;">';
					//print_r( $terms );
				//echo "</pre>";
				foreach($terms as $term){
					
					if( $term->parent == 0 ){
						$catName = $term->name;
						$catslug = $term->slug;
						$IDterm  = $term->term_id;
						$currentPostID = get_the_ID();
						break;
						
					} elseif( $term->parent != 0 ){
						$catName = $term->name;
						$catslug = $term->slug;
						$IDterm  = $term->term_id;
						$currentPostID = get_the_ID();
					} //ENDIF
				}
			?>
			<h2 id="wahtsnew" class="center-title <?php echo $catslug; ?>-bg">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>			
            
			<div class="new-post-list">
				<ul>
					<?php						
						/*echo "<pre>";
							print_r( $catName );
						echo "</pre>";*/
						
						$args = array(
							'post_type' => 'post',
							'orderby'   => 'date',
							'order'     => 'DESC',
							'posts_per_page' => 6,
							'tax_query' => array(
								array(
									'taxonomy' => POST_CATEGORY,
									'field'    => 'slug',
									//'operator' => 'IN',
									'terms'    => $catslug,
								),
							),
						);
						$postnew = new WP_Query( $args );
					?>
					<?php if ( $postnew->have_posts() ) while ( $postnew->have_posts() ) : $postnew->the_post();	?>
					<li>
						<figure class="full-width">
							<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('trending-thumb');} ?>
							<?php $word_count = bavotasan_word_count();?>
							<?php if($word_count < 350){?>
								<span class="quick-read-icon"></span>
							<?php } ?>
							</a>
						</figure>
						<h4 class="post-title">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h4>
						<?php 
							if( (check_shortcode('jwplayer')) || (check_shortcode('nggallery')) || (check_shortcode('ngg_displayed_gallery')) || (check_shortcode('mceItem')) || (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) {
							
						?>			
							<div class="go-to-share less-spacing">
								<ul>
	    							<?php if(check_shortcode('jwplayer')) { ?>
		    							<li><a href="<?php the_permalink(); ?>#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>
		    						<?php } ?>
		    						<?php if(check_shortcode('ngg_displayed_gallery') || check_shortcode('mceItem') || check_shortcode('nggallery')) { ?>
		    							<li><a href="<?php the_permalink(); ?>#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>
		    						<?php } ?>
		    						<?php if( (check_shortcode('[audio')) || (check_shortcode('soundcloud.com')) ) { ?>
		    							<li><a href="<?php the_permalink(); ?>#mep_0" title="Hear Audio"><i class="fa fa-volume-up"></i></a></li>
		    						<?php } ?>
	    						</ul>
							</div>		
						<?php } ?>										
						
					</li>
					<?php endwhile; ?>
				</ul>
				<a href="<?php bloginfo('url'); ?>/content/category/<?php echo $catslug; ?>" class="alm-load-more-btn">MORE</a>
				<!--<ul>
					<?php echo do_shortcode('[ajax_load_more post_type="post" taxonomy="category" taxonomy_terms="'.$catslug.'" repeater="template_1" preloaded="true" preloaded_amount="'.$number_posts.'" exclude="'.$currentPostID.'" posts_per_page="5" scroll="false" transition="fade" button_label="Load More"]'); ?>
				</ul>-->									
			</div><!--//new-post-list-->
			<!--<div id="sticky_sidebar" class="share_article">
				<div class="content">
					<h2 class="center-title">Share Article</h2>
					<?php //echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,pinterest,mail" counters=0 counter_pos="right" total_counter_pos="right" style="button"]'); ?>
				</div>
			</div>-->			
		<?php }
		
		/**
		 * Back-end widget form.
		 */
		 
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ] ) ) {
				$widget_title = $instance['widget_title'];
				$number_posts = $instance['number_posts'];
			}
			else {
				$widget_title = __( 'Widget Title' );
				$number_posts = __( 'Number of Posts' );
			}
			?>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input 
						id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
						class="widefat" type="text" 
                        name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
						value="<?php echo esc_html($widget_title); ?>" />
				</p>
				
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'number_posts' ); ?>">
							<?php _e( 'Preloaded Posts:' ); ?>
					</label> 
					<select id="<?php echo $this->get_field_id( 'number_posts' ); ?>" 
						name="<?php echo $this->get_field_name( 'number_posts' ); ?>" >
						<option value="1" <?php  selected(1,  $number_posts, true); ?> >1</option>
						<option value="2" <?php  selected(2,  $number_posts, true); ?> >2</option>
						<option value="3" <?php  selected(3,  $number_posts, true); ?> >3</option>
						<option value="4" <?php  selected(4,  $number_posts, true); ?> >4</option>
						<option value="5" <?php  selected(5,  $number_posts, true); ?> >5</option>
						<option value="6" <?php  selected(6,  $number_posts, true); ?> >6</option>
						<option value="7" <?php  selected(7,  $number_posts, true); ?> >7</option>
						<option value="8" <?php  selected(8,  $number_posts, true); ?> >8</option>
						<option value="9" <?php  selected(9,  $number_posts, true); ?> >9</option>
						<option value="10" <?php selected(10, $number_posts, true); ?> >10</option>
					</select>
				</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['number_posts'] = ( ! empty( $new_instance['number_posts'] ) ) ? ( $new_instance['number_posts'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS	
	function lym_sidebarWhatsNew_widget() {
		register_widget( 'lym_sidebarWhatsNew_section' );
	}
	add_action( 'widgets_init', 'lym_sidebarWhatsNew_widget' );
	/*************************************************/
			// WIDGET - SIDEBAR WHATS NEW //
	/*************************************************/
	/********************************************
		WIDGET - SINGLE PAGE SIDEBAR QUOTED
	*********************************************/
	class lym_sidebarquoted_section extends WP_Widget {

		function __construct() {
			parent::__construct(
				'lym_sidebarquoted_section', // Base ID
				__('(Desiblitz) Sidebar - Quoted Post' ), // Name
				array( 'description' => __( 'Display one post as Quoted Post.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title'];
			$article_id = $instance['article_id'];
		?>
			
			<?php 
				$postID = trim($article_id);
				if(empty($postID)){
					$args = array(
						'post_type' 	=> 'post',
						'orderby'       => 'rand',
						'posts_per_page'=> 1 ,
					);
				} else {
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1 ,
						'page_id' => $article_id
						
					);	
				}
				
				$editor_post = new WP_Query( $args );
			?>
			<?php if ( $editor_post->have_posts() ) { ?>
				<?php while ( $editor_post->have_posts() ) : $editor_post->the_post(); ?>
					<div class="quoted-wrap">
						<h2 class="center-title sidebarquoted-bg">
							<span><?php esc_html_e($widget_title); ?></span>
							<i></i>
						</h2>			
						<div class="new-post-list">						
							<ul class="postCenter">					
								<li>
									<figure class="full-width">											
										<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('trending-thumb');} ?>
										<?php $word_count = bavotasan_word_count();?>
										<?php if($word_count < 350){?>
											<span class="quick-read-icon"></span>
										<?php } ?>
										</a>
									</figure>
									<div class="quoted-text">
										<?php echo get_post_meta(get_the_ID(), 'pullquote', TRUE); ?>
									</div>					
									<h3 class="post-title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h3>
								</li>
							</ul>
						</div>	
					</div>					
		    	<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>			
		<?php }		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'article_id' ]) ) {
				$article_id = $instance['article_id'];
				$widget_title = $instance['widget_title'];
			}
			else {
				$article_id = __( 'Enter the ID' );
				$widget_title = __( 'Widget Title' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'article_id' ); ?>">
						<?php _e( 'Post ID:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'article_id' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'article_id' ); ?>" 
					value="<?php echo esc_html($article_id); ?>" />
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['article_id'] = ( ! empty( $new_instance['article_id'] ) ) ? ( $new_instance['article_id'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_sidebarquoted_section_widget() {
		register_widget( 'lym_sidebarquoted_section' );
	}
	add_action( 'widgets_init', 'lym_sidebarquoted_section_widget' );
	/*************************************************/
		// WIDGET - SINGLE PAGE SIDEBAR QUOTED //
	/*************************************************/
	
	/********************************************
		WIDGET - SIDEBAR CATEGORY POST
	*********************************************/
	class lym_sidebarCategory_Post extends WP_Widget {

		function __construct() {
			parent::__construct(
				'lym_sidebarCategory_Post', // Base ID
				__('(Desiblitz) Sidebar - Category Post' ), // Name
				array( 'description' => __( 'Display the selected category post.' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {
			$post_category = $instance['post_category'];
			$widget_title = $instance['widget_title'];
			$numberof_post = $instance['numberof_post'];
		?>
			
			<?php 
				$args = array(
					'post_type' => 'post',
					'tax_query' => array(
						array(
							'taxonomy' => POST_CATEGORY,
							'field'    => 'slug',
							'terms'    => esc_html($post_category),
						),
					),
					'posts_per_page' => $numberof_post ,
				);
				
				$category_Post = new WP_Query( $args );
				
			?>
			<?php if ( $category_Post->have_posts() ) { ?>				
					
				<h2 class="center-title sidebarquoted-bg">
					<span><?php esc_html_e($widget_title); ?></span>
					<i></i>
				</h2>	
				
				<div class="new-post-list">
					<?php if($numberof_post == 1){?>
						<ul class="postCenter">
					<?php }else{ ?>
						<ul>
					<?php } ?>
						<?php while ( $category_Post->have_posts() ) : $category_Post->the_post(); ?>
							<li>
								<figure class="full-width">											
									<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('trending-thumb');} ?>
									<?php $word_count = bavotasan_word_count();?>
									<?php if($word_count < 350){?>
										<span class="quick-read-icon"></span>
									<?php } ?>
									</a>
								</figure>
								<h3 class="post-title">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h3>
							</li>
						<?php endwhile; ?>
						</ul>
				</div>	
					
				<?php wp_reset_query(); ?>
			<?php } ?>			
		<?php }		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'numberof_post' ]) ) {
				$numberof_post = $instance['numberof_post'];
				$post_category = $instance['post_category'];
				$widget_title = $instance['widget_title'];
			}
			else {
				$article_id = __( '1' );
				$widget_title = __( 'Widget Title' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'post_category' ); ?>">
						<?php _e( 'Select Category:' ); ?>
				</label> 
				<?php $terms = get_terms( POST_CATEGORY ); ?>
				<select 
					id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
					name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
				>
					<?php
						foreach($terms as $term){
							//if($term->parent == 0){ ?>
								<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php //}
						}
					?>
				</select>
			</p>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'numberof_post' ); ?>">
						<?php _e( 'Number of Posts:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'numberof_post' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'numberof_post' ); ?>" 
					value="<?php echo esc_html($numberof_post); ?>" />
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['numberof_post'] = ( ! empty( $new_instance['numberof_post'] ) ) ? ( $new_instance['numberof_post'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	function lym_sidebarCategory_Post_widget() {
		register_widget( 'lym_sidebarCategory_Post' );
	}
	add_action( 'widgets_init', 'lym_sidebarCategory_Post_widget' );
	/*************************************************/
		// WIDGET - SIDEBAR CATEGORY POST //
	/*************************************************/
	
	
	
	/********************************************
		WIDGET - SIDEBAR AD'S
	*********************************************/
	class lym_sidebarAd extends WP_Widget {
	/*** Register widget with WordPress. ***/
		function __construct() {
			parent::__construct(
				'lym_sidebarAd', // Base ID
				__('(Desiblitz) Sidebar Ad' ), // Name
				array( 'description' => __( 'Display this widget in Sidebar' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */

		public function widget( $args, $instance ) {			
			$widget_title = $instance['widget_title'];
			$more_text = $instance['more_text'];
			$start_Date = $instance['start_Date'];
			$end_Date = $instance['end_Date'];
			$ad_link = $instance['ad_link'];
			$post_category = $instance['post_category'];

			$more_text = apply_filters( 'more_text_ad', $more_text, $instance, $this );
			$ad_link = apply_filters( 'ad_link_ad', $ad_link, $instance, $this );
			$post_category = apply_filters( 'post_category_ad', $post_category, $instance, $this );

                  global $cate;
		 $cat_names = $cate[1]->slug;
		// $today = date("d/m/Y");
		 
		 $tz = 'Europe/London';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$today = $dt->format('d/m/Y');
       //if($today >= $start_Date)
	   if(strtotime($today) >= strtotime($start_Date)){
	   if(strtotime($end_Date) >= strtotime($today)){
		if($post_category==$cat_names){
		var_dump($start_Date);
		var_dump($today);
		var_dump($end_Date); ?>
		<div class="widget showOnly-cat <?php echo $post_category; ?> <?php echo $cat_names; ?>" >
		  <?php if($widget_title){?>
			<h2 id="mostpopular" class="center-title <?php echo $catslug; ?>-bg popular">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			<?php }?>
			<div class="single-popular-list">
				<?php if($ad_link) {?>	
					<a href="<?php echo $ad_link;?>" target="_blank"><?php echo $more_text;?></a>
				<?php } else{  echo $more_text; } ?>
				
			</div>
		</div>
		<?php }
		}
		}
		}
		
		/**
		 * Back-end widget form.
		 */

		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {				
				$widget_title = $instance['widget_title'];
				$more_text = $instance['more_text'];
				$start_Date = $instance['start_Date'];
				$end_Date = $instance['end_Date'];
				$ad_link = $instance['ad_link'];
				$post_category = $instance['post_category'];
			}
			else {				
				$widget_title = __( 'Title of the Widget' );
				$more_text = __( 'Ad Code' );
				$ad_link = __( 'Ad URL' );
				$post_category = __( 'Select Category' );
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
						<?php _e( 'Widget Title:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
					value="<?php echo esc_html($widget_title); ?>" />
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'more_text' ); ?>">
						<?php _e( 'Ad Code:' ); ?>
				</label>				
				<textarea 
					id="<?php echo $this->get_field_id( 'more_text' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'more_text' ); ?>"
					><?php echo esc_html($more_text); ?></textarea>
						
			</p>
						
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'start_Date' ); ?>">
						<?php _e( 'Start Date:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'start_Date' ); ?>" 
					class="widefat lym-datepicker" 
					type="date" 
					name="<?php echo $this->get_field_name( 'start_Date' ); ?>" 
					value="<?php echo esc_html($start_Date); ?>" />
			</p>			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'end_Date' ); ?>">
						<?php _e( 'End Date:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'end_Date' ); ?>" 
					class="widefat lym-datepicker" 
					type="date" 
					name="<?php echo $this->get_field_name( 'end_Date' ); ?>" 
					value="<?php echo esc_html($end_Date); ?>" />
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'ad_link' ); ?>">
						<?php _e( 'Ad URL:' ); ?>
				</label> 
				<input 
					id="<?php echo $this->get_field_id( 'ad_link' ); ?>" 
					class="widefat" 
					type="text" 
					name="<?php echo $this->get_field_name( 'ad_link' ); ?>" 
					value="<?php echo esc_html($ad_link); ?>" />
			</p>
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'post_category' ); ?>">
						<?php _e( 'Select Category:' ); ?>
				</label> 
				<?php $terms = get_terms( POST_CATEGORY ); ?>
				<select 
					id="<?php echo $this->get_field_id( 'post_category' ); ?>" 
					name="<?php echo $this->get_field_name( 'post_category' ); ?>" 
				>
					<?php
						foreach($terms as $term){
							//if($term->parent == 0){ ?>
								<option value="<?php echo $term->slug; ?>" <?php selected($term->slug, $post_category, true); ?> ><?php echo $term->name; ?></option>
						<?php //}
						}
					?>
				</select>
			</p>
			

		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) {

			$instance = array();			
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['more_text'] = ( ! empty( $new_instance['more_text'] ) ) ? ( $new_instance['more_text'] ) : '';
			$instance['start_Date'] = ( ! empty( $new_instance['start_Date'] ) ) ? ( $new_instance['start_Date'] ) : '';
			$instance['end_Date'] = ( ! empty( $new_instance['end_Date'] ) ) ? ( $new_instance['end_Date'] ) : '';
			$instance['ad_link'] = ( ! empty( $new_instance['ad_link'] ) ) ? ( $new_instance['ad_link'] ) : '';
			$instance['post_category'] = ( ! empty( $new_instance['post_category'] ) ) ? ( $new_instance['post_category'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	// register lym_homeLatestPost_GridOne Widget
	function lym_register_sidebarAd_widget() {
		register_widget( 'lym_sidebarAd' );
	}
	add_action( 'widgets_init', 'lym_register_sidebarAd_widget' );
	/*************************************************/
		// WIDGET - SIDEBAR AD's //
	/*************************************************/