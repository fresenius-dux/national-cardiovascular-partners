<?php
$value_props = get_field("value_prop");
$VPClassIncr = 1;
if( !empty($value_props) ) { ?>
  <div class="value-prop">
    <div class="container">
      <div class="value-prop-inner-wrapper row">

        <?php foreach($value_props as $prop) {

          $prop_link_title = !empty( $prop['value_prop_link']['title'] ) ? $prop['value_prop_link']['title'] : 'Learn More';

          $prop_target = !empty( $prop['value_prop_link']['target'] ) ? 'target="' . $prop['value_prop_link']['target'] . '"' : '';

          if (!empty ($prop['value_prop_link']['url'])) : echo '<a href="' . $prop['value_prop_link']['url'] . '" ' . $prop_target . ' >'; endif;
        ?>

          <div class="value-prop-card col-md-3 col-sm-6 col-xs-12 VPBorderClass<?= $VPClassIncr ?>">
            <div class="HorizBorder<?= $VPClassIncr ?> border"></div>
            <h3><?= $prop['value_prop_title'] ?></h3>
            <p><?= $prop['value_prop_content'] ?></p>
            <p class="value-prop-link">
              <span class="morelink"><?= $prop_link_title ?></span>
            </p>
            <div class="VertBorder<?= $VPClassIncr ?> border"></div>
          </div>
          <?php if (!empty( $prop['value_prop_link']['url'])) { echo '</a>'; } ?>
      <?php $VPClassIncr++; } ?>
      </div>
    </div>
  </div>
<?php } ?>
