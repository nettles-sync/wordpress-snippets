<?php
// comma separated list of terms for resource type
function jn_resource_type_terms() {
	$rt_terms = get_the_terms( get_the_ID() , 'YOUR_TAXONOMY_TERM' );
	if ( ! empty( $rt_terms ) ) {
		echo '<span class="tax-list">';
			foreach ( $rt_terms as $rt_term ) {
				$entry_terms .= $rt_term->name . ', ';
			}
			$entry_terms = rtrim( $entry_terms, ', ' );
		echo $entry_terms . '</span>';
	}
}
 ?>
