
<footer class="bg-dark text-light">
        <div class="container">
          <div class="row footer-links">
            <div class="col-md-4">
            <a  href="/"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp"   style="width:auto; height:auto; max-height:60px;"  alt="logo"></a>
            <p class="description"><?php bloginfo('description'); ?></p>
            </div>
            <div class="col-md-4">
              <h4>Books Categories</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo esc_url(get_category_link(3)) ?>">
                    <?php echo get_cat_name(3) ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_category_link(4)) ?>">
                    <?php echo get_cat_name(4) ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_category_link(9)) ?>">
                    <?php echo get_cat_name(9) ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_category_link(10)) ?>">
                    <?php echo get_cat_name(10) ?>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4>Important Links</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo esc_url(get_page_link(2)) ?>">
                    <?php echo get_the_title(2) ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                    Testimonials
                  </a>
                </li>
                <li>
                  <a href="#">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="#">
                    The Team
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
            </div>
            <div class="col-sm-6">
              <div class="social-icons">
                <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <?php wp_footer() ?>
  </body>
</html>