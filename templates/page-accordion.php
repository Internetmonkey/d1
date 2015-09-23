<?php
/**
 *
 * Experimenting with PHP short tags / short echo
 * code style of this template will not match others
 *
 */

$_title = get_field('collapse_section_title');
$_content = get_field('collapse_section_pre');
$_repeater = have_rows('collapse_section_content');
$_index = 0;

if ( ! $_repeater && ! $_content ) {
	return;
}

?>
<div class="collapse-section">
	<div class="container">
		<div class="row">
<? if ($_title) : ?>
			<div class="col-sm-12 headline-wrap">
				<h2 class="headline"><?= $_title; ?></h2>
			</div>
<? endif; ?>
<? if ($_content) : ?>
			<div class="content-wrap col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?= $_content; ?>
			</div>
<? endif; ?>
<? if ($_repeater) : ?>
		</div>
		<div class="row">
			<div class="collapse-repeater-wrap panel-group" id="#accordion" role="tablist" aria-multiselectable="true">
<? while(have_rows('collapse_section_content')) : the_row();
	$r_title = get_sub_field('collapse_title');
	$r_content = get_sub_field('collapse_content');
	$r_default = get_sub_field('collapse_default');
	$r_classes = $r_default === 'true' ? ' in' : '';  
	$_index++;
?>
				<div class="panel panel-default">
				  <div class="panel-heading" role="tab" id="collapse-heading-<?= $_index; ?>">
				    <h4 class="panel-title">
				      <a class="panel-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $_index; ?>" aria-expanded="<?= $r_default; ?>" aria-controls="collapse-<?= $_index; ?>">
				        <?= $r_title; ?>
				      </a>
				    </h4>
				  </div>
				  <div id="collapse-<?= $_index; ?>" class="panel-collapse collapse<?= $r_classes; ?>" role="tabpanel" aria-labelledby="collapse-heading-<?= $_index; ?>">
				    <div class="panel-body">
				      <?= $r_content; ?>
				    </div>
				  </div>
				</div>

<? endwhile; ?>
			</div><!-- /.collapse-repeater-wrap -->
<? endif; ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.collapse-section -->



