<?php
/**
 	Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Healthy&Fit
 */

get_header(); ?>

<!--HERO-->
	<section class="hero" data-type="background" data-speed="5">
		<div class="container clearfix">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-7 col-md-5 col-md-offset-5 col-xs-8 col-xs-offset-4">
					<h1 class="title">Nazywam się Agata,<br> jestem dietetykiem i trenerem personalnym</h1>
				</div>
			</div>
		</div>
	</section>

	<!--BLOG-->
	<section class="blog">
		<div class="container">
			<h2>Blog</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="img"><img src="<?php bloginfo('template_directory');?>/assets/img/breakfast.jpeg" alt="blog-post" class="img-thumbnail"></div>
					<h3><a href="#">Śniadanie to podstawa!</a></h3>
					<p>W literaturze naukowej opisano badania dotyczące rodzaju spożywanego śniadania. Płatki owsiane zawierają złożone węglowodany oraz błonnik, które stopniowo w ciągu wielu godzin uwalniają paliwo dla mózgu, zapewniając jego wydajną pracę. Owsianka jest pod tym względem lepsza niż inne płatki śniadaniowe i zapewnia dzieciom wydajniejszą pamięć...</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="img"><img src="<?php bloginfo('template_directory');?>/assets/img/food1_sm.jpg" alt="blog-post" class="img-thumbnail"></div>
					<h3><a href="#">Gra w kolory</a></h3>
					<p>Warzywa, rośliny warzywne – rośliny jednoroczne, dwuletnie lub wieloletnie, które w całości lub w części stanowią pokarm człowieka. Mogą być spożywane w stanie surowym lub po obróbce cieplnej. Częściami użytkowymi warzyw mogą być całe rośliny lub tylko: liście, owoce, bulwy, łodygi i korzenie...</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="img"><img src="<?php bloginfo('template_directory');?>/assets/img/water.jpg" alt="blog-post" class="img-thumbnail"></div>
					<h3><a href="#">Pijmy wodę!</a></h3>
					<p>Woda jest jedną z najpospolitszych substancji we Wszechświecie. Cząsteczka wody jest trzecią najbardziej rozpowszechnioną molekułą w ośrodku międzygwiazdowym, po cząsteczkowym wodorze i tlenku węgla[9]. Jest również szeroko rozpowszechniona w Układzie Słonecznym: stanowi istotny element budowy Ceres i księżyców lodowych krążących wokół planet-olbrzymów, jako domieszka występuje w ich atmosferach, a przypuszcza się, że duże jej ilości znajdują się we wnętrzach tych planet. Jako lód występuje także na części planetoid, a zapewne również na obiektach transneptunowych...</p>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3 text-center">
				<button type="button" class="btn btn-danger">Więcej artykułów</button>
		</div>
	</section>

	<!--NEWSLETTER-->
	<section class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
				<p class="lead">Jeżeli interesuje Cię zdrowe odżywianie, fitness i pozytywne samopoczucie - zapisz się na newsletter. </p>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3 text-center">
					<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Zapisuję się :-)</button>
				</div>
		</div>	
		</div>
	</section>

	<!--Testimonials-->
	<section class="testimonials">
		<div class="container">
			<h2>Opinie i metamorfozy</h2>
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/person1.jpg" class="photo">
						<blockquote>Agata street art fanny pack, iceland sriracha +1 ennui man bun shabby chic butcher twee coloring book 90's PBR&amp;B sustainable. Small batch pinterest sriracha hot chicken. <cite>Anna</cite></blockquote>
					</div>
					<div class="col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/person2.jpg" class="photo">
						<blockquote>Agata Snackwave man bun celiac irony coloring book, flannel squid letterpress af raw denim truffaut fingerstache tattooed VHS. Hell of umami unicorn godard. Ugh biodiesel cronut sartorial hammock fanny pack. Cred meditation offal marfa intelligentsia migas, dreamcatcher occupy direct trade heirloom kale chips art party. <cite>Dawid</cite> </blockquote>
					</div>
					<div class="col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/person3.jpg" class="photo">
						<blockquote>Agata street art fanny pack, iceland sriracha +1 ennui man bun shabby chic butcher twee coloring book 90's PBR&amp;B sustainable. Small batch pinterest sriracha hot chicken. <cite>Ewa</cite></blockquote>
					</div>
				</div>
		</div>
	</section>

	<!--Newsletter-->
<!-- 	<section id="newsletter" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h3>Zapisz się na bezpłatny newsletter, co tydzień <strong>ćwiczenie i porady żywieniowe</strong> w Twojej skrzynce!</h3>
					<button class="btn btn-success bt-lg btn-block" data-toggle="modal" data-target="#myModal">Zapisuję się!</button>
				</div>
			</div>
		</div>
	</section> -->

	<!--Contact-->
	<section class="contact" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-sm-12">
					<h2>Bądźmy w kontakcie</h2>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4">
					<a href="#" target="_blank" class="social facebook"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4">
					<a href="#" target="_blank" class="social instagram"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4">
					<a href="#" target="_blank" class="social youtube"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</section>


<?php
get_sidebar();
get_footer();