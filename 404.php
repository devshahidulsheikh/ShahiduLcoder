<?php
/*
* The 404 Template File
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
          
            <h1>⚠</h1>
          <p>404 Error - Page not Found</p>
          <h1>Ooops! Looks Like Something Was Wrong</h1>
          <div class="error_search">
            <?php get_search_form() ?>
          </div>
          <a href="<?php echo home_url() ?>" class="homepage">Go to HOME</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>