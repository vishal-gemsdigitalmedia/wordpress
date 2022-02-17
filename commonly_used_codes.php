$queried_object = get_queried_object(); 
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id; 
	$name = $queried_object->name; 

	$image = get_field('image', $taxonomy . '_' . $term_id);

	global $wp;
	$current_page_url = home_url( $wp->request );

	//$tax_terms = get_terms($taxonomy, array('hide_empty' => false,));

	$args = array(
      'taxonomy' => $taxonomy,
      // 'order' => 'ASC',
      'hide_empty' => false,
      'hierarchical' => true,
      // 'parent' => 0,
      'meta_query' => array(
        array(
          'key'     => 'speciality_tour_packages',
          'value'   => "Yes",
          'compare' => 'LIKE'
        )
      )

    );

    $tax_terms = get_terms( $args );

@ini_set( 'upload_max_size' , '2048M' );
@ini_set( 'upload_max_filesize' , '2048M' );
@ini_set( 'post_max_size', '2048M');
@ini_set( 'memory_limit', '2048M' );
@ini_set( 'max_execution_time', '3000' );
@ini_set( 'max_input_time', '3000' );
