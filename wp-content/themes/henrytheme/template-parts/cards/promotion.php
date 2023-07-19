<div class="promotion-item">
   <a href="<?php echo get_the_permalink() ?>" class="promotion-link">
      <!-- Image -->
      <div class="image">
         <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="Image" />
      </div>

      <!-- Content -->
      <div class="content">
         <div class="top">
            <h2 class="line-clamp-2"><?php echo the_title() ?></h2>
            <p class="line-clamp-2"><?php echo get_field('short_description') ?></p>
         </div>

         <div class="bottom">
            <span>
               Discover |
               <small>
                  <a href="<?php echo get_the_permalink() ?>">click for more</a>
               </small>
            </span>
         </div>
      </div>
   </a>
</div>