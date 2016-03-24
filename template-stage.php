<?php
/**
 * Template Name: Stage Balsa Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php 
$stage_url = "http://www.stagebalsa.com";
$set_model_url = site_url('/product-tag/scale-set-building/'); 
$hd_url = site_url('/stage-set-building-film-theatre/hd-balsa/');

?>


<header>
	<div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/stage-cover-film-set-with-flat.jpg);">	
		<div class="table-box">	
			<div class="table-cell-box wow fadeIn">
				<div class="hero-text">
					<div class="container">

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
		
			<div class="headline-container col-sm-5 col-lg-4">
				<h3 class="h1 headline">The best Balsa Wood for your production</h3>
			</div>
		
			<div class="post-content double-column col-sm-7 col-lg-8">
			<p>Balsa Wood has long been a staple of the art department for modelling and pyrotechnic applications. Used by scale modellers worldwide, Balsa Wood is a safe and easy to work with modelling material which can be worked on using anything from a scalpel and light hand tools to professional woodworking machines, enabling productions of all sizes to utilise Balsa Wood.</p>
			<p>Balsa Wood takes all finishes well and is light weight, strong, and environmentally friendly. For more complex requirements and unique results we're able to deliver custom size Balsa Wood through lamination or our unique FJL 'Stage Balsa' range. Laser marking and cutting is also available upon request. </p>
			<p>When you only get one take, trust Balsa Central to deliver the best quality balsa wood in whatever dimensions you require.</p>
			</div>
		</div>
	</div>
</section>

	<!-- Content blocks for interest -->

<section class="page-section">
	<div class="block-grid">
		<div class="container">
			<div class="row wow fadeIn stage-balsa-site">
				<div class="grid-image grid-left col-sm-6 grid-match">
					<a href="<?php echo $stage_url; ?>">
						<img src="<?php bloginfo('template_directory'); ?>/dist/images/stage-balsa-logo-section.jpg"  alt="">
					</a>
				</div>
				<div class="grid-content grid-right col-sm-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<div class="grid-link">
						<h3 class="headline">Great Wood, without the weight.</h3>
						<p class="lead">Let Stage Balsa lighten your crew's load. Available pre-cut for even more efficiency</p>
						<p class="lead underscore"><a href="<?php echo $stage_url; ?>" class="btn btn-primary">Visit the Stage Balsa Site &#8594;</a></p>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
			<div class="row wow fadeIn stage-model-building">
				<div class="grid-image grid-right col-sm-6 col-sm-push-6 grid-match">
					<a href="<?php echo $set_model_url; ?>">
						<img src="<?php bloginfo('template_directory'); ?>/dist/images/stage-balsa-scale-model-section.jpg" alt="">
					</a>
				</div>
				<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<div class="grid-link green">
						<h3 class="headline">The best Balsa for Scale Modelling.</h3>
						<p class="lead">The largest range of sizes in Australia.</p>
						<p class="lead underscore"><a href="<?php echo $set_model_url; ?>" class="btn btn-default">View our most popular modelling products &#8594;</a></p>
					</div>
					</div>
				</div>
			</div><!-- /.row -->
			<div class="row wow fadeIn stage-hd-balsa">
				<div class="grid-image grid-left col-sm-6 grid-match">
					<a href="<?php echo $hd_url; ?>">
						<img src="<?php bloginfo('template_directory'); ?>/dist/images/stage-balsa-hd-section.jpg"  alt="">
					</a>
				</div>
				<div class="grid-content grid-right col-sm-6 grid-match">
					<div class="grid-content-wrapper text-center">
						<div class="grid-link">
						<h3 class="headline">HD Balsa - tougher Balsa Wood delivering more precision</h3>
						<p class="lead">Our HD Balsa can make working with thin or small pieces a breeze.</p>
						<p class="lead underscore"><a href="<?php echo $hd_url; ?>" class="btn btn-primary">Find out more &#8594;</a></p>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.block-grid -->
</section>

<!-- Product categories
<section class="page-section featured-products wow fadeIn">
	<div class="container">
		<div class="row">
	
		</div>
	</div>container
</section> -->

</main>


<?php endwhile; ?>
