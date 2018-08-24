<?php
/**
 * Template part for Partner's Contact Form Banner Section.
 *
 *
 * @package txakolina
 */

?>
<?php $contact_form = get_field('contact_form_fields'); ?>
<?php if ($contact_form) { ?>
<section class="contact-form-banner">
    <div class="ContactFormBannerContainer" style="background-image:url(<?= $contact_form['contact_form_background_image']['url'] ?>)">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <div class="ContactFormCont">
            <h3><?= $contact_form['contact_form_header'] ?></h3>
            <p><?= $contact_form['contact_form_header_description'] ?></p>
            <iframe id="homeContactFrame" src="<?= $contact_form['contact_form_source'] ?>" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
</section>
<?php } ?>
