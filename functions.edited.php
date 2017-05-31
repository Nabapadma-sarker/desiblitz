<?php

	/**************************
		Redirect HTTP to HTTPS
	**************************/


	add_action( 'template_redirect', 'db_ssl_redirect', 1 );
	function db_ssl_redirect() {
		if ( !is_ssl() ) {
			if ( 0 === strpos( $_SERVER['REQUEST_URI'], 'https' ) ) {
				wp_redirect( preg_replace( '|^http://|', 'https://', $_SERVER['REQUEST_URI'] ), 301 );
				exit();
			} else {
				wp_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
				exit();
			}
		}
	}

 	
 	/***************************************************
		Registers an editor stylesheet for the theme.
	****************************************************/
	function wpdocs_theme_add_editor_styles() {
	    add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
	
	/**************************
		Stop Heartbeat
	**************************/
	add_action( 'init', 'stop_heartbeat', 1 );
	
	function stop_heartbeat() {
	        wp_deregister_script('heartbeat');
	}

	/**************************
		REDUX FRAMEWORK
	**************************/
	if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/redux-config.php' ) ) {
		require_once( dirname( __FILE__ ) . '/ReduxFramework/redux-config.php' );
	}
	global $lym_redux;
	
	
	/************************
		ADMIN CSS
	************************/

	add_action('admin_head', 'lym_custom_admin');

	function lym_custom_admin() {
	  echo '<style>
	    .wp-list-table tr[data-slug="advanced-custom-fields"], 
	    .wp-list-table #lym-metaboxes,
	    .wp-list-table tr[data-slug="acf-field-date-time-picker"],
	    #adminmenu #toplevel_page_edit-post_type-acf
	    { display: none; }
	  </style>';
	}

	add_filter('acf/settings/show_admin', '__return_false');
	

	/**********************************************
	* Proper way to enqueue scripts and styles
	*********************************************/
 
	if ( is_admin() ) {
		$hook = 'admin_enqueue_scripts';
	} elseif ( 'wp-login.php' === $GLOBALS['pagenow'] ) {
		$hook = 'login_enqueue_scripts';
	} else {
		$hook = 'wp_enqueue_scripts';
	}

