<?php
$link = get_field('link_promotion');
?>

<section id="promotion-home">
   <div class="container">
      <div class="promotion-container">
         <?php
         $args = [
            'post_type' => 'promotion',
            'post_per_page' => 3,
            'order' => 'ASC',
         ];

         $promotions = new WP_Query($args);

         if ($promotions->have_posts()) :
            while ($promotions->have_posts()) : $promotions->the_post();
               get_template_part('template-parts/cards/promotion');
            endwhile;
         endif;
         wp_reset_postdata();
         ?>
      </div>

      <!-- Button -->
      <div class="button-promotion">
         <a href="<?php echo $link ?>">load more</a>
      </div>
   </div>
</section>