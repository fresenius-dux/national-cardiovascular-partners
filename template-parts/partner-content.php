<div class="row">
	<?php
		$sidebar = get_field('sidebar');
		$classes = ! empty($sidebar) ? 'col-md-8' : 'col-md-12';
	?>
	<div class="entry-meta sr-only">
		<p class="entry-title"><?php the_title(); ?></p>
		<p class="author">National Cardiovascular Partners</p>
		<p class="published"><?php the_date(); ?></p>
		<p class="updated"><?php the_modified_date(); ?></p>
	</div>
	<div class="<?= $classes ?> post_page_content entry-content">
		<?php the_content(); ?>
	</div>
	<?php if (!empty($sidebar)) { ?>
		<div class="col-md-4 ncp-sidebar">
			<?php echo $sidebar; ?>
		</div>
	<?php } ?>
</div>
