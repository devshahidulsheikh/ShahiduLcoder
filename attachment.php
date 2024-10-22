<?php
/*
* The Template for Podcast
*/ 
get_header() ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <?php get_template_part("template_part/post_setup") ?>
            <!-- <?php var_export($post) ?> -->

            <h4><a href="<?php echo $post->guid ?>">Download</a></h4>
          
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Template: attachment.php</h3>
            </div>
        </div>
    </div>
  </section>

  <?php get_footer() ?>