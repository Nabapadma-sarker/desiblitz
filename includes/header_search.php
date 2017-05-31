		<div class="menu-search closer-element-box" style="display: none;">
			<form>
				<section class="filter">
					<h4>Filter your search</h4>
					<ul class="filter_checkbox">
						
						<?php
							$terms = get_terms( POST_CATEGORY, 'exclude=15411,4423,5685' );
							
							foreach($terms as $term){
								if($term->parent == 0){
									echo '<li><input type="checkbox" name="'.$term->name.'" id="'.$term->term_id.'" value="'.$term->slug.'" /> <label for="'.$term->term_id.'">'.$term->name.'</label></li>';
								}
							}
						?>
						
					</ul>
				</section> <!--// .filter -->
				
				<section class="ajax-search-lym">
					<hgroup>
						<h3>Search</h3>
						<input id="search_txtbox" type="search" placeholder="Keyword"/>
						<input id="submit_txtbox" type="submit" value="Search" />
					</hgroup>
					
					<div id="ajax_search_results" class="search-results">
						
						<!--// AJAX RESULTS WILL  DISPLAY HERE -->
						
					</div> <!-- //search-result -->
					
					<div id="wp-paginate">
						<div class="total-pages">
							<!-- <p>1-12 of 20 Results </p> -->
						</div>
						<div class="navigation">
							<!-- <a href="#" title="Previous Page">Prev</a> -->
							<a id="more_results" href="#" title="More Results">More Results</a>
						</div>
					</div> <!-- //#wp-paginate -->
					
				</section>
			</form>
			<a class="close-menu-link" href="#">Close</a>
		</div> <!-- //menu-search -->	    		
	<script>	
		jQuery(document).ready(function( $ ) {
			
			/***************************************
				LOAD SUB CATEGORY POSTS IN AJAX
			***************************************/
		    
		    function inHdrAjax(){
			    var searchKeyword = $('#search_txtbox').val();
				var checkedCategory = [];
				var queryString = '';
				var loading = true;
				var $window = $(window);
				var $content = $('#ajax_search_results');
				
		    
		    
			  	$('.filter_checkbox li').each(function(){
			  		var checkedVal = $(this).find('input:checked').val();
			  		if( typeof checkedVal != "undefined" ){
				  		checkedCategory.push(checkedVal);	
			  		}
			  	});
			  	
			  	queryString = '<?php bloginfo('url') ?>/search?search='+searchKeyword+'&filter='+checkedCategory+'';
			  	$('#more_results').attr('href', queryString);
			  	console.log(queryString);
			  	
			  	
			  	$.ajax({
	                type       : "GET",
	                data       : {keyword: searchKeyword, catSlug: checkedCategory},
	                dataType   : "html",
	                url        : "<?php echo get_template_directory_uri(); ?>//includes/search-loop.php",
	                beforeSend : function(){
	                	$("#temp_load").remove();
                        $content.prepend('<div id="temp_load" style="text-align:center; margin: 1em 0 0 0;">\
                            	<img style="display:inline" src="https://www.desiblitz.com/wp-content/themes/desiblitz-v2/images/ajax-loader.gif" />\
                            </div>');
	                },
	                success    : function(data){
	                	$data = $(data);
	                	//console.log($data);
	                    $data.hide();
	                    
	                    $content.empty().append($data);
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
			  	
			  	//console.log(checkedCategory);
			  	//console.log(searchKeyword);
		    } //inHdrAjax
		    
		    $('#search_txtbox').keyup(function() {
			  	inHdrAjax();
			  	$('#more_results').show();
			});
			
			$('#submit_txtbox').click(function() {
			  	inHdrAjax();			  	
			  	return false;
			});
		    
		});
</script>









