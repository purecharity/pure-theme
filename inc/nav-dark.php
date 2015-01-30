    <div class="siteid head-wide pin">
      <div class="row nopadrow">
        <div class="col span_8">
          <a style="color:<?php the_field('mobile_menu_link_font_color','options'); ?> !important;" class="menu-btn mobileshow" href="#"><span class="mobileshow">&#9776;</span></a> 
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <div class="nav mobilehide navigation col span_16 alignright">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu' ) ); ?>
        </div>
      </div>
    </div>
