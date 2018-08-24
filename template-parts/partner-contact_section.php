<?php
/**
 * Template part for Contact Form and Contact Copy Content
 *
 *
 * @package txakolina
 */
$ContactCol1 = get_field('column_1_fields');
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
