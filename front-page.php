<?php get_header(); ?>

<?php
  set_query_var('partner_nav', 'partner-menu');
  set_query_var('partner_name', 'National Cardiovascular Partners');
  get_template_part('template-parts/partner', 'subnav');
?>

</header><!-- #masthead -->

<?php
  while ( have_posts() ) : the_post();
  get_template_part('template-parts/partner', 'hero');
?>

<div id="content" class="site-content" >
    <div id="primary" class="content-area">
        <?php get_template_part('template-parts/ncp/partner','value-props'); ?>
        <div class="container">
          <?php get_template_part('template-parts/partner','article_detail_content'); ?>
          <?php get_template_part('template-parts/partner','home_modal_banner'); ?>
          <?php //get_template_part('template-parts/partner','home_faqs'); ?>
          <?php get_template_part('template-parts/partner','home_contact_form_banner'); ?>
          <?php get_template_part('template-parts/partner','bottom_nav'); ?>
          <?php get_template_part('template-parts/partner','follow-links'); ?>
          <?php get_template_part('template-parts/partner','social-share-links'); ?>
        </div>
      </div><!-- #primary -->

</div><!-- #content -->

<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
