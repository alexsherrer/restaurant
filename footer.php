<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="sec1_foot">
			<h3 class="ft-title">Location</h3>
			<p>8450 Foster Ave</p>
			<p>Lawerence, MA</p>
			<p>01841</p>

		</div>
		<div class="sec2_foot">
			<h3 class="ft-title">Hours</h3>
			<p>Monday-Thursday</p>
			<p>11AM-9PM</p>
			<p>Friday</p>
			<p>12PM-8AM</p>
			<p>Saturday-Sunday</p>
			<p>11AM-6PM</p>
		</div>
		<div class="sec3_foot">
			<h3 class="ft-title">Find us on</h3>
			<p class="social_foot"><i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-facebook"></i></p>
				<h3 class="ft-title-bot">Contact Us</h3>
				<p>(555)-555-5555</p>
				<p>info@example.com</p>
		</div>
		

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

