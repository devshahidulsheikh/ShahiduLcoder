<?php
/*
* The Template for Video
*/ 
get_header() ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <?php get_template_part("template_part/post_setup") ?>
            <!-- <?php var_export($post) ?> -->

            <video controls>
              <source src="<?php echo $post->guid ?>" type="video/mp4">
            </video>
          
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Template: video.php</h3>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer() ?>