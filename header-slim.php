<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" />
	<link rel="icon" href="/animated_favicon1.gif" type="image/gif" />
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
	
	<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.less" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
    
	<!-- Google Tag Manager Data Layer -->
	<script type="text/javascript">
	var _d = document;
	var _dl = _d.location;
	var _dlp = _dl.pathname;
	var _dls = _dl.search;
	var _dr = _d.referrer;
	dataLayer = [];
	dataLayer.push({
	<?php if (is_404()){
	// 404 pages, handled with a /404/ prefix as well as the referrer ?>
	"GTM_WP_404": "<?php print is_404(); ?>",
	"GTM_WP_404_URL": "/404" + _dlp + "/"+ _dr,
	<?php } ?>
	<?php if(is_home()){
	// Home page is tagged manually here but can be done directly in GTM
	?>
	"GTM_WP_Category": "Home",
	<?php } ?>
	<?php if (is_single()|| is_page()){
	// Get category
	$gtm_cat = get_the_category();
	$gtm_catname = $gtm_cat[0]->cat_name;
	if ($gtm_catname == "News") {
	$gtm_catname = "Home";
	}
	if (is_category()){
	//$gtm_catname = single_cat_title("",false);
	$gtm_catname = single_cat_title('',false);
	}
	// PHP variables for GTM
	?>
	"GTM_WP_Authorname": "<?php the_author(); ?>",
	"GTM_WP_Category": "<?php print $gtm_catname; ?>",
	<?php }
	// Get date of post ?>
	"GTM_WP_Date": "<?php print the_date( $format, $before, $after, $echo ); ?>"
	});
	</script>
	<!-- End Google Tag Manager Data Layer -->
    
    <!-- Google Pagle Level Ads - Mobile -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3241871860118891",
    enable_page_level_ads: true
  });
</script>
    <!-- End Page Level Ads - Mobile  -->
    
    <!-- Begin comScore Tag -->
	<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "21269885" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
	</script>
	<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=21269885&cv=2.0&cj=1" />
	</noscript>
<!-- End comScore Tag -->

