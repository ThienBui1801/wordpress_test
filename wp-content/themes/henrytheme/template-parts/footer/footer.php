<?php

$base_url = get_template_directory_uri();
$logo = $base_url . '/static/images/logo-footer.png';

$fb = get_field('facebook_url', 'user_' . get_current_user_id());
$fb_icon = $base_url . '/static/images/icons/nav-icon-fb.png';

$ig = get_field('instagram_url', 'user_' . get_current_user_id());
$ig_icon = $base_url . '/static/images/icons/nav-icon-ig.png';

?>

<footer id="footer" class="footer">
   <div class="container">
      <div class="footer-container">
         <div class="footer-logo">
            <a href="<?php echo get_site_url() ?>">
               <img src="<?php echo $logo ?>" alt="Logo" class="image" />
            </a>

            <p class="footer-text">
               <span>Managed by Wellspring Holdings Pte Ltd</span>
               <span>&#xA9; 2023 YewTee Point, All rights reserved</span>
            </p>
         </div>

         <div class="footer-form">
            <div class="footer-socials">
               <div class="social">
                  <a href="<?php echo $fb ?>">
                     <img src="<?php echo $fb_icon ?>" alt="Icon" class="image" />
                  </a>

                  <a href="<?php echo $ig ?>">
                     <img src="<?php echo $ig_icon ?>" alt="Icon" class="image" />
                  </a>
               </div>

               <div class="form">
                  <h3>STAY UP TO DATE</h3>

                  <form action="POST" method="post">
                     <p>Get the latest events, promotions and events delivered right to your inbox</p>

                     <div>
                        <input type="email" name="email" id="email" placeholder="your email address" />

                        <button>sign me up!</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="footer-end">
            <div class="privacy-term">
               <a href="#">Privacy Policy</a>
               <a href="#">Term of use</a>
            </div>
         </div>
      </div>
   </div>
</footer>