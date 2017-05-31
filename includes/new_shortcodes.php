<?php 
	
	/**********************************
		FACT BOX
	**********************************/
		
	function display_fact_box( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'title' => '',
			'sub_title' => '',
		), $atts );
		ob_start();
		?>
			<?php if( get_field('fact_title') ){ ?>
				<div id="fact-box">
					<h4><?php the_field('fact_title'); ?></h4>
					<ul>
						<?php if( get_field('fact_1') ): ?>
							<li><?php the_field('fact_1'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_2') ): ?>
							<li><?php the_field('fact_2'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_3') ): ?>
							<li><?php the_field('fact_3'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_4') ): ?>
							<li><?php the_field('fact_4'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_5') ): ?>
							<li><?php the_field('fact_5'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_6') ): ?>
							<li><?php the_field('fact_6'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_7') ): ?>
							<li><?php the_field('fact_7'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_8') ): ?>
							<li><?php the_field('fact_8'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_9') ): ?>
							<li><?php the_field('fact_9'); ?></li>
						<?php endif; ?>
						<?php if( get_field('fact_10') ): ?>
							<li><?php the_field('fact_10'); ?></li>
						<?php endif; ?>
					</ul>
				</div>
			<?php } ?>
	    <?php 
	   return ob_get_clean();
	} //FAQ TITLE AND ENCLOSING TAGS
	add_shortcode('display-fact-box', 'display_fact_box');