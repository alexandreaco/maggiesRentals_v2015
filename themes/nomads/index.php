<?php
/*
 *	Index : Nomads Base Theme
 */
	get_header(); 

	$args = array( 'post_type' => 'nomads_apartment', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );

?>
	<div id="apartments">
<?php
	while ( $loop->have_posts() ) : $loop->the_post();
		// Extract Info
		$title = get_the_title();
		$floor = get_field('nomads_floor');
		$image_id = get_post_thumbnail_id();
		$url = wp_get_attachment_url( $image_id );

		// Print Apartment
		echo "<article class='apartment col-xs-12 col-sm-6 col-md-4'>";
			echo "<img src='" . $url . "' alt='" . $title . " " . $floor . "'>";
			echo $title . " " . $floor;
			the_field('nomads_bedrooms');
			the_field('nomads_availability');
			the_field('nomads_description');
		echo "</article>";

	endwhile;


?>
	</div> <!-- /apartments -->
<?php
	get_footer();
?>