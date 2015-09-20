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
<p><a href="" class="btn btn-warning">More details &rarr;</a> <a href="" class="btn btn-primary">Select options</a>
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
			<hr class="stripe" />
			<h3>Choose your application, hobby sector or industry now</h3>
			<p>It'd be good to explain this a little bit more here.</p>
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
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="">
				</a>
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
		<div class="row wow fadeIn">
			<div class="grid-image grid-right col-sm-6 col-sm-push-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg" alt="">
				</a>
			</div>
			<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a href="" class="grid-link green">
					<h3 class="headline">Headline, possibly about the educational products.</h3>
					<p class="lead">Or we could do it this way, where it's just the button that's a link.</p>
					
				</a>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="">
				</a>
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
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg" alt="">
				</a>
			</div>
			<div class="grid-content grid-left col-sm-6 col-sm-pull-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<div class="grid-link">
					<h3 class="headline">Headline, possibly about the educational products.</h3>
					<p class="lead">Or we could do it this way, where it's just the button that's a link.</p>
					<p><a href="" class="btn btn-primary">I'm a link!</a> <a href="" class="btn btn-primary">Another link!</a></p>
				</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row wow fadeIn">
			<div class="grid-image grid-left col-sm-6 grid-match">
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="">
				</a>
			</div>
			<div class="grid-content grid-right col-sm-6 grid-match">
				<div class="grid-content-wrapper text-center">
					<a class="grid-link red" href="">
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
	<section class="page-section featured-products wow fadeIn">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
			</div>
		</div><!-- /.container -->
	</section>


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
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="" class="img-responsive">
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
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/placeholder.jpg"  alt="" class="img-responsive">
		</div>
	
		<div class="post-content col-sm-5 col-sm-pull-7">
			<h3>Headline to sit alongside paragraphs</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		
		</div>

		
	</div>

	
</div>
</section>


</main>


<?php endwhile; ?>
