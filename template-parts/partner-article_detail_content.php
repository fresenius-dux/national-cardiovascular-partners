<?php
/**
 * Template part for Partner's Article Detail Content Section.
 *
 *
 * @package txakolina
 */

?>
<section class="ArticleContentContainer">
  <?php $quote = get_field('quote_section'); ?>
  <?php $bootstrap_col_classes = $quote['quote_text'] ? 'col-md-9 col-sm-12' : 'col-md-12';  ?>
    <div class="row">
        <div class="<?= $bootstrap_col_classes ?>">
          <div class="adcs-col adcs-col0">
            <?php the_content(); ?>
          </div>
        </div>
        <?php if ( $quote['quote_text'] ) : ?>
        <div class="col-md-3 col-sm-12">
          <div class="adcs-col adcs-col1">
              <blockquote class="quoteCont">
                  <p><?= $quote['quote_text'] ?></p>
              </blockquote>
              <div class="bioCont">
                <div class="headshot" style="background-image: url(<?= $quote['quote_author_image'] ?>);"></div>
                  <p class="drName">&mdash;<?= $quote['quote_author'] ?></p>
                  <?php if (!empty($quote['quote_link'])) : ?>
                    <a href="<?= $quote['quote_link'] ?>" class="morelink">Read More</a>
                  <?php endif ?>
              </div>
          </div>
        </div>
      <?php endif ?>
    </div>
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
</section>
