<?php
  $partner_follow = get_field('partner_fields', 'options');
  if ($partner_follow['facebook_url'] || $partner_follow['twitter_url'] || $partner_follow['linkedin_url']) { ?>
  <section class="ncp-social-follow">
    <div class="row">
      <div class="col-md-12">
        <div class="ncp-social-follow-inner-wrapper">
          <h3 class="ncp-social-follow-cta-text">Follow National Cardiovascular Partners</h3>
          <div class="ncp-social-follow-icon-wrapper">
              <?php
              if ($partner_follow['facebook_url']) {
                  ?>
                  <a href="<?php echo esc_url($partner_follow['facebook_url']); ?>" class="ncp-social-follow-facebook"><i class="fab fa-facebook-square fa-3x"></i></a>
                  <?php
              }
              if ($partner_follow['linkedin_url']) {
                  ?>
                  <a href="<?php echo esc_url($partner_follow['linkedin_url']); ?>" class="ncp-social-follow-linkedin"><i class="fab fa-linkedin fa-3x"></i></a>
                  <?php
              }
              if ($partner_follow['twitter_url']) {
                  ?>
                  <a href="<?php echo esc_url($partner_follow['twitter_url']); ?>" class="ncp-social-follow-twitter"><i class="fab fa-twitter-square fa-3x"></i></a>
                  <?php
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
