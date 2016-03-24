<?php
/**
 * Template Name: Education - Teachers Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	
<?php 
$external_url = "http://www.learningwithbalsa.com.au";
$products_collection_url = site_url('/product-category/balsa-projects/learning-with-balsa/'); 
$info_page_url = site_url('/education-primary-secondary-teaching/education-discounts-purchase-orders');

?>

<header>
  <div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/edu-cover.jpg);">
  	
  		<div class="table-box">
  			
  				<div class="table-cell-box wow fadeIn">
  					<div class="hero-text">
  						<div class="container">
  							<div class="row">
  								<div class="col-md-8 col-md-offset-2 text-center">
  						<h1>Balsa: The natural choice for learning</h1>

  				</div>
  			</div>
  		</div>
  					</div>
	  				
	  			</div>
  			
  			
  		
  	</div>
  </div>
</header>

<main>


	<!-- Content blocks for interest -->

<section class="page-section">
	<div class="block-grid">
		<div class="container">
			<div class="row wow fadeIn stage-balsa-site">
				<div class="grid-image grid-left col-sm-6 grid-match">
					<a href="<?php echo $external_url; ?>">
						<img src="<?php bloginfo('template_directory'); ?>/dist/images/edu-professionals-lwb.jpg"  alt="Learning With Balsa Logo">
					</a>
				</div>
				<div class="grid-content grid-right col-sm-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<div class="grid-link">
						<h3 class="headline">Curriculum Guided Projects</h3>
						<p class="lead">Our LWB projects are designed to provide hands on learning expreiences that fit within the ACARA curriculum. </p>
						<p class="lead underscore"><a href="<?php echo $external_url; ?>" class="btn btn-primary">Visit the Learning with Balsa Site &#8594;</a></p>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
			
			<div class="row wow fadeIn stage-hd-balsa">
				<div class="grid-image grid-left col-sm-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<div class="grid-link">
						<h3 class="headline">Education Discounts &amp; Purchase Orders</h3>
						<p class="lead">Learn about claiming our EDU discount and our options for Purchase Orders / Procurement.</p>
						<p class="lead underscore"><a href="<?php echo $info_page_url; ?>" class="btn btn-primary">Find out more &#8594;</a></p>
						</div>
					</div>
				</div>
				<div class="grid-content grid-right col-sm-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<a href="<?php echo $info_page_url; ?>">
							<img src="<?php bloginfo('template_directory'); ?>/dist/images/edu-professionals-discount.jpg"  alt="">
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
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<h2 class="headline text-center">Learning with Balsa Projects</h2>
			</div>
		</div>
		<div class="row">
			<?php echo do_shortcode('[product_category category="learning-with-balsa" per_page="16" columns="4" orderby="default" order="DESC" operator="IN"]'); ?>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
			<a href="<?php echo site_url('/shop/'); ?>" class="btn btn-primary btn-expand">See our complete range of Balsa Wood Products</a>
				
			</div>
		</div>

	</div><!-- /.container -->
</section>>

</main>


<?php endwhile; ?>
