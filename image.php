<?php
/*
* The Template for Image
*/ 
get_header() ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <?php get_template_part("template_part/post_setup") ?>
            <!-- <?php var_export($post) ?> -->

            <!-- <img src="<?php echo $post->guid ?>" alt="<?php the_title() ?>"> -->
            <img src="<?php echo esc_url($post->guid) ?>" alt="<?php esc_attr(the_title()) ?>">
          
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Template: image.php</h3>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer() ?>