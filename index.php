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
  <!-- Start Games Section -->
  <div class="section books">
    <div class="container">
      <?php echo generate_heading("Games", "Latest Added Games", "title-two") ?>
      <div class="books-container">
        <?php 
          $games_arg = array(
            'posts_per_page' => 6,
            'category_name' => "games",
          );
          $games = new WP_Query($games_arg);
          if($games->have_posts()) :
            while($games->have_posts()) :
              $games->the_post(); ?>  
                <div class="book">
                  <a class="main-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail("full") ?></a>
                  <span class="id"><?php echo get_the_id() ?></span>
                  <span class="comments"><i class="fa-regular fa-comments fa-fw"></i> <?php comments_number('0', '1', '%') ?></span>
                                    
                  <?php 
                    $author_id = get_the_author_meta('ID'); // Get Author ID
                    $author_avatar = get_avatar($author_id, 64);
                    $author_link = get_author_posts_url($author_id);
                    echo '<a class="author-avatar" href="' . esc_url($author_link) . '">' . $author_avatar . '</a>';
                  ?>
                  <!-- Start Info -->
                  <div class="info">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    <div class="excerpt"><?php echo get_the_excerpt() ?></div>
                    <div class="company">
                      <?php 
                        $company = get_post_meta(get_the_ID(), 'company', true);
                        if ($company) :
                          echo 'Created By <span>' . $company . '</span>';
                        endif;
                      ?>
                    </div>
                    <div class="company">
                      <?php 
                        $companies = get_post_meta(get_the_ID(), 'company');
                        if ($companies) :
                          echo 'Created By ';
                          foreach($companies as $company) :
                            echo '<span>' . $company . '</span> ';
                          endforeach;
                        endif;
                      ?>
                    </div>
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
     <!-- Start Stat -->
  <div class="section stats">
    <div class="container">
      <?php echo generate_heading("Statistics", "Our Website Statistics", "title-two") ?>
      <div class="stats-container">
        <div class="stat">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/users.png' ?>" alt="">
          <span>Users</span>
          <span class="count"><?php echo count_users()['total_users'] ?></span>
        </div>
        <div class="stat second">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/posts.png' ?>" alt="">
          <span>Posts</span>
          <span class="count"><?php echo wp_count_posts()->publish ?></span>
        </div>
        <div class="stat">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/comments.png' ?>" alt="">
          <span>Comments</span>
          <span class="count"><?php echo wp_count_comments()->approved ?></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Cats Stat -->
  <div class="section cats-stats">
    <div class="container">
      <?php echo generate_heading("Categories Statistics", "Our Website Categories Statistics", "title-three") ?>
      <div class="stats-container">
        <div class="stat">
          <i class="fa-solid fa-gamepad"></i>
          <span>Stories</span>
          <span class="count">
            <?php
              $Stories = get_posts(array('category' => 2, 'numberposts' => -1));
              echo count($Stories);
            ?>
          </span>
        </div>
        <div class="stat">
          <i class="fa-solid fa-film"></i>
          <span>Novels</span>
          <span class="count">
            <?php
              $Novels = get_posts(array('category' => 3, 'numberposts' => -1));
              echo count($Novels);
            ?>
          </span>
        </div>
        <div class="stat">
          <i class="fa-solid fa-book"></i>
          <span>Books</span>
          <span class="count">
            <?php
              $books = get_posts(array('category' => 10, 'numberposts' => -1));
              echo count($books);
            ?>
          </span>
        </div>
        <div class="stat">
          <i class="fa-solid fa-link"></i>
          <span>Websites</span>
          <span class="count">0</span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Cats Stat -->
  <!-- End Stat -->
     <!-- Start Newsletter -->
  <div class="newsletter">
    <div class="container">
      <h2>Newsletter</h2>
      <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
      <form method="post">
        <input type="email" name="email" placeholder="Enter Your Email">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </div>
  <!-- End Newsletter -->
  </div>
  </div>
</div>

<?php get_footer(); ?>
