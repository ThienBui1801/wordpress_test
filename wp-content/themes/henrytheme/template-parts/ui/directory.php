<?php
$array_alphabet = range('A', 'Z');
?>

<section>
   <!-- Search -->
   <div class="container">
      <!-- Input -->
      <div class="search">
         <form class="form-filter">
            <div class="search-text">
               <input type="text" name="s" id="search-input" class="input-search search-field search-box" placeholder="search our directory" />
               <input type="hidden" name="post_type" value="brands">
               <span class="icon-search">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
               </span>
            </div>

            <ul id="alphabet">
               <li class="all js-filter active">
                  All
               </li>

               <?php foreach ($array_alphabet as $letter) : ?>
                  <li class="al-item js-filter">
                     <?php echo $letter ?>
                  </li>
               <?php endforeach ?>
            </ul>
         </form>
      </div>
   </div>

   <div class="js-render brands-directory container">

   </div>

   <div class="brands-directory container main-render">
      <div>
         <?php
         $taxonomy = 'brand_cat';
         $categories = get_categories([
            'taxonomy' => $taxonomy,
            'hide_empty' => true,
         ]);

         foreach ($categories as $i => $category) :
            $category_slug = $category->slug;

            $args = [
               'post_type' => 'brand',
               'posts_per_page' => 20,
               'category' => $category_slug,
               'order' => 'ASC',
               'post_status' => 'publish',
               'tax_query' => [
                  [
                     'taxonomy' => 'brand_cat',
                     'field'    => 'slug',
                     'terms'    => $category_slug,
                  ],
               ],
            ];

            $brands1 = new WP_Query($args);

         ?>
            <div id="<?php echo $category_slug ?>" class="brand-container">
               <h2 class="main-title"><?php echo $category->name ?></h2>

               <div class="brand-grid js-brands">
                  <?php if ($brands1->have_posts()) :
                     while ($brands1->have_posts()) : $brands1->the_post();
                        get_template_part('template-parts/cards/brand');
                     endwhile;
                  endif; ?>
               </div>
            </div>


            <?php wp_reset_postdata(); ?>
         <?php endforeach; ?>
      </div>
   </div>

</section>