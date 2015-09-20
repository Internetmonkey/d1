<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  


<header>
  <div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/balsa-cover-image.jpg);">
  	
  		<div class="table-box">
  			
  				<div class="table-cell-box wow fadeIn">
  					<div class="hero-text">
  						<div class="container">
  							<div class="row">
  								<div class="col-md-6">
  						<h1>Australia's #1 Choice for Balsa Wood</h1>

<p class="lead">Our Balsa is simply better - completely free of any bleaches or harmful chemical processes to 'whitewash' the wood. Our select Balsa is naturally cleaner, making it not only safer to work with, but also better for the environment.</p>

<ul>
	<li>100% Plantation Grown Balsa</li>
<li>No Harmful Bleaches or Chemicals</li>
<li>Machined & Finished with pride in Australia</li>
</ul>

<p>Learn more <a href="">about</a> the Balsa Central difference</p>
<p><a href="" class="btn btn-info">More details &rarr;</a> <a href="" class="btn btn-primary">Select options</a>
  					</p>
  				</div>
  			</div>
  		</div>
  					</div>
	  				
	  			</div>
  			
  			
  		
  	</div>
  	<div class="hero-image visible-md visible-lg wow fadeInRight">
  				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/balsa_sheets.png" alt="">
  			</div>
  </div>
</header>
<main>
	<!-- Market category portals -->
	<section class="page-section wow flipInX" id="market">
		<div class="container text-center">
			<h3>Choose your application, hobby sector or industry now</h3>
			<div class="btn-row">
				<a href="" class="btn btn-default">Aeromodel</a> 
				<a href="" class="btn btn-default">Craft</a> 
				<a href="" class="btn btn-default">Stage, Set & Film</a> 
				

				<div class="dropdown dropdown-inline">
				  <button id="dLabel" class="btn btn-default sector-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    More options...
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dLabel">
				    <li><a href="">Market sector example</a></li>
				    <li><a href="">Market sector example</a></li>
				    <li><a href="">Market sector example</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Featured products -->

	

	<!-- Content blocks for interest -->

	<section >
		

		<div class="block-grid">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="">
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link blue" href="">
					<h3 class="headline">Headline, possibly about the educational products.</h3>
					<p class="lead">This text will be vertically centered next to an image. The whole tile is an active link</p>
					</a>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-right col-sm-6 col-sm-push-6 grid-match">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg" alt="">
			</div>
			<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<div class="grid-link">
					<h3 class="headline">Headline, possibly about the educational products.</h3>
					<p class="lead">Or we could do it this way, where it's just the button that's a link.</p>
					<p><a href="" class="btn btn-info">I'm a link!</a></p>
				</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="">
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link orange" href="">
					<h3 class="headline">Headline, possibly about the educational products.</h3>
					<p class="lead">This text will be vertically centered next to an image. The whole tile is an active link</p>
					</a>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.block-grid -->

	</section>

	<!-- Product categories -->
	<section class="page-section featured-products">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
			</div>
		</div><!-- /.container -->
	</section>


</main>


<?php endwhile; ?>