add_action( $hook, function(){
	
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
		wp_enqueue_script('jquery');
	});
	
	function lym_theme_scripts() {
		
		wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );	
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );			
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );			
		//wp_enqueue_style( 'less-compiled', get_template_directory_uri() . '/css/style.css' );			
		//wp_enqueue_style( 'desiblitz', get_stylesheet_uri() );			
		wp_enqueue_script( 'less-js', get_template_directory_uri() . '/js/less.min.js', false );
		wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', false );
		wp_enqueue_script( 'content-carousel', get_template_directory_uri() . '/js/jquery.contentcarousel.js', false );
		wp_enqueue_script( 'fancybox-core', get_template_directory_uri() . '/js/jquery.fancybox.js', false );
		wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', false );
		wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.js', false );		
		//wp_enqueue_script( 'cookies', get_template_directory_uri() . '/js/cookies.js', false );
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', false );	
		//wp_register_script('adc-script', get_stylesheet_directory_uri() . '/js/adc.js','','1.1', true);
		wp_enqueue_script('adc-script');
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky-kit.js', false );
		wp_enqueue_script( 'desiblitz', get_template_directory_uri() . '/js/site.js', false );
		//wp_enqueue_script( 'track-ad', ("https://www.letsgohatch.com/tracking/5c95194949b5e00c43894f2a194b9cca"), false, '');
	}
	add_action( 'wp_enqueue_scripts', 'lym_theme_scripts' );
		
	/********************************
	ADD POST THUMBNAILS
	********************************/
	add_theme_support('post-thumbnails');
	add_image_size( 'single-post', 685, 336, true );
	add_image_size( 'full-width-single-post', 1046, 512, true );
	add_image_size( 'trending-thumb', 300, 147, true );
	add_image_size( 'section-large-thumb', 486, 238, true );
	add_image_size( 'section-medium-thumb', 300, 147, true );
	add_image_size( 'widget-thumb', 345, 169, true );
	add_image_size( 'advert-fw', 1170, 170, true );
	add_image_size( 'advert-hdr', 300, 200, true );
	add_image_size( 'advert-hw', 580, 120, true );
	add_image_size( 'advert-cs', 550, 855, true );
	add_image_size( 'advert-as', 300, 250, true );
	add_image_size( 'advert-ts', 280, 126, true );
	add_image_size( 'advert-logo', 153, 23, true );	
	/********************************
	DEFINE CONTSTANT
	********************************/
	define("POST_CATEGORY", 'category');
	define("GOSSIP_CAT", 'desi-gossip');
	define("ART_CULTURE", 'arts-and-culture');
	define("BRIT_ASIAN", 'brit-asian');
	define("FILM_TV", 'film-tv');
	define("BOLLYWOOD", 'bollywood');
	define("WORLD", 'world');
	define("REVIEWS", 'reviews');
	define("FASHION", 'fashion');
	define("FOOD", 'food');
	define("HEALTH_BEAUTY", 'health-and-beauty');
	define("MUSIC_DANCE", 'music-and-dance');
	define("SPORT", 'sport');
	define("TABOO", 'taboo');
	define("TRENDS", 'trends');
	
	/********************************
	REGISTER CUSTOM MENUS
	********************************/
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'header-menu' => __( 'Header Category Navigation' ),
		  'header-category-menu' => __( 'Header Menu #1' ),
		  'header-page-menu' => __( 'Header Menu #2' ),
		  'footer-menu' => __( 'Footer Menu' ),
		  'scroll-to-menu' => __( 'Scroll To Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	/********************************
	LIMIT WORDS FUNCTION
	********************************/
	function limit_words($string, $word_limit)
	{
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit));
	}
	
	/********************************
	PRINT_A FUNCTION
	********************************/
	function print_a( $a ) {
		print( '<pre>' );
		print_r( $a );
		print( '</pre>' );
	}
	
	/********************************
		WORD COUNT
	********************************/
	function bavotasan_word_count( $content = '' ) {
		if($content == ''){
			$content = get_post_field('post_content', get_the_ID() );
		}
	   return sprintf(
		  __( '%s', 'text-domain' ),
		  str_word_count( strip_tags( $content ) )
	   );
   }
   
	/********************************
		GET PARENT CATEGORY
	********************************/
	function get_parent_category($post_ID, $output){
		$terms = get_the_terms(get_the_ID(), POST_CATEGORY);
		if(!empty($terms)){
			if($output == 'slug'){
				foreach($terms as $term){
					if($term->parent == 0){
						$catSlug = $term->slug;
						break;
					}
				}	
				return $catSlug;
			} elseif($output == 'name'){
				foreach($terms as $term){
					if($term->parent == 0){
						$catSlug = $term->name;
						break;
					}
				}	
				return $catSlug;
			} elseif($output == 'id'){
				foreach($terms as $term){
					if($term->parent == 0){
						$catSlug = $term->term_id;
						break;
					}
				}	
				return $catSlug;
			}
		} //NOT EMPTY
		
	}
	
	/********************************
		GET CHILD CATEGORY
	********************************/
	function get_child_category($post_ID, $output){
		$terms = get_the_terms(get_the_ID(), POST_CATEGORY);
		if(!empty($terms)){
			if($output == 'slug'){
				foreach($terms as $term){
					if($term->parent != 0){
						$catSlug = $term->slug;
						break;
					}
				}	
				return $catSlug;
			} elseif($output == 'name'){
				foreach($terms as $term){
					if($term->parent != 0){
						$catSlug = $term->name;
						break;
					}
				}	
				return $catSlug;
			} elseif($output == 'id'){
				foreach($terms as $term){
					if($term->parent != 0){
						$catSlug = $term->term_id;
						break;
					}
				}	
				return $catSlug;
			}
		} //NOT EMPTY
		
	}
	
	/********************************
	ACF Stop Update Notifications
	********************************/
	add_filter('site_transient_update_plugins', 'acf_remove_update_nag');
	function acf_remove_update_nag($value) {
	 unset($value->response[ 'advanced-custom-fields/acf.php' ]);
	 return $value;
	}

	/********************************
		CHECK IF GRAVATAR
	********************************/
	function validate_gravatar($email) {
		// Craft a potential url and test its headers
		$hash = md5($email);
		$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
		$headers = @get_headers($uri);
		if (!preg_match("|200|", $headers[0])) {
			$has_valid_avatar = FALSE;
		} else {
			$has_valid_avatar = TRUE;
		}
		return $has_valid_avatar;
	}
	
	/********************************
		CHECK FOR SHORTCODE
	********************************/
	// check the current post for the existence of a short code
	function check_shortcode($shortcode = '', $postID = null) {
	    
	    if (null === $postID) {
	        $postID = get_the_ID();
	    }
	    $post_to_check = get_post($postID);
	     
	    // false because we have to search through the post content first
	    $found = false;
	     
	    // if no short code was provided, return false
	    if (!$shortcode) {
	        return $found;
	    }
	    // check the post content for the short code
	    if ( stripos($post_to_check->post_content, $shortcode) !== false ) {
	        // we have found the short code
	        $found = true;
	    }
	    
	    // return our final results
	    return $found;
	}

	/*
	 * Gets the excerpt using the post ID outside the loop.
	 *
	 * @author      Withers David
	 * @link        http://uplifted.net/programming/wordpress-get-the-excerpt-automatically-using-the-post-id-outside-of-the-loop/
	 * @param       int $post_id
	 * @return      string
	 */
	function get_excerpt_by_id($post_id){
	    $the_post = get_post($post_id); //Gets post ID
	    $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
	    $excerpt_length = 35; //Sets excerpt length by word count
	    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
	    $words = explode(' ', $the_excerpt, $excerpt_length + 1);
	
	    if (count($words) > $excerpt_length) :
	        array_pop($words);
	        array_push($words, '...');
	        $the_excerpt = implode(' ', $words);
	    endif;
	
	    $the_excerpt = '<p>' . $the_excerpt . '</p>';
	    return $the_excerpt;
	}

	/*
	 * Builds custom HTML
	 *
	 * With this function, I can alter WPP's HTML output from my theme's functions.php.
	 * This way, the modification is permanent even if the plugin gets updated.
	 *
	 * @param   array   $mostpopular
	 * @param   array   $instance
	 * @return  string
	 */
	function my_custom_popular_posts_html_list( $mostpopular, $instance ){
		
		if ( is_singular('post') ) {
			 $output = '<div id="trendingList" class="new-post-list trend-overlay"> <ul>';	
				// loop the array of popular posts objects				
				foreach( $mostpopular as $popular ) {
				//print_a($popular);
			
					$stats = ''; // placeholder for the stats tag
			
					// Category option checked
					if ($instance['stats_tag']['category']) {
						$post_cat = get_the_category($popular->id);
						$post_cat = (isset($post_cat[0]))
						  ? '<a href="' . get_category_link($post_cat[0]->term_id) . '">' . $post_cat[0]->cat_name . '</a>'
						  : '';
			
						if ($post_cat != '') {
							$stats = '<figcaption>' . sprintf(__('%s', 'wordpress-popular-posts'), $post_cat) . '</figcaption>';
						}
					}
					
					$terms = wp_get_post_terms( $popular->id, 'category' );
					
					foreach($terms as $term){
						//print_a($terms);
						if($term->parent == 0){
							$slug = $term->slug;
							$cat_name = $term->name;
							break;
							} 
						
					}
					$postContent = get_post_field('post_content', $popular->id );
					$word_count = bavotasan_word_count($postContent);
					
					$output .= '<li class="'.$slug.'-bg">';
					$output .= '<figure class="full-width"><a href="' . get_the_permalink( $popular->id ) . '\" title="' . esc_attr( $popular->title ) . '">';
					$output .= get_the_post_thumbnail( $popular->id, 'trending-thumb' );					
					if($word_count < 350){
						$output .= '<span class="quick-read-icon"></span>';
					}
					$output .= '</a>';
					$output .= '<figcaption>' . $cat_name . '</figcaption>';
					$output .= '</figure>';
					$output .= '<h3 class="post-title"><a href="' . get_the_permalink( $popular->id ) . '" title="' . esc_attr( $popular->title ) . '">'. $popular->title .'</a></h3>';					
					if( (check_shortcode('jwplayer', $popular->id)) || (check_shortcode('nggallery', $popular->id)) || (check_shortcode('ngg_displayed_gallery', $popular->id)) || (check_shortcode('mceItem', $popular->id)) || (check_shortcode('[audio', $popular->id)) ) {
						$output .= '<div class="go-to-share less-spacing"><ul>';
						if(check_shortcode('jwplayer', $popular->id)) {
							$output .= '<li><a href="#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>';
						}
						if(check_shortcode('ngg_displayed_gallery', $popular->id) || check_shortcode('mceItem', $popular->id) || check_shortcode('nggallery', $popular->id)) {
							$output .= '<li><a href="#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>';
						}
						if(check_shortcode('audio', $popular->id)) {
							$output .= '<li><a href="#mep_0" title="View Video"><i class="fa fa-volume-up"></i></a></li>';
						}
						$output .= '</ul></div>';
					}
					
					//$output .= $excerpt;
					$output .= '</li>';					
				}			
				$output .= '</ul></div>';
				
		} else {
		
		    $output = '<section id="trending" class="flex">';	
		    // loop the array of popular posts objects
		    $trending_count = 01;
		    foreach( $mostpopular as $popular ) {
		    //print_a($popular);
		
		        $stats = ''; // placeholder for the stats tag
		
		        // Category option checked
		        if ($instance['stats_tag']['category']) {
		            $post_cat = get_the_category($popular->id);
		            $post_cat = (isset($post_cat[0]))
		              ? '<a href="' . get_category_link($post_cat[0]->term_id) . '">' . $post_cat[0]->cat_name . '</a>'
		              : '';
		
		            if ($post_cat != '') {
		                $stats = '<figcaption>' . sprintf(__('%s', 'wordpress-popular-posts'), $post_cat) . '</figcaption>';
		            }
		        }
		        
				$terms = wp_get_post_terms( $popular->id, 'category' );
				//print_a($terms);
				foreach($terms as $term){
				
					if($term->parent == 0){
						$slug = $term->slug;
					} else {
						$term = get_term_by( 'id', $term->parent, POST_CATEGORY);
						$slug = $term->slug;
						$cat_name = $term->name;
					}
				}	
				$postContent = get_post_field('post_content', $popular->id );
				$word_count = bavotasan_word_count($postContent);
					
		        $output .= '<div class="col-1"><article class="trend-overlay '.$slug.' flex"><div class="content">';
		        $output .= '<figure><a href="' . get_the_permalink( $popular->id ) . '" title="' . esc_attr( $popular->title ) . '">';
		        $output .= get_the_post_thumbnail( $popular->id, 'trending-thumb' );
				if($word_count < 350){
						$output .= '<span class="quick-read-icon"></span>';
					}
		        $output .= '</a>';
				if(isset($cat_name))
					$output .= '<figcaption>' . $cat_name.'</figcaption>';
				else{
					$output .= '';
				}
		        $output .= '</figure>';
		        $output .= '<h3><a href="'.get_the_permalink( $popular->id ).'" title="'.esc_attr( $popular->title ).'">'. $popular->title . '</a></h3';
		        //$output .= $excerpt;
		        $output .= '</div><span class="number">'.str_pad($trending_count, 2, '0', STR_PAD_LEFT).'</span></article></div>';
				$trending_count++;
		    }
		
		    $output .= '</section>';
		    
		} //else
		
		return $output;
	}	
	add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 5, 2 );
	
	//* Post Totes
