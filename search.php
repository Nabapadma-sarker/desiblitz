<?php
/*
Template Name: Search Page
*/
 get_header(); ?>
	<div id="wrapper" class="video-page">
	    <section id="videos">
			<h2 class="center-title orange">
		    	<span>Search Results</span>
		    	<i></i>
	    	</h2>		
	    	
	    	<?php
		    	$keyword = (isset($_GET['search'])) ? $_GET['search'] : 0;
				$catSlug = (isset($_GET['filter'])) ? $_GET['filter'] : '';
				if(empty($catSlug)){
					$filterWords = 'none';
				} else {
					$filterWords = $catSlug;
				}
	    	?>
	    	<div class="search-key-row">
				<h3 class="search-results-key fl">You are browsing the search results for <span>"<?php echo $keyword; ?>"</span> with filter <span>"<?php echo $filterWords; ?>"</span></h3>	    	
				<a class="alm-load-more-btn fr" href="#" title="Search Again">Search Again</a>
	    	</div>
	    	<div id="video-results" class="videos-list row flex searchlist">
		    	
			</div><!-- //video-results -->
	    </section>
		
		<section class="row">
			<div id="subCategory_page">
				<div class="load-more-btn">
					<a id="load-more" class="alm-load-more-btn" href="#">Load More</a>
				</div>
			</div>
	    </section>
	    
	</div> <!-- //wrapper -->	
	
<script>
		jQuery(function(){	
			$ = jQuery;
			
			/***************************************
				LOAD SUB CATEGORY POSTS IN AJAX
			***************************************/
			var page = 1;
			var keyword = '<?php echo $keyword; ?>';
			var mainSlug = '<?php echo $catslug; ?>';
		    var loading = true;
		    var $window = $(window);
		    var $content = $('#video-results');
		    
		    var load_posts = function(){
		            $.ajax({
		                type       : "GET",
		                data       : {pageNumber: page, catSlug: mainSlug, searchKey: keyword},
		                dataType   : "html",
		                url        : "<?php echo get_template_directory_uri(); ?>/includes/seach-page-loop.php",
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
		        
		        setTimeout(function(){
			        $("#temp_load").remove();
		        }, 6000);
		        
		        return false;
		    });
		    
		    load_posts();
		    
		}); //END DOCUMENT.READY
		
	</script>
	
	
<?php get_footer(); ?> 