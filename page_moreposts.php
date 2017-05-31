<?php
/**
 * Template Name: More Posts Page
 */
?>
<?php get_header(); ?>



<div id="wrapper">
    <h2 class="center-title orange"> <span>WHAT'S NEW</span> <i></i> </h2>
    
    <section class="row flex posts-box">
        <div class="col-1 left">
            <ul class="">
                <?php
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=> 'post',
				'showposts' 	=> 6,
				'post_status'	=> 'publish',
				'order' 		=> 'DESC'
			));
			
			if (have_posts() ) :
				
				while (have_posts() ) : the_post();
					$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
		?>
                <li class="<?php echo $catSlugfootbg; ?>-bg post-listings">
                    <div class=""> 
						<div class="jry">
	                        <a href="<?=get_permalink()?>"><img src="<?=the_post_thumbnail_url();?>" alt="<?=get_the_title()?>" title="<?=get_the_title()?>" width="210" height="103" class=""></a>
    	                    <!--<p class="category"><?php echo display_Grid_subCategory(get_the_ID());  ?></p>-->	
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
                        
                             <a class="homePage_grid sub_cat_link_b" href="<?=the_permalink()?>"><?php
                                $word_count = bavotasan_word_count($postContent);
                                if($word_count < 350){echo '<span class="quick-read-icon"></span>';}
                            ?></a>
                        
                        </p>
                        </div>
                    
                        <h5><a class="anchor" href="<?=get_permalink()?>" title="<?=the_title()?>">
                            <?=the_title();?>
                            </a>
                        	
                            <?php
								$output = '';
								$output = '<div class="go-to-share less-spacing"><ul>';
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
								
								echo $output;
							?>    
                            
                        </h5>
                      
                    </div>
                </li>
                <?php				
					endwhile;
				endif;
			  
			?>
            </ul>
        </div>
        <div class="col-1 right">
            <ul class="">
                <?php
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=>  'post',
				'showposts' 	=>  6,
				'offset' 		=>	6,
				'post_status'	=> 'publish',
				'order' 		=> 'DESC'
			));
			
			if (have_posts() ) :
				
				while (have_posts() ) : the_post();
					$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
		?>
                <li class="<?php echo $catSlugfootbg; ?>-bg post-listings">
                    <div class=""> 
                    	<div class="jry">
                    		<a href="<?=get_permalink()?>"><img src="<?=the_post_thumbnail_url();?>" alt="<?=get_the_title()?>" title="<?=get_the_title()?>" width="210" height="103" class=""></a>
                    
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
                    	<a class="homePage_grid sub_cat_link_b" href="<?=the_permalink()?>"><?php
							$word_count = bavotasan_word_count($postContent);
							if($word_count < 350){echo '<span class="quick-read-icon"></span>';}
						?></a>
					</p>
                    	</div>
                    
                        <h5><a class="anchor" href="<?=get_permalink()?>" title="<?=the_title()?>">
                            <?=the_title();?>
                            </a>
                       	<div class="go-to-share less-spacing">
						<?php
                            $output = '';
                            $output = '<ul>';
                            if(check_shortcode('jwplayer', $popular->id)) {
                                $output .= '<li><a href="#jwplayer-0" title="View Video"><i class="fa fa-youtube-play"></i></a></li>';
                            }
                            if(check_shortcode('ngg_displayed_gallery', $popular->id) || check_shortcode('mceItem', $popular->id) || check_shortcode('nggallery', $popular->id)) {
                                $output .= '<li><a href="#ngg-image-0" title="View Gallery"><i class="fa fa-camera"></i></a></li>';
                            }
                            if(check_shortcode('audio', $popular->id)) {
                                $output .= '<li><a href="#mep_0" title="View Video"><i class="fa fa-volume-up"></i></a></li>';
                            }
                            $output .= '</ul>';
                            
                            echo $output;
                        ?>
                    </div>     
                       </h5>
                        
                    </div>
                </li>
                <?php				
					endwhile;
				endif;
			  
			?>
            </ul>
        </div>
    </section>
    
    <p class="ajax-waiting" style="display:none;"><img src="<?php echo get_template_directory_uri() ?>/images/ajax-loader.gif" /></p>
    
    <section class="row flex more-button" style="display:none;">
    	<div class="col-1">
        	<a href="#">Load More</a>
        </div>
    </section>
    <div class="not-visible total-posts" style="display:none;">1</div>
</div>
<!-- //wrapper -->
<?php get_footer(); ?>
<script>
$(document).ready(function() {
	
	$(window).scroll(function() {
		
		post_blockset =  $(".post-listings").length; /*$(".total-posts").text();*/
		
		if( 
			$(window).scrollTop() + $(window).height() >= ($(document).height() - 375) &&
			$(window).scrollTop() + $(window).height() <  ($(document).height() - 20)
		) {
			
			if( post_blockset < 60 ) {
				$(".ajax-waiting").fadeIn(10);
				jQuery.ajax({
					type:"POST",
					url: "/wp-admin/admin-ajax.php?action=morePosts", // our PHP handler file
					data: {
						'action': 'morePosts',
						'blockset': post_blockset,
					},
					success:function(response){
						$(".posts-box").html(response);
						
						$(".ajax-waiting").fadeOut(10);
					}
				});
				
			} else {
				$(".more-button").fadeIn(100);
			}
	
	   }
	});
	
	
	
	$(".more-button a").click(function() {
		post_blockset = $(".post-listings").length;
		$(".ajax-waiting").fadeIn(10);
		
		jQuery.ajax({
				type:"POST",
				url: "/wp-admin/admin-ajax.php?action=morePosts", // our PHP handler file
				data: {
					'action': 'morePosts',
					'blockset': post_blockset,
				},
				success:function(response){
					$(".posts-box").html(response);
					//alert(post_blockset);
					$(".ajax-waiting").fadeOut(10);
				}
			
			});
		
		
		return false;
    });
	
});
    
	
//	
	
</script>