<?php
get_header(); ?>
<?php if (have_posts()) the_post(); ?>
<?php
the_content();
?>
<?php get_footer(); ?>