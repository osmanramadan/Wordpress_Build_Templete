<?php get_header(); ?>

<div class="homepage">
  <div class="section introduction mt-4">
  <div class="container">

  <?php echo generate_heading("welcome to" .' '. get_bloginfo("name"),'latest posts',"title-three");?>
  <div class="text-center">
    <?php
        get_search_form();
        
    ?>
  </div>
  </div>
  </div>
</div>

<?php get_footer(); ?>
