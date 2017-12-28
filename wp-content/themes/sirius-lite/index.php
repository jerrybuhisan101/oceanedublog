<?php get_header(); ?>

<?php $sirius_blog_feed_sidebar_show = sirius_get_option('sirius_blog_feed_sidebar_show'); ?>


<section class="blog-feed">
    <div class="container">
    <h1 class="feed-title"><?php echo esc_html(get_the_archive_title()); ?></h1>
    <?php echo category_description( $category_id ); ?>
      
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<?php if (strpos($url,'/2017/')) { ?>
    
<div class="main-column one-column">
          <!--  <h1 class="feed-title"><?php echo esc_html(get_the_archive_title()); ?></h1> -->
            <?php get_template_part('parts/feed'); ?>

        </div>
         <?php get_template_part('parts/feed', 'pagination'); ?> 
        


<?php } elseif ($sirius_blog_feed_sidebar_show == 0) { ?>


<div class="row">
            <div class="col-md-8">
                <div class="main-column two-columns">
                <?php get_template_part('parts/feed'); ?>
                </div>
                 <?php get_template_part('parts/feed', 'pagination'); ?> 
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                <?php get_sidebar(); ?>
                </div>
            </div>
        </div>


        
        <?php } else { ?>
        <div class="main-column one-column">
          <!--  <h1 class="feed-title"><?php echo esc_html(get_the_archive_title()); ?></h1> -->
            <?php get_template_part('parts/feed'); ?>

        </div>
        <?php get_template_part('parts/feed', 'pagination'); ?>
        
        <?php } ?>



    </div>
</section>
<?php get_footer(); ?>