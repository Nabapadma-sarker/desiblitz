<?php get_header(); ?>
	<!---TITLE ROW--->
	<?php include('includes/category-title.php'); ?>
	<!---/TITLE ROW--->
	
		<div id="subCategory_page">
			<div class="load-more-btn">
				<a id="load-more" class="alm-load-more-btn" href="#" style="display:none;">Load More</a>
			</div>
		</div>
	
	</div> <!-- //wrapper -->
	
	<script>
		jQuery(document).ready(function( $ ) {
			
			/***************************************
				LOAD SUB CATEGORY POSTS IN AJAX
			***************************************/
			var page = 1;
			var grid = 1;
			var slug = '<?php echo $childTaxSlug; ?>';
			var mainSlug = '<?php echo $catslug; ?>';
		    var loading = true;
		    var $window = $(window);
		    var $content = $('#subCategory_page .load-more-btn');
		    
		    var load_posts = function(){
		            $.ajax({
		                type       : "GET",
		                data       : {gridNum: grid, pageNumber: page, catSlug: slug, parentSlug: mainSlug},
		                dataType   : "html",
		                url        : "<?php echo get_template_directory_uri(); ?>/includes/subcat-loop.php",
		                beforeSend : function(){
		                    if(page != 1){
		                        $content.before('<div id="temp_load" style="text-align:center; margin: 1em 0 0 0;">\
		                            	<img style="display:inline" src="https://www.desiblitz.com/wp-content/themes/desiblitz-v2/images/ajax-loader.gif" />\
		                            </div>');
		                    }
		                },
		                success    : function(data){
		                	$data = $(data);
		                	console.log('success');
		                	console.log($data);
		                    $data.hide();
		                    $content.before($data);
		                    $data.fadeIn(800, function(){
		                        $("#temp_load").remove();
		                        loading = false;
		                    });
		                },
		                error     : function(jqXHR, textStatus, errorThrown) {
		                    $("#temp_load").remove();
		                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
		                }
					});// END AJAX
					console.log('Grid: '+grid);
		    } //END LOAD_POSTS
		    
		    $('#load-more').click(function(){
		        if(!loading) {
			        loading = true;
			        page++;
			        
			        load_posts();
			        
			        if(grid <= 4){
				    	grid++;   
			        } else {
				        grid = 1;
			        }
			        
		        }//IF NOT LOADING
		        
		        setTimeout(function(){
		        	if($("#temp_load").size() > 10){
			        	alert('No more articles to display');
			        	$('#load-more').fadeOut();
		        	}
			        $("#temp_load").remove();
		        }, 6000);
		        
		        return false;
		    });
		    
		    load_posts();
		    grid++;
			
		}); //END DOCUMENT.READY
		
	</script>
<?php get_footer(); ?> 
<script>
	$(document).ready(function() {
		//post_blockset =  $("section").length;
		
        $(window).scroll(function() {	
			post_blockset =  $(".row.-section").length;
			//alert(post_blockset);
			
			  if(  $(window).scrollTop() + $(window).height() >= ($(document).height()-270) &&
					$(window).scrollTop() + $(window).height() < ($(document).height() - 10) ) {
				   
				   if( post_blockset < 5 ) {
						$("#load-more").trigger("click");
						post_blockset++;
						
				   }  else {
						 $("#load-more").fadeIn(10); 
					}
			   }
		});
    });
</script>