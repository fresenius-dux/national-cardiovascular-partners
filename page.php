<?php
/*!
 * @package fmcna-com-child
 */
get_header(); ?>

<?php
  // set_query_var('partner_nav', 'partner-menu');
	// set_query_var('partner_name', 'National Cardiovascular Partners');
  get_template_part('template-parts/partner', 'subnav');
?>

</header><!-- #masthead -->

<?php get_template_part('template-parts/partner', 'hero'); ?>

<div id="content" class="site-content container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php get_template_part('template-parts/partner', 'content'); ?>
						<?php get_template_part('template-parts/content-sections/tabs'); ?>

						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'txakolina' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->

					</article><!-- #post-## -->


					<?php if (get_field('show_bottom_nav_value_props')) :
						get_template_part('template-parts/partner','bottom_nav'); endif; ?>
					<?php get_template_part('template-parts/partner','follow-links'); ?>
					<?php get_template_part('template-parts/partner','social-share-links'); ?>
    			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
</div>
<?php get_footer(); ?>
