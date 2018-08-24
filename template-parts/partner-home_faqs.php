<?php $faqs = get_field('faqs'); ?>
<?php if (!empty($faqs)) {
  $questions = $faqs['faq_question'];
?>
<section class="ncp-homepage-faqs">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h3>Frequently Asked Questions</h3>
        <div class="ncp-homepage-faqs-divider"></div>
        <?= $faqs['faq_textarea']; ?>
        </div>
      <?php foreach($questions as $question) { ?>
        <div class="col-md-4">
        <a href="<?= $question['link']; ?>"><p><?= $question['text'] ?></p></a>
        </div>
      <?php } ?>

      <div class="col-md-12">
        <a href="<?= $faqs['link_to_faq_page'] ?>" class="morelink pull-right">Learn more</a>
      </div>
    </div>
</section>
<?php } ?>