function post_totes_function( $atts ) {

$totes = get_post_meta ( get_the_ID() , '_totes', true );
$totes = ' <span class="the-totes"></span>' . kilomega ( $totes ) ;
return $totes;
}

add_shortcode( 'post_totes', 'post_totes_function' );
	/*********************************
		ADD COLUMNS TO ADVERTISE
	*********************************/
	// ADD NEW COLUMN
	function advertise_image_head($defaults) {
	    $defaults['lym_advert_image_upload'] = 'Uploaded Image';
	    return $defaults;
	}
	function advertise_type_head($defaults) {
	    $defaults['lym_advert_type'] = 'Type';
	    return $defaults;
	}
	function advertise_from_head($defaults) {
	    $defaults['lym_advert_from_date'] = 'From';
	    return $defaults;
	}
	function advertise_to_head($defaults) {
	    $defaults['lym_advert_to_date'] = 'To';
	    return $defaults;
	}

	function advertise_shortcode_head($defaults) {
	    $defaults['lym_advert_shortcode'] = 'Shortcode';
	    return $defaults;
	}

	 
	// SHOW THE FEATURED IMAGE
	function advertise_IMGcolumn_content($column_name, $post_ID) {
	    
	    if ($column_name == 'lym_advert_type') {
	        $advertisement_type = get_field('advert_type', $post_ID);
	        if ($advertisement_type) {
	            echo $advertisement_type;
	        }
	    } //lym_advert_type
	    
	    if ($column_name == 'lym_advert_image_upload') {
	        $post_featured_image = get_field('advert_image_upload', $post_ID);
	        $logo_featured_image = get_field('advert_logo', $post_ID);
	        if ($post_featured_image) {
	        	$featured_url = wp_get_attachment_image_src( $post_featured_image, 'thumbnail' );
	            echo '<img src="' . $featured_url[0] . '" />';
	        } else {
		        $featured_url = wp_get_attachment_image_src( $logo_featured_image, 'thumbnail' );
	            echo '<img src="' . $featured_url[0] . '" />';
	        }
	    } //lym_advert_image_upload
	    
	    if ($column_name == 'lym_advert_from_date') {
	        $advertise_from = get_field('from_date_&_time', $post_ID);
	        if ($advertise_from) {
	        	echo $advertise_from;
	        }
	    } //advertise_from_head
	    
	    if ($column_name == 'lym_advert_to_date') {
	        $advertise_to = get_field('to_date_and_time', $post_ID);
	        if ($advertise_to) {
	        	echo $advertise_to;
	        }
	    } //advertise_to_head

		if ($column_name == 'lym_advert_shortcode') {
	        $adv_id = $post_ID;
			$adv_type = get_field('advert_type', $post_ID);
	        if ($adv_id && $adv_type =='AS') {
	        	echo '[ads id='.$adv_id.']';
	        }
	    } //advertise_shortcode_head


	    
	} //advertise_IMGcolumn_content()
	
	add_filter('manage_advertise_posts_columns', 'advertise_type_head');

	add_filter('manage_advertise_posts_columns', 'advertise_image_head');
	add_filter('manage_advertise_posts_columns', 'advertise_from_head');
	add_filter('manage_advertise_posts_columns', 'advertise_to_head');
	add_action('manage_advertise_posts_custom_column', 'advertise_IMGcolumn_content', 10, 2);
	
	/*******************************
		EXECUTE PHP
	*******************************/
	function php_execute($html){
	if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
		$html=ob_get_contents();
		ob_end_clean();
	}
		return $html;
	}
	
	
	/********************************
		INCLUDES 
	********************************/
	
	include (TEMPLATEPATH.'/includes/widgets.php');
	include (TEMPLATEPATH.'/includes/new_shortcodes.php');
	include (TEMPLATEPATH.'/includes/custom-post-types.php');
	
	/**************************************
		DISPLAY SUB CATEGORY IN WIDGETS
	**************************************/
	function display_Grid_subCategory($postID){
		//DISPLAY SUB CATEGORY in GRID
		$terms = wp_get_post_terms( $postID, POST_CATEGORY ); 
		$is_child = false;
		foreach($terms as $term){
			if( $term->parent != 0){
				$is_child = true;
				$childCatName = $term->name;
				$childCatSlug = $term->slug;
				break;
			}
		}
	
		if($is_child == true){
			return '<a class="homePage_grid sub_cat_link" href="'.get_term_link( $childCatSlug, POST_CATEGORY ).'">'.$childCatName.'</a>';
		}
	} //END display_Grid_subCategory FUNCTION	
	
	/**************************************
		Add image to RSS feed
	**************************************/
	function featuredtoRSS($content) {
		global $post;
		if ( has_post_thumbnail( $post->ID ) ){
			$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'style'
			=> 'float:left; margin:0 15px 15px 0;' ) ) . '' . $content;
		}
		return $content;
	}
	add_filter('the_excerpt_rss', 'featuredtoRSS');
	add_filter('the_content_feed', 'featuredtoRSS');
	
	
	/**************************************
		Change Wordpress Login logo
	**************************************/
	add_action("login_head", "my_login_head");
	function my_login_head() {
		echo "
		<style>
		body.login #login h1 a {
			background: url('https://www.desiblitz.com/images/login-logo.png') no-repeat scroll center top transparent;
			height: 90px;
			width: 260px;
		}
		</style>
		";
	}
	
	add_filter('login_headertitle', create_function(false,"return 'http://desiblitz.com';"));
	
	
	/**************************************
		Multi Column Post - split content at the more tag and return an array
	**************************************/
	function split_content($content) {
	
		
		// run through a couple of essential tasks to prepare the content
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
	 
		// the first "more" is converted to a span with ID
		$columns = preg_split('/(<span id="more-\d+"><\/span>)|(<!--more-->)<\/p>/', $content);
		$col_count = count($columns);
	 
		if($col_count > 1) {
			for($i=0; $i<$col_count; $i++) {
				// check to see if there is a final </p>, if not add it
				if(!preg_match('/<\/p>\s?$/', $columns[$i]) )  {
					$columns[$i] .= '</p>';
				}
				// check to see if there is an appending </p>, if there is, remove
				$columns[$i] = preg_replace('/^\s?<\/p>/', '', $columns[$i]);
				// now add the div wrapper
				$columns[$i] = '<div class="dynamic-col-'.($i+1).'">'.$columns[$i].'</div>';
			}
			$content = join($columns, "\n").'<div class="clear"></div>';
			//$content = join($columns, "\n");
		}
		else {
			// this page does not have dynamic columns
			$content = wpautop($content);
		}
		// remove any left over empty <p> tags
		$content = str_replace('<p></p>', '', $content);
		return $content;
	
	}

