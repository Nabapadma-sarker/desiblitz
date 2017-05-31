<?php
/**
 * Template Name: All News
 */
?>
<?php get_header(); ?>
	<div id="wrapper" class="video-page">
	    <section id="videos">
			<h2 class="center-title orange">
		    	<span>VIDEOS</span>
		    	<i></i>
	    	</h2>		
			<div id="video-results" class="videos-list row flex">
				<!--Code for this block is in site.js  file-->
				<div id="temp_load"><img style="display:inline" src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" /></div>
			</div>		
	    </section>
		
		<section class="row">
			<div class="advert-area">
				<a href="#" class="alm-load-more-btn">LOAD MORE</a>
			</div>
	    </section>
	    
	    <?php 
			if ( is_active_sidebar( 'video-page-widget' ) ) :
				dynamic_sidebar( 'video-page-widget' );
			endif; 
		?>
		
	</div> <!-- //wrapper -->	
	
	<script>
		(function($) {
	
			$(document).ready(function(){	
				/********************************************
					FETCH AND DISPLAY VIDEO FROM YOUTUBE
				********************************************/
				
				var channelName='desiblitzer';
				var vidResults = 18;
				var nextPageToken;
				var $content = $('#video-results');
				
				$('.alm-load-more-btn').click(function() {
					$content.append('<div id="temp_load">\
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" />\
								</div>');
					loadVideos();
					return false;
				});
				
				function loadVideos(){
					$.get(
						"https://www.googleapis.com/youtube/v3/channels",
						{
							part: 'contentDetails',
							forUsername: channelName,
							key: 'AIzaSyCRV1lScjY8WEQA7ZcT4CoeJIF7xoCqdxM'},			
							function(data){
								$.each(data.items, function(i , item){
								pid = item.contentDetails.relatedPlaylists.uploads;
								getvids(pid, vidResults);
							})
						}
					); //GET
				} //loadVideos()
				
				loadVideos();
				
				function getvids(pid, results){
				
					$.get(
							"https://www.googleapis.com/youtube/v3/playlistItems",{
							part: 'snippet',
							maxResults: results,
							playlistId: pid,
							pageToken: nextPageToken,
							key: 'AIzaSyCRV1lScjY8WEQA7ZcT4CoeJIF7xoCqdxM'},				
							function(data){
								var output;
								var Title;		
								console.log(data);
								nextPageToken = data.nextPageToken;
								var videoResults = data.items;
								$.each(videoResults, function(i , item){							
									var videTitle = item.snippet.title;
									var videoThumb=item.snippet.thumbnails.default.url;
									var link = item.snippet.resourceId.videoId;
									//console.log(link);
									
										  
									var output = '<div class="col-2">';
									output += '<article class="trend-overlay flex">';
									output += '<div class="content"><figure>';
									output += '<a class="fancybox" href=" https://www.youtube.com/watch?v='+link+' " title="'+videTitle+'"><img src=" '+videoThumb+' "/></a>';
									output += '</figure><h3>';
									output += '<a class="fancybox" href=" https://www.youtube.com/watch?v='+link+' " title="'+videTitle+'">"'+videTitle+'"</a>';
									output += '</h3></figure>';
									output += '</div>';
									output += '</article>';
									output += '</div>';
									
									$('#temp_load').remove();
									$content.append(output);
									//$('.flex.cat-video-list').prepend(output);
								});
											
							}
					);
						
				} //getvids
			}); //DOCUMENT.READY
		}(jQuery)); //END jQUERY FUNCTION
	</script>
<?php get_footer(); ?>  