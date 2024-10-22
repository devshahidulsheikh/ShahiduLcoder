<?php
/*
* The Template for Displaying Project Pages
*/ 
get_header() ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <?php get_template_part("template_part/post_setup",get_post_format()) ?>
          
        </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Template: single-project.php</h3>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer() ?>