/****************************************************
 * Allow adding of shortcodes in sidebar
*****************************************************/

add_filter('widget_text', 'do_shortcode');


/****************************************************
 * Displays Adsense advert inside content of a post
*****************************************************/

/** 
add_filter( 'the_content', 'prefix_insert_post_ads' );

function prefix_insert_post_ads( $content ) {
	
	$ad_code1 = '<div style="text-align:center;margin-bottom:1em;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Inside Article Advert -->
				
                <ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-3241871860118891"
				     data-ad-slot="4542185760"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div>';
				
	if ( is_single()) {
		$googleAd = get_field('display_google_ad', get_the_ID());
		if( ($googleAd == 'Yes') || ($googleAd == '')){
	 		return prefix_insert_after_paragraph( $ad_code1, 5, $content );
	 	}
	}
	
	return $content;
}
// Parent Function that makes the magic happen
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {

		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}

		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	
	return implode( '', $paragraphs );
}

**/

// Contextual Related Posts
//add_action( 'the_content', 'db_crp',750 );
/*
function db_crp($content) {
	 global $fp; 	 
		$adc = "";

		$adc = '<div id="contentad84357" class="people_like"></div>';
		
	   if ( is_single() ) {
		   if ($adc != "") {
		  	 $content = $content.$adc;
		   }
		   
	  	}		
	return $content;
}*/








//End Min Code

include("functions_advs.php");
