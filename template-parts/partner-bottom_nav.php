<?php
/**
 * Template part for Partner's bottom navigation.
 *
 *
 * @package txakolina
 */


$bottom_nav = get_field_object('bottom_nav_section', 4111);
$bottom_nav_header = $bottom_nav['value']['bottom_nav_header'];
$bottom_nav_text = $bottom_nav['value']['bottom_nav_text'];
$value_props = $bottom_nav['value']['bottom_nav_repeater'];
?>
<?php if ($bottom_nav_header || $bottom_nav_text) { ?>

<section class="partner-bottom-nav">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <?php if ($bottom_nav_header) { ?>
        <div class="partner-bottom-nav-header-wrapper">
            <h2><?= $bottom_nav_header ?></h2>
        </div>
    <?php } ?>
    <?php if ($bottom_nav_text) { ?>
        <p class="partner-bottom-nav-snip"><?= $bottom_nav_text ?></p>
    <?php } ?>
    </div>
  </div>

  <div class="partner-bottom-nav-wrapper">
      <?php
        if ($value_props) {
      ?>
      <div class="row">
      <?php
        foreach ($value_props as $prop) {
          $target = $prop['bottom_nav_link_url']['target'] ? 'target="' . $prop['bottom_nav_link_url']['target'] . '"' : '';
      ?>

        <div class="partner-bottom-nav-element col-md-3 col-sm-6">
        <?php if ($prop['bottom_nav_link_url']['url']) { ?>
        <a href="<?= $prop['bottom_nav_link_url']['url'] ?>" <?= $target ?>>
        <?php } ?>
          <div class="partner-bottom-nav-element-inner-wrapper match-height ">
              <?php if ($prop['bottom_nav_icon']) { ?>
                  <p class="text-center"><i class="fal <?= $prop['bottom_nav_icon'] ?> fa-3x"></i></p>
              <?php } ?>
              <h4><?= $prop['bottom_nav_title'] ?></h4>
              <p class="text-center"><?= $prop['bottom_nav_content'] ?></p>
          </div>
        <?php if ($prop['bottom_nav_link_url']['url']) { ?>
        </a>
        <?php } ?>

        </div>

      <?php } // end $prop ?>
      </div>
    <?php } // end if $props ?>
  </div>
</section>

<?php } ?>
