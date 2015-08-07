<?php
/*
 *	Index : Nomads Base Theme
 */
	get_header();

	$args = array( 'post_type' => 'nomads_apartment', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );

?>
page
<?php  get_template_part('blocks/apt-slider');  ?>


<?php
	get_footer();
?>
