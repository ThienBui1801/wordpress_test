<?php

/**
 * Template Name: Directory Page
 */

get_header();

?>

<?php
get_template_part('template-parts/banner-page/banner');
?>

<div id="directory-page">
   <?php
   get_template_part('template-parts/ui/directory');
   ?>
</div>

<?php get_footer() ?>