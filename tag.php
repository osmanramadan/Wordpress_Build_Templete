<?php get_header() ?>
<div class="tag-page">
  <div class="container">
    <div class="head">
      <h1><?php single_tag_title("Tag: ") ?></h1>
      <?php if (tag_description()) : echo tag_description(); endif; ?>
    </div>
    <div class="tag-cloud">
      <h3>Tag Cloud</h3>
      <div><?php wp_tag_cloud() ?></div>
    </div>
    <div class="row">
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post() ?>
            <div class="col-lg-6">
              <div class="post">
                <div class="image"><?php the_post_thumbnail() ?></div>
                <div class="info">
                  <div class="cats"><?php the_category(' | ') ?></div>
                  <a class="post-title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  <span class="date"><?php the_time('j F Y') ?></span>
                  <div class="excerpt"><?php echo get_the_excerpt() ?></div>
                </div>
              </div>
            </div>
          <?php
          endwhile;
        endif
      ?>
    </div>
  </div>
</div>
<?php get_footer() ?>