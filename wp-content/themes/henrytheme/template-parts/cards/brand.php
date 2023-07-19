<div class="brand-item">
   <a href="<?php echo get_the_permalink(get_the_ID()) ?>">
      <div class="image">
         <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php echo the_title() ?>" />
      </div>

      <div class="content">
         <h3 class="title"><?php echo get_the_title() ?></h3>
         <p class="description"><?php echo get_field('short_description') ?></p>
      </div>
   </a>
</div>