<?php
/**
 * Template Name: Team Page
 */

 get_header(); ?>
	<div class="post-page">		
			<div id="wrapper">			
				<div class="orange-bg page">
					<div class="single-Page">
						<div class="left-column">
							<div class="left-column-content">
								<?php 
									if ( is_active_sidebar( 'page_sidebar' ) ) :
										dynamic_sidebar( 'page_sidebar' );
									endif;
								?>
								
								
							</div>
						</div><!-- //left-column -->							
						<div class="right-column">
							<div class="right-column-content">
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					
									<div class="post-img-big">
										<figure><?php if ( has_post_thumbnail() ) {the_post_thumbnail('single-post');} ?></figure>	
									</div>
									<h2 class="post-name"><?php the_title();?></h2>
									<div class="the-content pagecontent">
										<?php $pullquote = get_post_meta( get_the_ID(), 'pullquote', true );?>
										<?php if(!empty($pullquote)){ ?>
											<p class="pullquote"><?php echo $pullquote; ?></p>
										<?php } ?>
										<span class="paragraph">
										<?php the_content();?>
										</span>
									</div>
								<?php endwhile; ?>
								<div class="section-border"><i></i></div>
								<div class="team-list">
									<?php 
											//get manager
												echo "<h2 class='post-title'>Management & Advertising</h2>";
											foreach ( get_users('role=editor&orderby=registered&include=2') as $manager ) :
											$dbrole = ""; 
											
											$dbrole = '<p class="author-role">Director</p>';	
																													
											if ( get_the_author_meta( 'description', $manager->ID ) ) :
														
													echo '<div class="author-profile">';
												?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															echo get_avatar( get_the_author_meta('email'), 60 );
														} else {														
															$author_img = get_template_directory_uri().'/images/authors/' . $manager->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Managing Director" />';
														}
														echo $dbrole;
														?>													
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $manager->ID ); ?>" title="<?php the_author_meta( 'display_name', $manager->ID ); ?>"><?php the_author_meta( 'display_name', $manager->ID ); ?></a>
														<p><?php the_author_meta( 'email', $manager->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">			
														<?php													
														echo '<p class="author-bio">';
															the_author_meta( 'description', $manager->ID);
														echo '</p></div></div>';
												endif;
											
											endforeach;
											
											// get editors
											echo "<h2 class='post-title'>Editorial</h2>";
											
											// Lead
											
											foreach ( get_users('role=leadeditor&orderby=registered') as $leditor ) : 

												$user = new WP_User( $leditor->ID ); 
												$post_count = count_user_posts( $leditor->ID );
												$dbrole = "";

											if ($post_count > 1) {
										
												$dbrole = '<p class="author-role">Lead Editor</p>';	
																													
												if ( get_the_author_meta( 'description', $leditor->ID ) ) :
												
														echo '<div class="author-profile">';
													?>
												<div class="author-col">	
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															echo get_avatar( get_the_author_meta('email'), 60 );
														} else {															
															$author_img = get_template_directory_uri().'/images/authors/' . $leditor->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Lead Editor" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $leditor->ID ); ?>" title="<?php the_author_meta( 'display_name', $leditor->ID ); ?>"><?php //the_author_meta( 'display_name', $leditor->ID ); ?></a>
														<p><?php the_author_meta( 'email', $leditor->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
														<?php														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $leditor->ID);
														echo '</p></div></div>';
														
														endif;
												
											} 
											
										endforeach;
											//Deputy Editor										
																			
										foreach ( get_users('role=deputy_editor&orderby=registered') as $deditor ) : 

												$user = new WP_User( $deditor->ID ); 
												$post_count = count_user_posts( $deditor->ID );
												$dbrole = "";
												

											if ($post_count > 1) {
												
												$dbrole = '<p class="author-role">Deputy Editor</p>';	
																													
												if ( get_the_author_meta( 'description', $deditor->ID ) ) :
														
														echo '<div class="author-profile">';
													?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															echo get_avatar( get_the_author_meta('email'), 60 );
														} else {															
															$author_img = get_template_directory_uri().'/images/authors/' . $deditor->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Assistant Editor" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $deditor->ID ); ?>" title="<?php the_author_meta( 'display_name', $deditor->ID ); ?>"><?php the_author_meta( 'display_name', $deditor->ID ); ?></a>
														<p><?php the_author_meta( 'email', $deditor->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
												
														<?
														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $deditor->ID);
														echo '</p></div></div>';
														
														endif;
											}
											 
											
										 endforeach; 
																																								
											//Assistant Editor										
																			
										foreach ( get_users('role=junior_editor&orderby=registered') as $jeditor ) : 

												$user = new WP_User( $jeditor->ID ); 
												$post_count = count_user_posts( $jeditor->ID );
												$dbrole = "";
												

											if ($post_count > 1) {
												
												$dbrole = '<p class="author-role">Assistant Editor</p>';	
																													
												if ( get_the_author_meta( 'description', $jeditor->ID ) ) :
														
														echo '<div class="author-profile">';
													?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															echo get_avatar( get_the_author_meta('email'), 60 );
														} else {															
															$author_img = get_template_directory_uri().'/images/authors/' . $jeditor->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Assistant Editor" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $jeditor->ID ); ?>" title="<?php the_author_meta( 'display_name', $jeditor->ID ); ?>"><?php the_author_meta( 'display_name', $jeditor->ID ); ?></a>
														<p><?php the_author_meta( 'email', $jeditor->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
												
														<?php
														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $jeditor->ID);
														echo '</p></div></div>';
														
														endif;
											}
											 
											
										 endforeach; 
										 
										 // Events
										 
										foreach ( get_users('role=editor&orderby=registered&include=235') as $editor ) : 

												$user = new WP_User( $editor->ID ); 
												$post_count = count_user_posts( $editor->ID );
												$dbrole = "";
												

											if ($post_count > 1) {
												
												if ( $editor->ID == 235) 
												$dbrole = '<p class="author-role">Events Editor</p>';	
												
																																	
												if ( get_the_author_meta( 'description', $editor->ID ) ) :
														
														echo '<div class="author-profile">';
																			
													?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															echo get_avatar( get_the_author_meta('email'), 60 );
														} else {															
															$author_img = get_template_directory_uri().'/images/authors/' . $editor->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Editor" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $editor->ID ); ?>" title="<?php the_author_meta( 'display_name', $editor->ID ); ?>"><?php the_author_meta( 'display_name', $editor->ID ); ?></a>
														<p><?php the_author_meta( 'email', $editor->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
												
														<?php														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $editor->ID);
														echo '</p></div></div>';
														
														endif;
											}
											 
											
										 endforeach; 
										 
									
										 // Writers 
											
											echo "<h2 class='post-title'>Writers</h2>";
											
											// Lead Writer
														
										  foreach ( get_users('role=leadwriter&orderby=display_name') as $leadwriter ) : 

												$user = new WP_User( $leadwriter->ID ); 
												$post_count = count_user_posts( $leadwriter->ID );
												$dbrole = "";

											if ($post_count > 10) {
																			
												$dbrole = '<p class="author-role">Lead Writer</p>';	
												
													
													if ( get_the_author_meta( 'description', $leadwriter->ID ) ) :
														
														echo '<div class="author-profile">';
																			
													?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															//echo get_avatar( get_the_author_meta('email'), 60 );
														} else {
															$author_img = get_template_directory_uri().'/images/authors/' . $leadwriter->ID . '.jpg';
															echo '<img src="'.$author_img.'" alt="Lead Writer" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $leadwriter->ID ); ?>" title="<?php the_author_meta( 'display_name', $leadwriter->ID ); ?>"><?php the_author_meta( 'display_name', $leadwriter->ID ); ?></a>
														<p><?php //the_author_meta( 'email', $leadwriter->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
												
														<?php														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $leadwriter->ID);
														echo '</p></div></div>';
														
														endif;
												?>
									   
											<?php 
											}
										
										 endforeach;  
										 
										 // Writer				 
										
										 
										 foreach ( get_users('role=writer&orderby=display_name') as $writer ) : 

												$user = new WP_User( $writer->ID ); 
												$post_count = count_user_posts( $writer->ID );
												$dbrole = "";

											if ($post_count > 10) {
																			
												$dbrole = '<p class="author-role">Writer</p>';	
												
													
													if ( get_the_author_meta( 'description', $writer->ID ) ) :
														
														echo '<div class="author-profile">';
																			
													?>
												<div class="author-col">
													<div class="author-img">
														<?php
															if(validate_gravatar(get_the_author_meta('email'))){
															//echo get_avatar( get_the_author_meta('email'), 60 );
														} else {
															
															//$author = the_author_meta( 'display_name', $writer->ID );
															$db_author_id = get_the_author_ID();
															$author_img = get_template_directory_uri().'/images/authors/' . $writer->ID . '.jpg';
															echo '<img src="'. $author_img. '" alt="Writer" />';
														}
														echo $dbrole; 
														?>
													</div>
													<div class="author-name-info">
														<a href="<?php echo get_author_posts_url( $writer->ID ); ?>" title="<?php the_author_meta( 'display_name', $writer->ID ); ?>"><?php the_author_meta( 'display_name', $writer->ID ); ?></a>
														<p><?php //the_author_meta( 'email', $writer->ID ); ?></p>
													</div>
												</div>
												<div class="description-div">
														<?php														
														echo '<p class="author-bio">';
															the_author_meta( 'description', $writer->ID);
														echo '</p></div></div>';
														
														endif;
												?>
									   
											<?php 
											}
										
										 endforeach;						 
										 

										 ?>
								</div>
							</div>
						</div><!-- //right-column -->						
					</div><!-- //flex -->	
					
					<div class="divider-border"></div>
					<section class="flex">
						<div class="full-width-team orange-bg">	
						   <div style="clear:both;"></div>
							<?php 
								if ( is_active_sidebar( 'home_trending_posts' ) ) :
									dynamic_sidebar( 'home_trending_posts' );
								endif; 
							?>
							<div class="divider-border"></div>
							<div style="clear:both;"></div>
							<h2 class="section-title orange-bg">
								<span>LATEST VIDEOS</span><i></i>
							</h2>
							<section class="flex latest-video">
								<div class="col-3 more-link-container orange"><a class="more-badge" href="" title="Read More">more videos</a></div>
								<!--Code for this block is in site.js  file-->
							</section> <!-- //latest-video -->
						</div>
					</section>
					<!--fullwidth_ad-->
						<?php 
							if ( is_active_sidebar( 'fullwidth_ad' ) ) :
								dynamic_sidebar( 'fullwidth_ad' );
							endif; 
						?>
						<!--//fullwidth_ad-->					
					
				</div>	
			</div> <!-- //wrapper -->		
	</div>
<?php get_footer(); ?>  