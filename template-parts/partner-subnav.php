<div class="partner-nav-bar ">
  <?php wp_nav_menu(
    array(
      'theme_location' => 'partner-menu',
      'menu_class' => 'nav nav-pills nav-justified',
      'walker' => new wp_bootstrap_navwalker()
    )
  ); ?>
</div>

<div class="partner-nav-bar nav-bar-mobile">
  <div class="menu-ncp-subnav-container">
    <ul class="nav nav-pills nav-justified">
      <li class="menu-item">
        <a id="ncp-menu" href>name here</a>
      </li>
    </ul>
  </div>

  <nav id="ncp-site-navigation" class="site-navigation-ncp">
      <div class="nano">
          <div class="nano-content">
              <?php wp_nav_menu(
                array(
                  'theme_location' => 'partner-menu',
                  'menu_class' => 'ncp-menu'
                )
              ); ?>
          </div><!-- .nano-content -->
      </div><!-- .nano -->
  </nav><!-- #site-navigation -->
</div>
