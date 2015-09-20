<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  


<header>
  <div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/balsa-cover-image.jpg);">
  	
  		<div class="table-box">
  			
  				<div class="table-cell-box wow fadeIn">
  					<div class="hero-text">
  						<div class="container">
  							<div class="row">
  								<div class="col-md-6">
  						<h1>Australia's #1 Choice for Balsa Wood</h1>

<ul>
	<li>The best balsa, in the sizes you need</li>
	<li>Fast Turnaround and Shipping times</li>
	<li>No Harmful bleaches or chemicals</li>
</ul>

<p>Machined and Finished with passion in South Australia. </p>
<p><a href="<?= site_url('/about-balsa/');?>" class="btn btn-warning">Learn More</a> <a href="<?= site_url('/shop/');?>" class="btn btn-primary">Shop Now &rarr;</a>
  					</p>
  				</div>
  			</div>
  		</div>
  					</div>
	  				
	  			</div>
  			
  			
  		
  	</div>
  	<div class="hero-image visible-md visible-lg wow fadeInRight">
  		
  				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/balsa_sheets.png" alt="">

  			</div>
  </div>
</header>
<main>
	<!-- Market category portals -->
	<section class="page-section wow fadeIn" id="market">
		<div class="container text-center">
			<hr class="stripe" />
			<h3>Choose your application, hobby sector or industry now</h3>
			<p>Find products, guides and helpful information exclusive to your niche!</p>
			<div class="btn-row">
				<a href="<?= site_url('/aeromodel/');?>" class="btn btn-default">Aeromodel</a> 
				<a href="<?= site_url('/craft/');?>" class="btn btn-default">Craft</a> 
				<a href="<?= site_url('/stage-set-building-film-theatre/');?>" class="btn btn-default">Stage, Set & Film</a> 
				

				<div class="dropdown dropdown-inline">
				  <button id="dLabel" class="btn btn-default sector-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    More options...
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dLabel">
				    <li><a href="">Education - Students</a></li>
				    <li><a href="">Education - Teachers</a></li>
				    <li><a href="">Promotional Products</a></li>
				    <li><a href="">Architecture Models</a></li>
				    <li><a href="">Surfboards & SUPs</a></li>
				    <li><a href="">Fibreglassing & Industrial</a></li>
				  </ul>
				</div>
			</div>
			<hr class="stripe" />
		</div>

	</section>

	<!-- Featured products -->

	

	<!-- Content blocks for interest -->

	<section class="page-section">
		

		<div class="block-grid">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/mixed-balsa-wood-shapes.jpg"  alt="A selection of Balsa Wood Shapes including Dowels, Sticks and Blocks">
				</a>
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link green" href="<?= site_url('/shop/');?>">
					<h3 class="headline">Australia's Best Quality Balsa Wood</h3>
					<p class="lead">The largest range in Australia, delivered on-demand straight to your door. Start Shopping Today</p>
					</a>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-right col-sm-6 col-sm-push-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/storefront-1.jpg" alt="The balsa central storefornt is well stocked">
				</a>
			</div>
			<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<div class="grid-link">
					<h3 class="headline">We're local too</h3>
					<p class="lead">Balsa Central is located in Melrose Park, South Australia. We welcome walk in business, phone orders etc. Talk to real people!</p>
					<p><a href="" class="btn btn-primary">Our Location</a> <a href="<?= site_url('/other-ways-to-order/');?>" class="btn btn-primary">Offline Orders</a></p>
				</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/balsacentral-warehouse-stock.jpg"  alt="Several large pallets of Balsa Wood">
				</a>
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link green" href="">
					<h3 class="headline">We always have stock</h3>
					<p class="lead">We're Australia's largest supplier of Balsa Wood. No Matter the project, we can handle it.</p>
					</a>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.block-grid -->

	</section>

	<!-- Product categories -->
	<section class="page-section featured-products wow fadeIn">
		<div class="container">
			<div class="row">
				<h3 class="headline">Our best sellers</h3>
				<?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
			</div>
		</div><!-- /.container -->
	</section>


</main>


<?php endwhile; ?>
