<?php
get_header();
?>

<?php
get_template_part('template-parts/banner-page/banner');
?>

<?php
$base_url = get_template_directory_uri();
$list_image = get_field('list_image');
$imgSingle = get_field('single_image');

$logo = get_field('logo_brand');
$link_brand = get_field('link_brand');
$link_facebook = get_field('link_facebook');
$link_group = get_field('link_group');

$position = get_field('short_description');
$number = get_field('short_number');
$time = get_field('short_time');

$option_img = [
   'type' => 'loop',
   'perPage' => 1,
   'perMove' => 1,
   'autoplay' => true,
   'arrows' => false,
   'interval' => 3000,
   'pagination' => true,
   'gap' => '12px',
];

?>

<section id="brand-single">
   <div class="container">
      <div class="brand-container">
         <!-- Images -->
         <div class="image">
            <div class="splide splide-image" data-splide='<?php echo json_encode($option_img) ?>'>
               <div class="splide__track">
                  <ul class="splide__list">
                     <?php foreach ($list_image as $i => $img) : ?>
                        <li class="splide__slide">
                           <div class="image-item">
                              <img src="<?php echo $img['image'] ?>" alt="Image" class="img" />
                           </div>
                        </li>
                     <?php endforeach ?>
                  </ul>
               </div>
            </div>
         </div>

         <!-- Content -->
         <div class="content">
            <div class="content-box">
               <!-- Logo -->
               <div class="logo">
                  <img src="<?php echo $logo ?>" alt="Logo" />
               </div>

               <!-- Slide Image -->
               <div class="avatar-image">
                  <img src="<?php echo $imgSingle ?>" alt="Image" />
               </div>

               <!-- Content -->
               <div class="main-text">
                  <h1 class="title"><?php echo get_the_title() ?></h1>
                  <p class="description"><?php echo get_the_content() ?></p>

                  <div class="socials">
                     <a href="<?php echo $link_brand ?>" class="<?php echo $link_brand == '' ? 'hidden' : '' ?>">
                        <i class="fa-solid fa-globe fa-2x" style="color: #000000;"></i>
                     </a>

                     <a href="<?php echo $link_facebook ?>" class="<?php echo $link_facebook == '' ? 'hidden' : '' ?>">
                        <i class="fa-brands fa-facebook-f fa-2x" style="color: #000000;"></i>
                     </a>

                     <a href="<?php echo $link_group ?>" class="<?php echo $link_group == '' ? 'hidden' : '' ?>">
                        <i class="fa-solid fa-users fa-2x" style="color: #000000;"></i>
                     </a>
                  </div>
               </div>

               <!-- Information -->
               <div class="info">
                  <span><?php echo $position ?></span>
                  <span style="padding: 0 8px;" class="<?php echo $number == '' ? 'hidden' : '' ?>">I</span>
                  <span class="<?php echo $number == '' ? 'hidden' : '' ?>"><?php echo $number ?></span>
                  <span style="padding: 0 8px;" class="<?php echo $time == '' ? 'hidden' : '' ?>">I</span>
                  <span class="<?php echo $time == '' ? 'hidden' : '' ?>"><?php echo $time ?></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
?>