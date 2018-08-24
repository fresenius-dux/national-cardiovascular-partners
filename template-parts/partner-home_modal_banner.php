<?php
/**
 * Template part for Partner's Modal Banner Section.
 *
 *
 * @package txakolina
 */

?>
<?php $article_detail = get_field('article_detail_section');
if ( $article_detail['ad_content']
  && $article_detail['ad_header']
  && $article_detail['article_detail_background_image']
  ) { ?>
<section class="ModalBannerContainer" style="background-image: url(<?= $article_detail['article_detail_background_image']['url'] ?>);">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="ArticleModal">
            <h2><?= $article_detail['ad_header']; ?></h2>
            <p><?= $article_detail['ad_content']; ?></p>
            <?php if ($article_detail['ad_url'] ) {
              $ad_title = $article_detail['ad_url']['title'] ?: 'Learn More';
              $ad_target = $article_detail['ad_url']['target'] ? 'target="' . $article_detail['ad_url']['target'] . '"' : '';
              ?>
            <a class="btn btn-ncp" href="<?= $article_detail['ad_url']['url']; ?>" <?= $ad_target ?>><?= $ad_title ?></a>
          <?php } ?>
          </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
