<?php

/**
 * Template Name: Home Page
 */

get_header();

?>

<?php
get_template_part('template-parts/banner-home/banner-home');
?>

<div id="home-page">
   <?php
   get_template_part('template-parts/ui/home');
   ?>
</div>

<?php get_footer() ?>