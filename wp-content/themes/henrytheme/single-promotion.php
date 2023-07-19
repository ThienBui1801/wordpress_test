<?php
get_header();
?>

<?php
get_template_part('template-parts/banner-page/banner');
?>

<?php

$image = get_field('image');

?>

<section id="promotion-single">
   <div class="container">
      <div class="promo-single">
         <!-- Top -->
         <div class="top">
            <h1><?php echo the_title() ?></h1>
            <p><?php echo get_field('short_description') ?></p>
         </div>

         <!-- Middle -->
         <div class="middle">
            <img src="<?php echo $image ?>" alt="Image" />
         </div>

         <!-- Bottom -->
         <div class="bottom">
            <p><?php echo the_content() ?></p>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
?>