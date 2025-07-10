<?php
/*
Template Name: Custom Page
*/
get_header();
?>

<div class="custom-page-container">
    <h1><?php the_title(); ?></h1>
    <div class="content"><?php the_content(); ?></div>
</div>

<?php get_footer(); ?>