<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){m['MailerLiteObject']=e;function f(){
var c={a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l;_.parentNode.insertBefore(r,_);
})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

ml('accounts', '208619', '53ffab0fae087', 'load');
</script>
<!-- End MailerLite Universal -->

<!-- Begin Cookie Consent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website. By using our website you consent to all cookies in accordance with our Privacy Policy -","dismiss":"Accept","learnMore":"Read More","link":"https://www.desiblitz.com/privacy-policy","theme":"dark-top"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->


    <?php wp_head(); ?>
  </head>
  <body> 
  	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MSVXW3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MSVXW3');</script>
	<!-- End Google Tag Manager -->
	
	<!-- FB Video -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) return;
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
	 fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End FB Video -->

    <header>
	    <div class="container hdr_container">	    	
	    	<?php 
	    		if ( is_active_sidebar( 'header-advert-left' ) ) :
					dynamic_sidebar( 'header-advert-left' );
				endif; 
			?>	    	
	    	<div class="item logo">
	    	
	    		<nav class="toggleContainer-links">
	    			<div class="menu">
					  <a href="#" class="top-menu-link"><span class="menu-global menu-top"></span>
					  <span class="menu-global menu-middle"></span>
					  <span class="menu-global menu-bottom"></span>
					  <!--<i class="fa fa-times"></i>-->
					  </a>
					</div>
					<a class="search" href="#"><i class="fa fa-search"></i></a>
	    		</nav>	    		
	    		<h1>
	    			<a class="" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/desktop-header-logo.png" alt="<?php bloginfo('name'); ?>" width="200" />
	    			</a>

					<a class="scrolling-menu-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/scroll-logo.png" alt="<?php bloginfo('name'); ?>" />
					</a>
	    		</h1>
	    		<nav class="social-links-list">		    		
		    		<ul class="social">
		    			<li><a href="https://www.facebook.com/desiblitz" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
		    			<li><a href="https://twitter.com/desiblitz" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
		    			<li><a href="https://plus.google.com/112046945673800482470/about" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		    			<li><a href="https://in.pinterest.com/desiblitz/" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
		    			<li><a href="https://www.youtube.com/user/desiblitzer" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a></li>
		    		</ul>		    		
	    		</nav>
	    	</div> <!-- //logo -->	    	
	    	<?php 
	    		if ( is_active_sidebar( 'header-advert-right' ) ) :
					dynamic_sidebar( 'header-advert-right' );
				endif; 
			?>
	    	
	    </div>		
	   <nav class="menu-bar main-navbar">
		    <div class="container">	
				<div class="display-inline">
					<div class="menu">
					  <a href="#" class="top-menu-link"><span class="menu-global menu-top"></span>
					  <span class="menu-global menu-middle"></span>
					  <span class="menu-global menu-bottom"></span>
					  <!--<i class="fa fa-times"></i>-->
					  </a>
					  
					</div>
					<a class="scrolling-menu-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/scroll-logo.png" alt="<?php bloginfo('name'); ?>" />
					</a>
					<a class="search" href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="social show-in-mobile">
					<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#" title="YouTube"><i class="fa fa-youtube"></i></a></li>
				</ul>					
		    	<?php
					$defaults = array(
						'theme_location'  => 'header-menu',
						'container'       => false,
						'container_id'    => '',
						'menu_class'      => '',
					);
					wp_nav_menu( $defaults );
				?>
				<div class="show-menu-mobile-only">
					<div class="other-menu">
		    			<div class="menu-flex">
		    				<?php
								$defaults = array(
									'theme_location'  => 'header-category-menu',
									'container'       => false,
									'container_id'    => '',
									'menu_class'      => '',
								);
								wp_nav_menu( $defaults );
							?>
							<?php
								$defaults = array(
									'theme_location'  => 'header-page-menu',
									'container'       => false,
									'container_id'    => '',
									'menu_class'      => '',
								);
								wp_nav_menu( $defaults );
							?>												
		    			</div> <!-- //menu-flex -->	 		    			  			
					</div>
				</div>
				
			</div>
	    </nav>		
	    <div class="header-menu detailed-menu"> <!-- //open-search, open-menu -->
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => ART_CULTURE,
						),
					),
				);
				$art_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $art_query->have_posts() ) { ?>
	    	
		    	<div class="arts-culture menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=3&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $art_query->have_posts() ) : $art_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( ART_CULTURE, POST_CATEGORY ); ?>" title="Read More">more <br>arts and <br>culture</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => BRIT_ASIAN,
						),
					),
				);
				$brit_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $brit_query->have_posts() ) { ?>
	    	
		    	<div class="brit-asian menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=19&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $brit_query->have_posts() ) : $brit_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( BRIT_ASIAN, POST_CATEGORY ); ?>" title="Read More">more <br>brit <br>asian</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => FILM_TV,
						),
					),
				);
				$film_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $film_query->have_posts() ) { ?>
	    	
		    	<div class="film-tv menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=7&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $film_query->have_posts() ) : $film_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( FILM_TV, POST_CATEGORY ); ?>" title="Read More">more <br>film & tv</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => FASHION,
						),
					),
				);
				$fashion_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $fashion_query->have_posts() ) { ?>
	    	
		    	<div class="fashion menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=10&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $fashion_query->have_posts() ) : $fashion_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( FASHION, POST_CATEGORY ); ?>" title="Read More">more <br>fashion</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => FOOD,
						),
					),
				);
				$food_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $fashion_query->have_posts() ) { ?>
	    	
		    	<div class="food menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=12&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $food_query->have_posts() ) : $food_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( FOOD, POST_CATEGORY ); ?>" title="Read More">more <br>food</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => HEALTH_BEAUTY,
						),
					),
				);
				$health_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $health_query->have_posts() ) { ?>
	    	
		    	<div class="health-beauty menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=14&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $health_query->have_posts() ) : $health_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( HEALTH_BEAUTY, POST_CATEGORY ); ?>" title="Read More">more <br>health & <br>beauty</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => MUSIC_DANCE,
						),
					),
				);
				$music_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $music_query->have_posts() ) { ?>
	    	
		    	<div class="music-dance menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=9&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $music_query->have_posts() ) : $music_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( MUSIC_DANCE, POST_CATEGORY ); ?>" title="Read More">more <br>music & <br>dance</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => SPORT,
						),
					),
				);
				$sport_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $sport_query->have_posts() ) { ?>
	    	
		    	<div class="sport menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=13&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $sport_query->have_posts() ) : $sport_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( SPORT, POST_CATEGORY ); ?>" title="Read More">more <br>sports</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => TABOO,
						),
					),
				);
				$taboo_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $taboo_query->have_posts() ) { ?>
	    	
		    	<div class="taboo menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=6&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $taboo_query->have_posts() ) : $taboo_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( TABOO, POST_CATEGORY ); ?>" title="Read More">more <br>taboo</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<?php
	    		$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => TRENDS,
						),
					),
				);
				$trends_query = new WP_Query( $args );
	    	?>
	    	<?php if ( $trends_query->have_posts() ) { ?>
	    	
		    	<div class="trends menu-articles" style="display: none;">
		    		<div class="container">
		    			<div class="main-link">
		    				<ul> 
								<?php wp_list_categories('show_option_none=&orderby=id&show_count=0&use_desc_for_title=0&child_of=11&title_li='); ?>
							</ul>
		    			</div>
		    			<div class="article-list">
		    				<?php while ( $trends_query->have_posts() ) : $trends_query->the_post(); ?>
		    				<article>
		    					<figure class="full-width">
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    						<?php the_post_thumbnail('trending-thumb'); ?>
		    						</a>
			    				</figure>
			    				<h4>
				    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			    				</h4>
		    				</article>
		    				<?php endwhile; ?>
		    				<?php wp_reset_query(); ?>
		    			</div> <!--//article-list -->
		    			<a class="more-link" href="<?php echo get_term_link( TRENDS, POST_CATEGORY ); ?>" title="Read More">more <br>trends</a>
		    		</div> <!-- //container -->
		    	</div> <!-- //menu-articles -->
	    	<?php } ?>
	    	
	    	<div class="container">	    		
	    		<div class="menu-container closer-element-box" style="display: none;">
	    			<div class="menu-flex">
	    				<?php
							$defaults = array(
								'theme_location'  => 'header-category-menu',
								'container'       => false,
								'container_id'    => '',
								'menu_class'      => '',
							);
							wp_nav_menu( $defaults );
						?>
						<?php
							$defaults = array(
								'theme_location'  => 'header-page-menu',
								'container'       => false,
								'container_id'    => '',
								'menu_class'      => '',
							);
							wp_nav_menu( $defaults );
						?>
						<a class="close-menu-link" href="#">Close</a>
	    			</div> <!-- //menu-flex -->
	    		</div> <!-- //menu-container -->
				
				<?php 
					//INCLUDE SEARCH FUNCTIONALITY
					include('includes/header_search.php'); 
				?>
				
	    	</div><!-- //container -->
			
	    	
	    </div> <!-- //header-menu -->
    </header>  