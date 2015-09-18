<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  


<header>
  <div class="hero-container" style="background-image:url();">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6">
  				<div class="hero-text table-box">
  					<div class="table-cell-box">
  						<h1>Text in here</h1>
  					</div>
	  				
	  			</div>
  			</div>
  			<div class="hero-image">
  				img in here yo.
  				<img src="<?php bloginfo('template_directory'); ?>/assets/images/balsa_sheets.png">
  			</div>
  		</div>
  	</div>
  </div>
</header>
<main>
	<!-- Market category portals -->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="">
					<h3></h3>
				</a>
			</div>
		</div>
	</div>

	<!-- Featured products -->

	<!-- Content blocks for interest -->

	<!-- Product categories -->



<!-- 
	<?php get_template_part('templates/page', 'header'); ?>
 -->

	<?php get_template_part('templates/content', 'page'); ?>

</main>


<?php endwhile; ?>
