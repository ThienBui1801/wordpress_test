<?php
$base_url = get_template_directory_uri();

$list_image = get_field('desktop');
$list_image_mobile = get_field('mobile');

$next = $base_url . '/static/images/icons/arr.png';
$back = $base_url . '/static/images/icons/arl.png';

$option_home = [
   'type' => 'loop',
   'perPage' => 1,
   'perMove' => 1,
   'autoplay' => true,
   'pagination' => false,
   'arrows' => true,
   'interval' => 4000,
   'breakpoints' => [
      1023 => [
         'arrows' => false,
         'pagination' => true,
      ],
   ],
];

?>

<section id="home-slide">
   <div class="splide splide-image desktop" data-splide='<?php echo json_encode($option_home) ?>'>
      <div class="splide__arrows">
         <button class="splide__arrow splide__arrow--prev">
            <img src="<?php echo $back ?>" alt="Prev" />
         </button>
         <button class="splide__arrow splide__arrow--next">
            <img src="<?php echo $next ?>" alt="Next" />
         </button>
      </div>

      <div class="splide__track">
         <ul class="splide__list">
            <?php foreach ($list_image as $i => $lim) : ?>
               <li class="splide__slide">
                  <a href="<?php echo $lim['link'] ?>" class="home-image">
                     <img src="<?php echo $lim['image'] ?>" alt="Image" />
                  </a>
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>

   <div class="splide splide-image mobile" data-splide='<?php echo json_encode($option_home) ?>'>
      <div class="splide__track">
         <ul class="splide__list">
            <?php foreach ($list_image_mobile as $i => $lim) : ?>
               <li class="splide__slide">
                  <a href="<?php echo $lim['link'] ?>" class="home-image">
                     <img src="<?php echo $lim['image'] ?>" alt="Image" />
                  </a>
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>
</section>