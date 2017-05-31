<?php 
			if(!is_single()){
				//THIS CODE IS EXECUTED IN CATEGORY PAGES
				global $wp_query;
				$term = $wp_query->get_queried_object();
				$childTaxName = $term->name;
				$childTaxSlug = $term->slug;
				$childTaxID = $term->term_id;
				
				if($term->parent != 0){
					
					$parentTerm = get_term_by( 'id', $term->parent, POST_CATEGORY );
					$catName = $parentTerm->name;
					$catslug = $parentTerm->slug;
					$IDterm = $parentTerm->term_id;
				} else {
					$catName = $childTaxName;
					$catslug = $childTaxSlug;
					$IDterm = $childTaxID;
				}	
			} else {
				//THIS CODE IS EXECUTED IN SINGLE POST - PAGE
				$terms = wp_get_post_terms( get_the_ID(), POST_CATEGORY, $args );
				foreach($terms as $term){
					if( $term->parent == 0 ){
						$catName = $term->name;
						$catslug = $term->slug;
						$IDterm = $term->term_id;
						break;
					} elseif( $term->parent != 0 ){
						$childName = $term->name;
						$childslug = $term->slug;
						$childID = $term->term_id;
					} //ENDIF
					
				} //END FOREACH
			} //END IF CONDITION
						