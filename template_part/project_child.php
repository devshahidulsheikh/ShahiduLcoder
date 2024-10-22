<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
<div class="col-md-4">
    <div class="blog_area">
        <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
        </div>
        <div class="post_details">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <span> <i class="fas fa-calendar-alt"></i> </span><?php the_date("j F Y") ?>
            <span> At </span>
            <span> <i class="fas fa-clock"></i> </span><?php the_time() ?>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
<?php
    endwhile;
    else :
    _e("No post found","shahidul");
    endif;
?>
<div id="page_nav">
    <?php if ("sha_pagenav") {sha_pagenav(); } else { ?>
        <?php previous_posts_link() ?>
        <?php next_posts_link() ?>
    <?php } ?>
</div>