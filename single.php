<?php get_header(); ?>

<main>
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="meta">
      <span>By <?php the_author(); ?></span> |
      <span><?php the_time('F j, Y'); ?></span> |
      <span><?php the_category(', '); ?></span>
    </div>
    <?php the_content(); ?>
    <?php comments_template(); ?>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
