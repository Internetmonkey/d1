<?php
/**
 * Template Name: Aero Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  


<header>
  <div class="hero-container" style="background-image:url(<?php bloginfo('template_directory'); ?>/dist/images/aeromodel-build-in-progress-hero.jpg);">
  	
  		<div class="table-box">
  			
  				<div class="table-cell-box wow fadeIn">
  					<div class="hero-text">
  						<div class="container">
  							<div class="row">
  								<div class="col-md-8 col-md-offset-2 text-center">
  						<h1>Welcome to Aero Central</h1>
  						<p class="h3 heading">Balsa Central's home for Aeromodelling and Aviation</h3>

  				</div>
  			</div>
  		</div>
  					</div>
	  				
	  			</div>
  			
  			
  		
  	</div>
  </div>
</header>
<main class="main">
	<!-- Market category portals -->
	<section class="page-section wow fadeIn" id="market">
		<div class="container text-center">
			<hr class="stripe" />
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Let's build something great together</h2>
					<p class="lead">To get oustanding results you need the best materials and the right advice</p>
					<p class="lead">Our premium quality Balsa Wood is beloved by modellers worldwide</p>
					<p class="lead">Choose the exact sizes and weights your project requires.</p>
					<p class="lead">We'll ship it pristine and well protected straight to your door.</p>
					<p class="lead">Spend less time hunting for wood. More time soaring.</p>
				</div>
			</div>
			<hr class="stripe" />
		</div>

	</section>

	<!-- Featured products -->

	

	<!-- Content blocks for interest -->

	<section class="page-section block-section">
		

		<div class="block-grid">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/mixed-balsa-wood-bc-grid.jpg"  alt="">
				</a>
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link orange" href="">
					<h3 class="headline">Specifying densities and weights</h3>
					<p class="lead">Learn how to get the right Balsa Wood through our 'competition selects' options</p>
					</a>
				</div>
			</div>
		</div><!-- /.row -->


		<div class="row wow fadeIn">
			<div class="grid-image grid-right col-sm-6 col-sm-push-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/balsa-wood-wing-in-progress-bc-grid.jpg" alt="">
				</a>
			</div>
			<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a href="" class="grid-link green">
					<h3 class="headline">Get 10% off with our Club Sponsorship</h3>
					<p class="lead">Learn more about eligibility and make an application.</p>
					
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
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="heading">Most Popular Aeromodelling Products</h2>
				</div>
				<?php echo do_shortcode('[products ids="251,253,255,256"]'); ?>
			</div>
		</div><!-- /.container -->
	</section>

	<section class="page-section wow fadeIn" id="market">
	<div class="container text-center">
		<hr class="stripe" />
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>More Coming Soon!</h2>
				<p class="lead">We're just getting started, more content coming soon including free downloadable plans, tutorials and more.</p>
				<p class="lead">We'd love to see what you're making too, the Balsa Central "hall of fame" will be opening soon and we need your submissions <a href="#">Contact Us</a> today or email us at<a href="mailto:sales@balsacentral.com">sales@balsacentral.com</a> </p>
			</div>
		</div>
		<hr class="stripe" />
	</div>

</section>


<!--
	<section class="page-section wow fadeIn">
<div class="container">
	<div class="row" role="main">
	
		<div class="headline-container col-sm-5 col-lg-4">
			<h3 class="h1 headline">Headline to sit alongside paragraphs</h3>
		</div>
	
		<div class="post-content double-column col-sm-7 col-lg-8">
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
		</div>
	</div>
</div>
</section>



<section class="page-section content-block wow fadeIn">
<div class="container">
	<div class="row" role="main">
	
		<div class="headline-container col-sm-7">
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/placeholder.jpg"  alt="" class="img-responsive">
		</div>
	
		<div class="post-content col-sm-5">
			<h3>Headline to sit alongside paragraphs</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		
		</div>

		
	</div>

	
</div>
</section>

<section class="page-section content-block wow fadeIn">
<div class="container">
	<div class="row" role="main">
	
		<div class="headline-container col-sm-7 col-sm-push-5">
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/placeholder.jpg"  alt="" class="img-responsive">
		</div>
	
		<div class="post-content col-sm-5 col-sm-pull-7">
			<h3>Headline to sit alongside paragraphs</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		
		</div>

		
	</div>

	
</div>
</section>
-->

</main>


<?php endwhile; ?>
