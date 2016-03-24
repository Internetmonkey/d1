<!-- Market category portals -->
	<section class="page-section wow fadeIn" id="market">
		<div class="container text-center">
			<hr class="stripe" />
			<h3>Choose your application, hobby sector or industry now</h3>
			<p>Find products, guides and helpful information exclusive to your niche!</p>
			<div class="btn-row">
				<a href="<?= site_url('/aeromodel/');?>" class="btn btn-default">Aeromodel</a> 
				<a href="<?= site_url('/craft/');?>" class="btn btn-default">Craft</a> 
				<a href="<?= site_url('/education-primary-secondary-teaching/');?>" class="btn btn-default">Education</a> 
				

				<div class="dropdown dropdown-inline">
				  <button id="dLabel" class="btn btn-default sector-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    More options...
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dLabel">
				    <li><a href="<?= site_url('/stage-set-building-film-theatre/');?>">Stage, Set &amp; Film</a></li>
				    <li><a href="<?= site_url('/promotional-products/');?>">Promotional Products</a></li>
				    <li><a href="<?= site_url('/surfboard-balsa-wood/');?>">Surfboards &amp; SUPs</a></li>
				  </ul>
				</div>
			</div>
			<hr class="stripe" />
		</div>
	</section>

<footer class="content-info" role="contentinfo">

  <!-- <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div> -->

  <?php 

  $d1_form = false;

  $d1_form_object  = get_field('sign_up_form', 'options' );
  if ( $d1_form_object ) {
  	$d1_form = $d1_form_object['id'];
  }

  if ( $d1_form ) :

  ?>

  <aside class="signup-blade">


<div class="container">
  	<h4>Join our mailing list for great deals, useful tips and inspiring projects!</h4>
  	<?php echo do_shortcode( '[gravityform id="' . $d1_form . '" title="false" description="false" ajax="true"]' ); ?>
</div>
  </aside>

<?php endif; ?>

  <section class="footer-nav-container">
  <div class="container ">

  	<div class="row">
  		<div class="col-sm-6 col-md-3">
  			<?php dynamic_sidebar('sidebar-footer-col-1'); ?>
  		</div>
  		<div class="col-sm-6 col-md-3">
  			<?php dynamic_sidebar('sidebar-footer-col-2'); ?>
  		</div>
  		<div class="col-sm-12 col-md-6">
  			<div class="footer-contact">
  			<p><a href="" class="brand-footer"><span class="sr-only">Balsa Central</span></a></p>
  			<h5>Contact us via...</h5>
  			<p>Phone: +61 8 8276 4482 or <a href="">Contact us</a></p>



<h5>You can find us at...</h5>
<p>11 Emanuel Court, Melrose Park, South Australia, Australia, 5039</p>

<!-- <p>Walk in customers are welcome during standard operating hours</p>
 -->
<h5>We are open from...</h5>
<p>8:00am-5:00pm Australian Central Time, Monday to Friday
– excluding Australian and South Australian Public Holidays</p>

<hr />
<p class="small text-center">&copy; Balsa Central</p>
</div>
  		</div>
  	</div>

  </div>
</section>
</footer>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '146637329004395');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=146637329004395&ev=PageView&noscript=1"
/></noscript>
  <!-- End Facebook Pixel Code -->
