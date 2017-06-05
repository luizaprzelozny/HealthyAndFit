<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Healthy&Fit
 */

?>

<?php wp_footer(); ?>
	<footer>
		<div class="container">
			<div class="col-lg-8 col-md-8 col-sm-12 div_footer"><a href="#"><img src="<?php bloginfo('template_directory');?>/assets/img/h_logo.png" alt="Healthy&amp;Fit"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<p>&copy; 2017 Luiza Przełożny</p>
			</div>
		</div>
	</footer>

	<!--JS-->
	<script src="<?php bloginfo('template_directory');?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>assets/js/main.js"></script>

</body>
</html>
