<?php
/**
 * Template Name: NCP Contact Page
 *
 */


get_header();

  set_query_var('partner_nav', 'ncp-menu');
  set_query_var('partner_name', 'National Cardiovascular Partners');
  get_template_part('template-parts/partner', 'subnav');
?>

</header><!-- #masthead -->


<!-- Needs this empty hero div to maintain smooth fixed nav -->
<div class="ncp-hero"></div>
<?php while ( have_posts() ) : the_post(); ?>
<div id="content" class="site-content container">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <?php get_template_part('template-parts/partner','contact_section'); ?>
      </main><!-- #main -->
      <?php if (get_field('show_bottom_nav_value_props')) :
	       get_template_part('template-parts/partner','bottom_nav');
      endif; ?>
      <?php get_template_part('template-parts/partner','follow-links'); ?>
			<?php get_template_part('template-parts/partner','social-share-links'); ?>
    </div><!-- #primary -->
</div>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
