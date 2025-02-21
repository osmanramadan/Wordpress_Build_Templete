<?php get_header(); ?>

<div class="homepage">
  <div class="section introduction mt-4">
  <div class="container">

  <?php echo generate_heading("welcome to" .' '. get_bloginfo("name"),'Every New With Us',"title-three");?>
  <div class="text-center">
    <?php
        get_search_form();
        
    ?>
  </div>
  <div class="books">
  <div class="single-post">
        <?php 
          $movies_arg = array(
            'posts_per_page' => -1,
            'category_name' => "books",

          );
          $movies = new WP_Query($movies_arg);

          if($movies->have_posts()) :
            while($movies->have_posts()) :
              $movies->the_post(); ?>  
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail("full") ?>
                </a>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>

  <!-- Start Books 2 Section -->
  
      <?php echo generate_heading("Books", "Latest Added Books", "title-three") ?>
      <div class="multiple-posts">
        <?php 
          $books_arg = array(
            'posts_per_page' => -1,
            'category_name' => "books",
          );
          $books = new WP_Query($books_arg);
          if($books->have_posts()) :
            while($books->have_posts()) :
              $books->the_post(); ?>  
                <div class="book">
                  <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail("full") ?>
                  </a>
                  <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <div class="excerpt">
                    <?php echo get_the_excerpt() ?>
                  </div>
                </div>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>

  </div>
   
  <!-- End Books Section -->

    <!-- Start Random Posts Section -->
    <div class="section random-posts">
    <div class="container">
      <?php echo generate_heading("Random Posts", "Random Posts From All Categories", "title-two") ?>
      <div class="posts-container">
        <?php 
          $random_arg = array(
            'posts_per_page' => 8,
            'orderby'        => 'rand',
          );
          $random = new WP_Query($random_arg);
          if($random->have_posts()) :
            while($random->have_posts()) :
              $random->the_post(); ?>  
                <div class="post">
                  <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <div class="excerpt"><?php echo get_the_excerpt() ?></div>
                  <div class="info">
                    <span class="date"><i class="fa-regular fa-calendar fa-fw"></i> <?php echo get_the_date() ?></span>
                    <span class="author"><i class="fa-regular fa-user fa-fw"></i> <?php the_author() ?></span>
                    <span class="category"><i class="fa-solid fa-tags fa-fw"></i> <?php echo get_the_category_list(" | ") ?></span>
                    <span class="comments"><i class="fa-regular fa-comments fa-fw"></i> <?php comments_number('0', '1', '%') ?></span>
                  </div>
                </div>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </div>
  <!-- End Random Posts Section -->

  <!-- End Random Posts Section -->
    <!-- Start Games Section -->
    <div class="section games">
    <div class="container">
      <?php echo generate_heading("Games", "Latest Added Games", "title-two") ?>
      <div class="games-container">
        <?php 
          $games_arg = array(
            'posts_per_page' => 6,
            'cat'            => "books",
          );
          $games = new WP_Query($games_arg);
          if($games->have_posts()) :
            while($games->have_posts()) :
              $games->the_post(); ?>  
                <div class="game">
                  <a class="main-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail("full") ?></a>
                  <span class="id"><?php echo get_the_id() ?></span>
                  <span class="comments"><i class="fa-regular fa-comments fa-fw"></i> <?php comments_number('0', '1', '%') ?></span>
                  <!-- Start Info -->
                  <div class="info">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    <div class="excerpt"><?php echo get_the_excerpt() ?></div>
                    <div class="data">
                      <span class="date"><i class="fa-regular fa-calendar fa-fw"></i> <?php echo get_the_date() ?></span>
                      <span class="author"><i class="fa-regular fa-user fa-fw"></i> <?php the_author() ?></span>
                    </div>
                    <div class="tags">
                      <?php 
                        $tags = get_the_tags();
                        if($tags) :
                          foreach($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)) ?>"><?php echo $tag->name ?></a>
                          <?php
                          endforeach;
                        endif;
                      ?>
                    </div>
                  </div>
                  <!-- End Info -->
                </div>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </div>
  <!-- End Games Section -->

  </div>
  </div>
</div>

<?php get_footer(); ?>
