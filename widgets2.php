<?php
	
	/*******************************************
		Taboola 1 Widget: Register
	********************************************/
	function reg_cus_taboola_widget() {
		register_widget( 'cus_taboola_widget' );
	}
	add_action( 'widgets_init', 'reg_cus_taboola_widget' );	
	/********************************************
		Taboola 1 Widget: Body
	*********************************************/
	class cus_taboola_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_taboola_widget', // Base ID
				__('(DESIblitz) Taboola 1' ), // Name
				array( 'description' => __( 'Display Taboola 1' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li>
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div id="taboola-below-article-thumbnails"></div>
				<script type="text/javascript">
					window._taboola = window._taboola || [];
					_taboola.push({
						mode: 'thumbnails-a',
						container: 'taboola-below-article-thumbnails',
						placement: 'Below Article Thumbnails',
						target_type: 'mix'
					});
                </script>
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
			} else {
				$widget_title = __( 'Taboola 1' );
			}
	?>
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input 	id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
                    	class="widefat"  type="text" 
                    	name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
                    	value="<?php echo esc_html($widget_title); ?>" />
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	/*******************************************
		Taboola 2 Widget: Register
	********************************************/
	function reg_cus_taboola2_widget() {
		register_widget( 'cus_taboola2_widget' );
	}
	add_action( 'widgets_init', 'reg_cus_taboola2_widget' );	
	/********************************************
		Taboola 2 Widget: Code
	*********************************************/
	class cus_taboola2_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_taboola2_widget', // Base ID
				__('(DESIblitz) Taboola 2' ), // Name
				array( 'description' => __( 'Display Taboola 2' ), ) // Args
			);
		}
		
	
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li>
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div id="taboola-below-article-thumbnails-2nd"></div>
				<script type="text/javascript">
					window._taboola = window._taboola || [];
					_taboola.push({
						mode: 'organic-thumbnails-a',
						container: 'taboola-below-article-thumbnails-2nd',
						placement: 'Below Article Thumbnails 2nd',
						target_type: 'mix'
					});
					</script>
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) 
		{
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
			} else {
				$widget_title = __( 'Taboola 2' );
			}
		?>	
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input 
                    id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
                    class="widefat"  type="text" 
                    name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
                    value="<?php echo esc_html($widget_title); ?>" />
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

		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}

	} // WIDGET CLASS

	/*************************************************/
	
	
	
	/*******************************************
		Taboola 1 Sidebar Widget: Register
	********************************************/
	function reg_taboola_sidebar_widget() {
		register_widget( 'taboola_sidebar_widget' );
	}
	add_action( 'widgets_init', 'reg_taboola_sidebar_widget' );	
	/********************************************
		Taboola 1 Sidebar Widget: Code
	*********************************************/
	class taboola_sidebar_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'taboola_sidebar_widget', // Base ID
				__('(DESIblitz) Taboola 1 Sidebar' ), // Name
				array( 'description' => __( 'Display the.' ), ) // Args
			);
		}
		
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li>
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div id="taboola-left-rail-thumbnails"></div>
				<script type="text/javascript">
					window._taboola = window._taboola || [];
					_taboola.push({
						mode: 'organic-thumbnails-lr',
						container: 'taboola-left-rail-thumbnails',
						placement: 'Left Rail Thumbnails',
						target_type: 'mix'
					});
				</script>
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];	
			} else {
				$widget_title = __( '(DESIblitz) Taboola 1 Sidebar' );
			}
			?>
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input 	id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
                    	class="widefat"  type="text" 
                    	name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
                    	value="<?php echo esc_html($widget_title); ?>" />
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	/*******************************************
		Taboola 2 Sidebar Widget: Register
	********************************************/
	function reg_taboola_sidebar2_widget() {
		register_widget( 'sidebar_taboola2_widget' );
	}
	add_action( 'widgets_init', 'reg_taboola_sidebar2_widget' );	
	/********************************************
		Taboola 2 Sidebar Widget: body
	*********************************************/
	class sidebar_taboola2_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'sidebar_taboola2_widget', // Base ID
				__('(DESIblitz) Taboola 2 Sidebar' ), // Name
				array( 'description' => __( 'Display the.' ), ) // Args
			);
		}

		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li class="taboola-sidebar-2nd">
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div id="taboola-left-rail-thumbnails-2nd"></div>
				<script type="text/javascript">
					window._taboola = window._taboola || [];
					_taboola.push({
						mode: 'thumbnails-lr',
						container: 'taboola-left-rail-thumbnails-2nd',
						placement: 'Left Rail Thumbnails 2nd',
						target_type: 'mix'
					});
				</script>
			</li>	
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];	
			} else {
				$widget_title = __( '(DESIblitz) Taboola 2 Sidebar' );
			}
			?>
				<p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
							<?php _e( 'Widget Title:' ); ?>
					</label> 
					<input  id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
							class="widefat"  type="text" 
							name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
							value="<?php echo esc_html($widget_title); ?>" />
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	/****************************************
		Taboola Mobile Shortcode
	******************************************/
	function taboola_mobile( $atts )
	{	
		return '<div id="taboola-mobile-mid-article-thumbnails"></div>
		<script type="text/javascript">
			window._taboola = window._taboola || [];
			_taboola.push({
				mode: "thumbnails-b",
				container: "taboola-mobile-mid-article-thumbnails",
				placement: "Mobile Mid Article Thumbnails",
				target_type: "mix"
			});
        </script>';   
	}
	add_shortcode( 'taboola-mobile', 'taboola_mobile' );
	/*********************************************************************/
	
	
	
	/*******************************************
		Outbrain Widget: Register
	********************************************/
	function reg_outbrain_widget() {
		register_widget( 'outbrain_widget' );
	}
	add_action( 'widgets_init', 'reg_outbrain_widget' );	
	/********************************************
		Outbrain Widget: Body
	*********************************************/
	class outbrain_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'outbrain_widget', // Base ID
				__('(DESIblitz) Outbrain' ), // Name
				array( 'description' => __( 'Display Outbrain Contents' ), ) // Args
			);
		}
	
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) 
		{
			$widget_title 		= $instance['widget_title'];
			//$outbrain_template 	= $instance['outbrain_template'];
			//$widget_id 			= $instance['widget_id'];
		?>
	    	<li id="outbrainContainer">
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div class="OUTBRAIN" data-widget-id= "TF_6" data-src = "" data-ob-template="DESIblitz"
></div>	
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];
			} else {
				$widget_title = __( '(DESIblitz) Outbrain' );
			}
			
			
			/*if ( isset( $instance[ 'outbrain_template' ]) ) {
				$outbrain_template = $instance['outbrain_template'];
			} else {
				$outbrain_template = __( '0' );
			}
			
			
			if ( isset( $instance[ 'widget_id' ]) ) {
				$widget_id = $instance['widget_id'];
			} else {
				$widget_id = __( '0' );
			}*/
			
			?>
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input  id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
	                    class="widefat"  type="text" 
    	                name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
        	            value="<?php echo esc_html($widget_title); ?>" />
            </p>
                
                <!--Out brain Template--
                <p>
					<label for="<?php echo $this->get_field_id( 'outbrain_template' ); ?>">
							<?php _e( 'Outbrain Template:' ); ?>
					</label> 
					<input  id="<?php echo $this->get_field_id( 'outbrain_template' ); ?>" 
							class="widefat" type="text" 
							name="<?php echo $this->get_field_name( 'outbrain_template' ); ?>" 
							value="<?php echo esc_html($outbrain_template); ?>" />
				</p>
                
                
                <!-- Outbrain Widget ID --
                <p>
					<label 
						for="<?php echo $this->get_field_id( 'widget_id' ); ?>">
							<?php _e( 'Outbrain Widget ID:' ); ?>
					</label> 
					<input  id="<?php echo $this->get_field_id( 'widget_id' ); ?>" 
							class="widefat"  type="text" 
							name="<?php echo $this->get_field_name( 'widget_id' ); ?>" 
							value="<?php echo esc_html($widget_id); ?>" />
				</p>
                <!-- End Outbrain -->
				
		<?php 
		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */

		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			
			/*$instance['outbrain_template'] = ( ! empty( $new_instance['outbrain_template'] ) ) ? ( $new_instance['outbrain_template'] ) : '';
			
			$instance['widget_id'] = ( ! empty( $new_instance['widget_id'] ) ) ? ( $new_instance['widget_id'] ) : '';*/
			
			return $instance;
		}

	} // WIDGET CLASS
	/*************************************************/
	
	
	
	/*******************************************
		Outbrain Sidebar Widget: Register
	********************************************/
	function reg_outbrain_sidebar_widget() {
		register_widget( 'outbrain_sidebar_widget' );
	}
	add_action( 'widgets_init', 'reg_outbrain_sidebar_widget' );	
	/********************************************
		Outbrain Sidebar Widget: Body
	*********************************************/
	class outbrain_sidebar_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'outbrain_sidebar_widget', // Base ID
				__('(DESIblitz) Outbrain Sidebar' ), // Name
				array( 'description' => __( 'Display the (DESIblitz) Outbrain Sidebar.' ), ) // Args
			);
		}
		
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li>
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <div class="OUTBRAIN sidebar-outbrain" data-widget-id= "TS_1" data-src = "" data-ob-template="DESIblitz"
></div>
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];	
			} else {
				$widget_title = __( 'Outbrain Sidebar' );
			}
			?>
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input  id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
	                    class="widefat"  type="text" 
    	                name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
        	            value="<?php echo esc_html($widget_title); ?>" />
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

		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	/*******************************************
		Google Matched Content Widget: Register
	********************************************/
	function reg_google_matched_ad_widget() {
		register_widget( 'google_matched_ad_widget' );
	}
	add_action( 'widgets_init', 'reg_google_matched_ad_widget' );
	/********************************************
		Google Matched Content Widgett: Body
	*********************************************/
	class google_matched_ad_widget extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'google_matched_ad_widget', // Base ID
				__('(DESIblitz) Google Matched Content to the Wordpress' ), // Name
				array( 'description' => __( 'Display Google Matched Content.' ), ) // Args
			);
		}
	
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			$widget_title = $instance['widget_title']; 
		?>
	    	<li>
	    		<h2 class="section-title capitalize"><span <?php 
                	if( empty(esc_html_e($widget_title) ) )  { echo 'style="background:transparent !important;"'; }
                    
                    ?>><?php esc_html_e($widget_title)?></span><i></i></h2>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-3241871860118891" data-ad-slot="3547800964"></ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
			</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
			if ( isset( $instance[ 'widget_title' ]) ) {
				$widget_title = $instance['widget_title'];	
			} else {
				$widget_title = __( 'Google Matched Contents' );
			}
			?>
            <p>
                <label 
                    for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                        <?php _e( 'Widget Title:' ); ?>
                </label> 
                <input  id="<?php echo $this->get_field_id( 'widget_title' ); ?>" 
	                    class="widefat"  type="text" 
    	                name="<?php echo $this->get_field_name( 'widget_title' ); ?>" 
        	            value="<?php echo esc_html($widget_title); ?>" />
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

		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	wp_enqueue_style('custome-stylesheet', get_stylesheet_directory_uri() . '/css/style_custom.css',false);
	
	
	
	
	
	
	/*******************************************************************
		SIDEBARS/Widget Location: Homepage Banner Right side Latest (BRSL)
	/********************************************************************/
	
	
	function banner_right_latest() {		
		register_sidebar( array(			
					'name' => 'Banner Right Latest Posts',
					'id' => 'banner-right-latest',
					));	
	}	
	add_action( 'widgets_init', 'banner_right_latest' );
	
	
	function banner_lefttop_latest() {		
		register_sidebar( array(			
					'name' => 'Banner Left Top Latest Post',
					'id' => 'banner-lefttop-latest',
					));	
	}	
	add_action( 'widgets_init', 'banner_lefttop_latest' );
	
	
	
	
	
	/*******************************************
		(BRSL): Register
	********************************************/
	function reg_banner_right() {
		register_widget( 'cus_banner_right' );
	}
	add_action( 'widgets_init', 'reg_banner_right' );	
	/********************************************
		(BRSL): Body
	*********************************************/
	class cus_banner_right extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_banner_right', // Base ID
				__('(DESIblitz) What New Grid' ), // Name
				array( 'description' => __( '' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {	
		
			$no_of_post = $instance['no_of_post'];
			
			$no_of_post_no = apply_filters( 'no_of_post_no', $no_of_post, $instance, $this );
			$no_of_half_post = $no_of_post_no / 2;
		?>
        <div class="home-banner-element">
            <div class="flex">
        	 <ul class="home-reads-list latest-posts-group">
        <?php
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=> 'post',
				'showposts' 	=> $no_of_half_post,
				'offset'		=> 1,
				'post_status'	=> 'publish',
				'order' 		=> 'DESC'
			));
			
			if (have_posts() ) :
				$counter = 1;
				while (have_posts() ) : the_post();
					//if( $counter++ == 1 ) continue;
					$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
		?>
			<li class="home-right-posts <?php echo $catSlugfootbg; ?>-bg">
				<div class="post-thum-bax content transparent-bg">
					
                    <div class="category-psl">
                    <a href="<?=get_permalink()?>"><img src="<?=the_post_thumbnail_url();?>" alt="<?=get_the_title()?>" title="<?=get_the_title()?>" width="210" height="103" class="crp_thumb crp_featured"></a>
                    
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
                    <!--<p class="category"><?php echo display_Grid_subCategory(get_the_ID()); ?></p>-->
                    
					<h5>
                    	<a class="anchor" href="<?=get_permalink()?>" title="<?=the_title()?>"><?=the_title();?></a>
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
            
            <ul class="home-reads-list latest-posts-group">
        <?php
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=> 'post',
				'showposts' 	=> $no_of_half_post,
				'offset'		=> ($no_of_half_post+1),
				'post_status'	=> 'publish',
				'order' 		=> 'DESC'
			));
			
			if (have_posts() ) :
				$counter = 1;
				while (have_posts() ) : the_post();
					//if( $counter++ == 1 ) continue;
					$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
		?>
			<li class="home-right-posts <?php echo $catSlugfootbg; ?>-bg">
				<div class="post-thum-bax content transparent-bg">
                	 <div class="category-psl">
						<a href="<?=get_permalink()?>"><img src="<?=the_post_thumbnail_url();?>" alt="<?=get_the_title()?>" title="<?=get_the_title()?>" width="210" height="103" class="crp_thumb crp_featured"></a>
                   
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
                    
					<h5>
                    	<a class="anchor" href="<?=get_permalink()?>" title="<?=the_title()?>"><?=the_title();?></a>
                    		
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
         <div class="home-banner-more">
	            <a href="<?php echo get_site_url(); ?>/more-posts">More</a>
            </div>
         </div>
           
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
         if ( isset( $instance[ 'no_of_post' ]) ) {				
				$no_of_post = $instance['no_of_post'];
			}
			else {				
				$no_of_post = 6;
			}
			?>
			
			<p>
				<label 
					for="<?php echo $this->get_field_id( 'no_of_post' ); ?>">
						<?php _e( 'Show up to:' ); ?>
				</label> <br/>
				<input id="<?php echo $this->get_field_id( 'no_of_post' ); ?>" class="widefat" type="number" min="6" max="20" step="2" name="<?php echo $this->get_field_name( 'no_of_post' ); ?>" value="<?php echo esc_html($no_of_post); ?>" style="width: 55px;" />
                <?php _e( 'posts' ); ?>
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['no_of_post'] = ( ! empty( $new_instance['no_of_post'] ) ) ? ( $new_instance['no_of_post'] ) : 6;
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	
	/*******************************************
		(BRSL): Register
	********************************************/
	function reg_jobs_sidebar() {
		register_widget( 'cus_jobs_sidebar' );
	}
	add_action( 'widgets_init', 'reg_jobs_sidebar' );	
	/********************************************
		(BRSL): Body
	*********************************************/
	class cus_jobs_sidebar extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_jobs_sidebar', // Base ID
				__('(DESIblitz) Sidebar Jobs Widget' ), // Name
				array( 'description' => __( 'jobs will show on sidebar' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {	
		    $widget_title = $instance['widget_title'];
			$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			
			$no_of_post_sidebar_no = apply_filters( 'no_of_post_sidebar', $no_of_post_sidebar, $instance, $this );
			
		?>
		<li class="widget">
		<?php if($widget_title) {?>
		 <h2 class="center-title">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			<?php }?>
       <script type='text/javascript'>
			var embeddable_job_widget_options = {
				'script_url' : 'https://www.desiblitz.com/jobs/?embed=wp_job_manager_widget',
				'keywords'   : '',
				'location'   : '',
				'categories' : '',
				'job_types'  : '',
				'per_page'   : '<?php echo $no_of_post_sidebar_no; ?>',
				'pagination' : '0'
			};
		</script>

		<script type='text/javascript' src='https://www.desiblitz.com/jobs/wp-content/plugins/wp-job-manager-embeddable-job-

		widget/assets/js/embed.js'></script>
        <div class="textwidget">
		<div class="sidebar-widget">

		<div id="embeddable-job-widget">
			<div id="embeddable-job-widget-content"></div>
		</div>
		<button class="next"></button>
		<a href="https://www.desiblitz.com/jobs" class="alm-load-more-btn" target="_blank">MORE JOBS</a>
		<button class="prev"></button>
        <input type="hidden" class="no_of_post_sidebar_b" value="<?php echo $no_of_post_sidebar_no; ?>"> 
		</div>
		</div>
		<script>
		setTimeout( function(){ 
			 $(".sidebar-widget ul.embeddable-job-widget-listings li").each(function() {
			var text = $(this).html();
			text = text.replace("|", "");
			$(this).html(text);
			
		});
  }  , 1000 );
			
		
 var ulheight = 0;
 var slide_count = $('.sidebar-widget .no_of_post_sidebar_b').val();
 var steps = slide_count/3; 
 var stepsheight = 0; 
  var slide_index = 0;

  // Listen for click of prev button
  $(".sidebar-widget .prev").click(function() {
    console.log("prev button clicked "+slide_index);
	ulheight=$('.sidebar-widget ul.embeddable-job-widget-listings').height();	
    slide(slide_index - 1);
  });

  // Listen for click of next button
  $(".sidebar-widget .next").click(function() {
    console.log("next button clicked "+slide_index);
	ulheight=$('.sidebar-widget ul.embeddable-job-widget-listings').height();
    slide(slide_index + 1);
  });

  function slide(new_slide_index) {
    if(new_slide_index < 0 || new_slide_index >= steps) {
	return; 
	}
    stepsheight = (ulheight / steps);
	margin_left_pc = (new_slide_index*(-stepsheight))+"px";
    $('.sidebar-widget ul.embeddable-job-widget-listings').animate({"margin-top": margin_left_pc}, 400, function() {
	 slide_index = new_slide_index;
    });

  }
		</script>
		</li>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
         if ( isset( $instance[ 'no_of_post_sidebar' ]) ) {				
				$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			}
			else {				
				$no_of_post_sidebar = 6;
			}
			
			if ( isset( $instance[ 'widget_title' ]) ) {				
				$widget_title = $instance['widget_title'];
			}
			else {				
				$widget_title = __( 'Jobs' );
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
					for="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>">
						<?php _e( 'Show up to:' ); ?>
				</label> <br/>
				<input id="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>" class="widefat" type="number" min="6" max="15" step="3" name="<?php echo $this->get_field_name( 'no_of_post_sidebar' ); ?>" value="<?php echo esc_html($no_of_post_sidebar); ?>" style="width: 55px;" />
                <?php _e( 'jobs' ); ?>
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['no_of_post_sidebar'] = ( ! empty( $new_instance['no_of_post_sidebar'] ) ) ? ( $new_instance['no_of_post_sidebar'] ) : 6;
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
		
	/*******************************************
		(BRSL): Register
	********************************************/
	function reg_jobs_home() {
		register_widget( 'cus_jobs_home' );
	}
	add_action( 'widgets_init', 'reg_jobs_home' );	
	/********************************************
		(BRSL): Body
	*********************************************/
	class cus_jobs_home extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_jobs_home', // Base ID
				__('(DESIblitz) Homepage Jobs Widget' ), // Name
				array( 'description' => __( 'jobs will show on Hompage' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {	
		    $widget_title = $instance['widget_title'];
			$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			
			$no_of_post_sidebar_no = apply_filters( 'no_of_post_sidebar', $no_of_post_sidebar, $instance, $this );
			
		?>
		<div class="home-banner-element noLeftBorder">
		 <?php if($widget_title) {?>
		 <h2 class="center-title">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			<?php } ?>
		<div class="job_logo">	
		   <img src="<?php echo get_template_directory_uri() . '/images/job-logo.png';?>" />
		   <span>where diversity in recruitment matters</span>
		</div>	
       <script type='text/javascript'>
			var embeddable_job_widget_options = {
				'script_url' : 'https://www.desiblitz.com/jobs/?embed=wp_job_manager_widget',
				'keywords'   : '',
				'location'   : '',
				'categories' : '',
				'job_types'  : '',
				'per_page'   : '<?php echo $no_of_post_sidebar_no; ?>',
				'pagination' : '0'
			};
		</script>

		<script type='text/javascript' src='https://www.desiblitz.com/jobs/wp-content/plugins/wp-job-manager-embeddable-job-

		widget/assets/js/embed.js'></script>
        <div class="textwidget">
		<div class="homepage-widget">

		<div id="embeddable-job-widget">
			<div id="embeddable-job-widget-content"></div>
			<button class="next"></button>
			<button class="prev"></button>
		</div>		
		<a href="https://www.desiblitz.com/jobs" class="alm-load-more-btn" target="_blank">MORE JOBS</a>		
        <input type="hidden" class="no_of_post_sidebar_b" value="<?php echo $no_of_post_sidebar_no; ?>"> 
		</div>
		</div>
<script>
		jQuery(document).ready(function( $ ) {				 
setTimeout( function(){ 
			 $(".homepage-widget ul.embeddable-job-widget-listings li").each(function() {
			var text = $(this).html();
			text = text.replace("|", "");
			$(this).html(text);
			var ulheights=$('.homepage-widget ul.embeddable-job-widget-listings').height();	
			var cunt= $('.homepage-widget .no_of_post_sidebar_b').val();
			cunt =(cunt/3);	
			ulheights=(ulheights/cunt);	
			console.log("ulheights "+ulheights);
			$('.homepage-widget .embeddable-job-widget-content').height(ulheights);
		});
  }  , 1000 );
			
		
 var ulheight = 0;
 var slide_count = $('.no_of_post_sidebar_b').val();
 var steps = slide_count/3; 
 var stepsheight = 0; 
  var slide_index = 0;

  // Listen for click of prev button
  $(".homepage-widget .prev").click(function() {
    console.log("prev button clicked "+slide_index);
	ulheight=$('.homepage-widget ul.embeddable-job-widget-listings').height();	
    slide(slide_index - 1);
  });

  // Listen for click of next button
  $(".homepage-widget .next").click(function() {
    console.log("next button clicked "+slide_index);
	ulheight=$('.homepage-widget ul.embeddable-job-widget-listings').height();
    slide(slide_index + 1);
  });

  function slide(new_slide_index) {
    if(new_slide_index < 0 || new_slide_index >= steps) {
	return; 
	}
    stepsheight = (ulheight / steps);
	margin_left_pc = (new_slide_index*(-stepsheight))+"px";
    $('.homepage-widget ul.embeddable-job-widget-listings').animate({"margin-top": margin_left_pc}, 400, function() {
	 slide_index = new_slide_index;
    });

  }
			
		}); //END jQUERY FUNCTION
		
	</script>
		</div>

	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
         if ( isset( $instance[ 'no_of_post_sidebar' ]) ) {				
				$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			}
			else {				
				$no_of_post_sidebar = 6;
			}
			
			if ( isset( $instance[ 'widget_title' ]) ) {				
				$widget_title = $instance['widget_title'];
			}
			else {				
				$widget_title = __( 'Jobs' );
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
					for="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>">
						<?php _e( 'Show up to:' ); ?>
				</label> <br/>
				<input id="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>" class="widefat" type="number" min="6" max="15" step="3" name="<?php echo $this->get_field_name( 'no_of_post_sidebar' ); ?>" value="<?php echo esc_html($no_of_post_sidebar); ?>" style="width: 55px;" />
                <?php _e( 'jobs' ); ?>
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['no_of_post_sidebar'] = ( ! empty( $new_instance['no_of_post_sidebar'] ) ) ? ( $new_instance['no_of_post_sidebar'] ) : 6;
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
		/*******************************************
		(BRSL): Register
	********************************************/
	function reg_jobs_inpost() {
		register_widget( 'cus_jobs_inpost' );
	}
	add_action( 'widgets_init', 'reg_jobs_inpost' );	
	/********************************************
		(BRSL): Body
	*********************************************/
	class cus_jobs_inpost extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_jobs_inpost', // Base ID
				__('(DESIblitz)  In-Post Jobs Widget' ), // Name
				array( 'description' => __( 'jobs will show  Inside the Post' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {	
		    $widget_title = $instance['widget_title'];
			$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			
			$no_of_post_sidebar_no = apply_filters( 'no_of_post_sidebar', $no_of_post_sidebar, $instance, $this );
			
		?>
		<li class="widget inpost-jobs">
		 <?php if($widget_title) {?>
		 <h2 class="center-title">
				<span><?php esc_html_e($widget_title); ?></span>
				<i></i>
			</h2>
			<?php } ?>
		<div class="job_logo">	
		   <img src="<?php echo get_template_directory_uri() . '/images/in-post-logo.png';?>" />
		   <span>where diversity in recruitment matters</span>
		</div>		
       <script type='text/javascript'>
			var embeddable_job_widget_options = {
				'script_url' : 'https://www.desiblitz.com/jobs/?embed=wp_job_manager_widget',
				'keywords'   : '',
				'location'   : '',
				'categories' : '',
				'job_types'  : '',
				'per_page'   : '<?php echo $no_of_post_sidebar_no; ?>',
				'pagination' : '0'
			};
		</script>

		<script type='text/javascript' src='https://www.desiblitz.com/jobs/wp-content/plugins/wp-job-manager-embeddable-job-

		widget/assets/js/embed.js'></script>
        <div class="textwidget">
		<div class="inpost-widget">

		<div id="embeddable-job-widget">
			<div id="embeddable-job-widget-content"></div>
			<button class="next"></button>
			<button class="prev"></button>
		</div>		
		<a href="https://www.desiblitz.com/jobs" class="alm-load-more-btn" target="_blank">MORE JOBS</a>		
        <input type="hidden" class="no_of_post_sidebar_b" value="<?php echo $no_of_post_sidebar_no; ?>"> 
		</div>
		</div>
<script>
		jQuery(document).ready(function( $ ) {				 
setTimeout( function(){ 
			 $(".inpost-widget ul.embeddable-job-widget-listings li").each(function() {
			var text = $(this).html();
			text = text.replace("|", "");
			$(this).html(text);
			var ulheights=$('.inpost-widget ul.embeddable-job-widget-listings').height();	
			var cunt= $('.inpost-widget .no_of_post_sidebar_b').val();
			cunt =(cunt/3);	
			ulheights=(ulheights/cunt);	
			console.log("ulheights "+ulheights);
			$('.inpost-widget .embeddable-job-widget-content').height(ulheights);
		});
  }  , 1000 );
			
		
 var ulheight = 0;
 var slide_count = $('.inpost-widget .no_of_post_sidebar_b').val();
 var steps = slide_count/3; 
 var stepsheight = 0; 
  var slide_index = 0;

  // Listen for click of prev button
  $(".inpost-widget .prev").click(function() {
    console.log("prev button clicked "+slide_index);
	ulheight=$('.inpost-widget ul.embeddable-job-widget-listings').height();	
    slide(slide_index - 1);
  });

  // Listen for click of next button
  $(".inpost-widget .next").click(function() {
    console.log("next button clicked "+slide_index);
	ulheight=$('.inpost-widget ul.embeddable-job-widget-listings').height();
    slide(slide_index + 1);
  });

  function slide(new_slide_index) {
    if(new_slide_index < 0 || new_slide_index >= steps) {
	return; 
	}
    stepsheight = (ulheight / steps);
	margin_left_pc = (new_slide_index*(-stepsheight))+"px";
    $('.inpost-widget ul.embeddable-job-widget-listings').animate({"margin-top": margin_left_pc}, 400, function() {
	 slide_index = new_slide_index;
    });

  }
			
		}); //END jQUERY FUNCTION
		
	</script>
		</li>

	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {
         if ( isset( $instance[ 'no_of_post_sidebar' ]) ) {				
				$no_of_post_sidebar = $instance['no_of_post_sidebar'];
			}
			else {				
				$no_of_post_sidebar = 6;
			}
			
			if ( isset( $instance[ 'widget_title' ]) ) {				
				$widget_title = $instance['widget_title'];
			}
			else {				
				$widget_title = __( 'Jobs' );
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
					for="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>">
						<?php _e( 'Show up to:' ); ?>
				</label> <br/>
				<input id="<?php echo $this->get_field_id( 'no_of_post_sidebar' ); ?>" class="widefat" type="number" min="6" max="15" step="3" name="<?php echo $this->get_field_name( 'no_of_post_sidebar' ); ?>" value="<?php echo esc_html($no_of_post_sidebar); ?>" style="width: 55px;" />
                <?php _e( 'jobs' ); ?>
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
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			$instance['no_of_post_sidebar'] = ( ! empty( $new_instance['no_of_post_sidebar'] ) ) ? ( $new_instance['no_of_post_sidebar'] ) : 6;
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	
	
	
	
	/*******************************************
		(BLTSL): Register
	********************************************/
	function reg_banner_lefttop() {
		register_widget( 'cus_banner_lefttop' );
	}
	add_action( 'widgets_init', 'reg_banner_lefttop' );	
	/********************************************
		(BLTSL): Body
	*********************************************/
	class cus_banner_lefttop extends WP_Widget 
	{
		function __construct() {
			parent::__construct(
				'cus_banner_lefttop', // Base ID
				__('(DESIblitz) Lastest Post' ), // Name
				array( 'description' => __( '' ), ) // Args
			);
		}
		
		/**
		 * Front-end display of widget.
		 */
		public function widget( $args, $instance ) {
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=> 'post',
				'showposts' 	=> 1,
				//'offset'		=> 1,
				'post_status'	=> 'publish',
				'order' 		=> 'DESC'
			));
			
			if (have_posts() ) :
				while (have_posts() ) : the_post();
					$catSlugfootbg = get_parent_category(get_the_ID(), 'slug');
		?>
        <div class="home-banner-element noLeftBorder borderBottom">
            <div class="flex">
 				<div class="content <?php echo $catSlugfootbg; ?>-bg">
                    <figure class="quick-read resizeImg">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('section-large-thumb'); ?>
                            <?php $word_count = bavotasan_word_count();?>
                            <?php if($word_count < 350){?>
                                <span class="quick-read-icon"></span>
                            <?php } ?>
                        </a> 
                    </figure>	
										
                <div class="share-row">
                     <?php if(is_front_page()){
                        echo display_Grid_subCategory(get_the_ID());
                    }?>											
                    
                </div>
                <div class="title-wrapper singlethum-post">
                	
                	<!--<p class="category"><?php echo display_Grid_subCategory(get_the_ID()); ?></p>-->
	                <h2 class="post-title">
    	                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        	                <?php the_title(); ?>
            	        </a>
                	</h2>
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
	                <?php the_excerpt(); ?>
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
                    
                </div>
                                                    
            </div>
           </div>
       </div>
 			<?php				
					endwhile;
				endif;
			  
			?>
	<?php }
		
		
		/**
		 * Back-end widget form.
		 */
		public function form( $instance ) {

		}

		/**
		 * Sanitize widget form values as they are saved.
		 * @see WP_Widget::update()
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) 
		{
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? ( $new_instance['widget_title'] ) : '';
			return $instance;
		}
	} // WIDGET CLASS
	/*************************************************/
	

	function morePosts()
	{
		$post_list = $_POST['blockset'] ;
		
		if( $post_list >= 24 )
			$post_list = ($post_list + 12) / 2;
		

	?>
    	<div class="col-1 left">
            <ul class="">
                <?php
			WP_reset_query();
			
			query_posts(array( 
				'post_type' 	=> 'post',
				'showposts' 	=> $post_list,
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
				'showposts' 	=>  $post_list,
				'offset' 		=>	$post_list,
				'post_status'	=>  'publish',
				'order' 		=>  'DESC'
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
    <?php	
		die();
	}
	add_action('wp_ajax_morePosts', 'morePosts');
	add_action('wp_ajax_nopriv_morePosts', 'morePosts');