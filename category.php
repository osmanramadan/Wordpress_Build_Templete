<?php get_header(); ?>

<div class="cat-head">
  <h1><?php single_cat_title(); ?></h1>
  <div class="desc"><?php echo category_description(); ?></div>
</div>

<div class="container cat">
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <?php if ( have_posts() ) : 
          while ( have_posts() ) : 
            the_post();
          ?>
          <div class="col-md-6">
            <div class="card  mb-4">
            
              <?php 
                if ( has_post_thumbnail() ) : 
                  the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid']);
                endif;
              ?>
              
              <div class="card-body">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="sidebar"><?php get_sidebar(); ?></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>