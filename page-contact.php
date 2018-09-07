<?php
/**
 * Template Name: Partner Contact Page
 * @package fmcna-com-child
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
        <?php $ContactCol1 = get_field('column_1_fields');
        $ContactCol2 = get_field('column_2_fields');
        $ncp_fields = get_field('ncp_fields', 'option');

        ?>
        <div class="row no-gutters contact">
              <div class="col-md-6 col-sm-12">
                  <div class="ContactFormCont  match-height-row-false2">
                      <div class="hero-breadcrumbs-container">
                          <p class="breadcrumbs"><?php bcn_display(); ?></p>
                      </div>
                      <div class="hero-logo-container">
                        <?php if ( !empty($ncp_fields) ) : ?>
                          <img class="ncp-hero-logo"
                            src="<?= $ncp_fields['ncp_logo']['url'] ?>"
                            alt="<?= $ncp_fields['ncp_logo']['alt'] ?>">
                        <?php endif ?>
                      </div>
                      <?php if($ContactCol1){ ?>
                          <div class="column1-contents">
                              <h3><?php echo $ContactCol1['column_1_header']; ?></h3>
                              <p><?php echo $ContactCol1['column_1_content']; ?></p>
                          </div>
                      <?php } ?>
                      <?php if($ContactCol2){ ?>
                      <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          <div class="leftcol">
                              <?php if(!empty($ContactCol2['column_2_button_1_url']) && !empty($ContactCol2['column_2_button_1_text'])){ ?>
                                  <a href="<?php echo $ContactCol2['column_2_button_1_url']; ?>" class="btn btn-cta"><?php echo $ContactCol2['column_2_button_1_text']; ?></a><!-- DeNovo Lab Facility Form -->
                              <?php } ?>
                          </div>
                      </div>
                      <?php } ?>
                      <div class="col-sm-6 col-xs-12">
                          <div class="rightcol">
                              <?php if(!empty($ContactCol2['column_2_button_2_url']) && !empty($ContactCol2['column_2_button_2_text'])){ ?>
                                  <a href="<?php echo $ContactCol2['column_2_button_2_url']; ?>" class="btn btn-cta"><?php echo $ContactCol2['column_2_button_2_text']; ?></a><!-- Cardiac & Vascular Lab Acquisitions Form -->
                              <?php } ?>
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                 <div class="ContactInfoCont  match-height-row-false2">
                      <?php the_content(); ?>
                      <?php if($ContactCol1['column_1_form_code']){ ?>
                          <div class="contact-form-container">
                            <iframe id="contactFrame" src="<?= $ContactCol1['column_1_form_code'] ?>" scrolling="no"></iframe>
                          </div>
                      <?php } ?>
                  </div>
              </div>
        </div>
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
