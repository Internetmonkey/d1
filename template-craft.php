<?php
/**
 * Template Name: Craft Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  


<header>
	<div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/nc-logo-overlay-cover.jpg);">	
		<div class="table-box">	
			<div class="table-cell-box wow fadeIn">
				<div class="hero-text">
					<div class="container">
						<h1 class="headline text-center">Coming Soon: Naturally Craft</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<main>

<section class="page-section wow fadeIn">
	<div class="container">
		<div class="row" role="main">
		
			<div class="headline-container col-sm-12  col-md-8 col-md-offset-2">
				<h2 class="h1 headline">Your Idea.. Your Creation .. Naturally.</h2>
			</div>
		
		</div><!-- /.row -->
		
		<div class="row">
			<div class="post-content double-column col-sm-12 col-md-8 col-md-offset-2">
				<p>Naturally Craft is a new project the team behind Balsa Central is launching in early 2016. </p>
				<p>We want to provide more environmentally conscious craft products for those who value creativitiy and are conscious of their impact on the planet</p>
				<p>Our product will not be limited to Balsa Wood, though many of our early products have a strong Balsa Wood focus due to it's excellent properties for craft and minimal impact on our environment.</p>
				<p>The range is a work in progress and we value feedback and ideas.</p>
			</div>
		</div>

	</div>
</section>

<!-- Product categories -->
<section class="page-section featured-products wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<h2 class="headline text-center">Preview Products Available Now</h2>
			</div>
		</div>
		<div class="row">
			<?php echo do_shortcode('[product_category category="naturally-craft" per_page="24" columns="4" orderby="default" order="DESC" operator="IN"]'); ?>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
			<a href="<?php echo site_url('/product-category/balsa-packs/naturally-craft/'); ?>" class="btn btn-primary btn-expand">See all Naturally Craft Products</a>
				
			</div>
		</div>

	</div><!-- /.container -->
</section>

<section class="page-section wow fadeIn">
	<div class="container">
		<div class="row" role="main">
		
			<div class="headline-container col-sm-12  col-md-8 col-md-offset-2 text-center">
				<h2 class="h1 headline">Interested in Craft?</h2>
				<h3 class="headline">We'd love to hear from you</h3>
			</div>
		
		</div><!-- /.row -->
		
		<div class="row">
			<div class="post-content double-column col-sm-12 col-md-8 col-md-offset-2">
				<p>Naturally Craft is a work in progress, if you share our interest in sustainable and eco friendly craft products then we would love to hear your thoughts.</p>

				<?php
					$form = get_field('gravity_form');

					if ( $form && $form['id'] ) {
						echo do_shortcode( '[gravityform id="' . $form['id'] . '" title="false" description="false" ajax="true"]' );
					}

				?>
				
			</div>
		</div>

	</div>
</section>

</main>


<?php endwhile; ?>
