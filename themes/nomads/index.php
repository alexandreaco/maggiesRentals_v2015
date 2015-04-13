<?php
/*
 *	Index : Nomads Base Theme
 */
	get_header(); 

	$args = array( 'post_type' => 'nomads_apartment', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );

?>
	<div class="apartment-controls col-sm-8 col-sm-push-2">
		<h3>Filter</h3>
		<ul class="nav nav-pills">
			<li role="presentation" class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			      Location <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu" role="menu">
			      <li data-filter="28-doyle"><a href="#">28 Doyle Ave</a></li>
			      <li data-filter="32-doyle"><a href="#">32 Doyle Ave</a></li>
			      <li data-filter="34-doyle"><a href="#">34 Doyle Ave</a></li>
			      <li data-filter="38-doyle"><a href="#">38 Doyle Ave</a></li>
			      <li data-filter="42-doyle"><a href="#">42 Doyle Ave</a></li>
			      <li data-filter="1639-main"><a href="#">1639 Main Street</a></li>
			    </ul>
			</li>
			<li role="presentation" class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			      Bedrooms <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu" role="menu">
			      <li data-filter="0-bed"><a href="#">0+</a></li>
			      <li data-filter="1-bed"><a href="#">1+</a></li>
			      <li data-filter="2-bed"><a href="#">2+</a></li>
			      <li data-filter="3-bed"><a href="#">3+</a></li>
			    </ul>
			</li>
		</ul>
	</div>
	<div id="apartments" class="row">

<?php
	while ( $loop->have_posts() ) : $loop->the_post();
		// Extract Info
		$title = get_the_title();
		$floor = get_field('nomads_floor');
		$numBedrooms = get_field('nomads_bedrooms');
		$numBathrooms = get_field('nomads_bathrooms');
		$availability = get_field('nomads_availability');
		$isAvailable = "";
		if ( strtolower($availability) != 'occupied') {
			$isAvailable = "available";
		} else {
			$isAvailable = "occupied";
		}
		$description = get_field('nomads_description');
		$image_id = get_post_thumbnail_id();
		$url = wp_get_attachment_url( $image_id );

		// Print Apartment
		echo "<a href='" . get_permalink() . "'><article class='apartment col-xs-12 col-sm-6 col-md-4 col-lg-3'>";
			echo "<div class='apartment-inner'><img src='" . $url . "' alt='" . $title . " " . $floor . "'><div class='apartment-content'>";
			echo "<span class='" . $isAvailable . "'></span>";
			echo "<strong>" . $title . " " . $floor . "</strong><br>";
			echo "<span>" . $numBedrooms . " Bedrooms, </span>";
			echo "<span>" . $numBathrooms . " Bathrooms</span><br>";
			echo "<p>" . $description . "</p>";
			echo "<span>" . $availability . "</span>";
		echo "</div></div></article></a>";

	endwhile;


?>
	</div> <!-- /apartments -->
<?php
	get_footer();
?>