<?php
/*
 *	Index : Nomads Base Theme
 */
	get_header();

	$args = array( 'post_type' => 'nomads_apartment', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );

?>

<i class="fa fa-facebook"></i>


<?php
	get_footer();
?>
