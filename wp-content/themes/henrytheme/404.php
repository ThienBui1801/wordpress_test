<?php
get_header();

$base_url = get_template_directory_uri();
$banner = $base_url . '/static/images/directory-top-banners.jpg';
$banner_mobile = $base_url . '/static/images/directory-top-banners-mobile.jpg';

?>

<section class="error">
   <div class="container">
      <div class="error-container">
         <h1>Page Not Found</h1>
         
         <a href="<?php echo get_site_url() ?>">go to home</a>
      </div>
   </div>
</section>

<?php get_footer() ?>