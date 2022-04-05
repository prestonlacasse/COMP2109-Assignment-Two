<?php
/**
 * Template Name: Tech News Layout
 * Template Post Type: news
 * 
 */
get_header();
?>
    <main class="tech-news-template row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <!-- display the featured image for post -->
            <?php if(has_post_thumbnail()); ?>
                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="Featured Image">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <!-- display the remainder of the content -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>