<?php

$base_url = get_template_directory_uri();
$logo = $base_url . '/static/images/yewteepoint-logo-1.jpg';

$fb = get_field('facebook_url', 'user_' . get_current_user_id());
$fb_icon = $base_url . '/static/images/icons/nav-icon-fb.png';

$ig = get_field('instagram_url', 'user_' . get_current_user_id());
$ig_icon = $base_url . '/static/images/icons/nav-icon-ig.png';

?>

<header id="header">
   <div class="container header">
      <nav class="row header-container">
         <a href="<?php echo get_site_url() ?>">
            <img src="<?php echo $logo ?>" alt="Header Logo" class="header-logo" />
         </a>

         <button id="btnNav" class="btn-hamburger">
            <span class="icon-mobile"></span>
         </button>

         <div class="nav-container">
            <!-- Socials Icons -->
            <div class="nav-socials">
               <a href="<?php echo $fb ?>">
                  <img src="<?php echo $fb_icon ?>" alt="Icon Fb" />
               </a>

               <a href="<?php echo $ig ?>">
                  <img src="<?php echo $ig_icon ?>" alt="Icon Ig" />
               </a>
            </div>

            <!-- List Nav Menu -->
            <?php
            wp_nav_menu(array(
               'theme_location' => 'main-menu',
               'container' => false,
               'menu_li_class' => '',
               'menu_li_a_class' => '',
               'menu_id' => 'nav',
               'menu_class' => 'nav',
               'sub_menu' => true,
            ))
            ?>
         </div>
      </nav>

      <div id="navMobile" class="nav-mobile">
         <!-- Socials Icons -->
         <div class="nav-socials">
            <a href="<?php echo $fb ?>">
               <img src="<?php echo $fb_icon ?>" alt="Icon Fb" />
            </a>

            <a href="<?php echo $ig ?>">
               <img src="<?php echo $ig_icon ?>" alt="Icon Ig" />
            </a>
         </div>

         <!-- List Nav Menu -->
         <?php
         wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_li_class' => '',
            'menu_li_a_class' => '',
            'menu_id' => 'nav',
            'menu_class' => 'nav',
            'sub_menu' => true,
         ))
         ?>
      </div>
   </div>
</header>