<?php
  // the logo is in a global field
  $partner_fields = get_field('partner_fields', 'option');

  // set up the hero, and associated fields
  $hero = get_field('hero');
  // If the hero has an image get the source
  $hero_src = $hero['hero_image']['sizes']['large'];
  // the hero image is an inline style, or empty string if not set
  $hero_style_image = !empty($hero_src) ? 'style="background-image: url(' . $hero_src . ');"' : '';
  // Get the call to action link
  $cta_link = $hero['cta_link'];
  // set the CTA link text, with default
  // set the H1, with default to the title
  $h1 = $hero['alternate_h1'] ? $hero['alternate_h1'] : get_the_title();
  // the layout changes if a CTA is set
  $hero_col_classes = empty($cta_link) ? 'col-md-12' : 'col-md-9';
?>

<header class="ncp-hero" <?= $hero_style_image ?> >
    <div class="container">
        <div class="row">
          <div class="<?= $hero_col_classes ?>">
            <p class="breadcrumbs"><?php bcn_display(); ?></p>
            <div class="ncp-hero-headers">
              <?php
              if ( !empty($partner_fields) ) : ?>
              <img class="ncp-hero-logo"
                src="<?= $partner_fields['partner_logo']['url'] ?>"
                alt="<?= $partner_fields['partner_logo']['alt'] ?>">
              <?php endif ?>
              <?php if (!empty($h1)) { echo '<h1>' . $h1 . '</h1>'; } ?>
            </div>
          </div>
          <?php if (!empty($cta_link['url'])) {
            $cta_target = $cta_link['target'] ? 'target="' . $cta_link['target'] . '"' : '';
            $cta_link_text = $cta_link['title'] ?: 'Learn More'; ?>
            <div class="col-md-3 ncp-hero-action">
              <a href="<?= $cta_link['url'] ?>" <?= $cta_target ?> class="btn btn-cta"><?= $cta_link_text ?></a>
            </div>
          <?php } ?>
        </div>
    </div>
</header>
