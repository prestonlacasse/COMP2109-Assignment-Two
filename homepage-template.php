<?php
/**
 * Template Name: Homepage Layout
 * Template Post Type: page
 * 
 */
get_header();
?>
<main>
    <?php
        while(have_posts()) : the_post();
            the_content();
        endwhile;
        wp_reset_query();
    ?>
    <section class="masthead" style="background-image: url('<?php the_field('masthead_background_image'); ?>')">
        <div>
            <h1><?php the_field('masthead_title'); ?></h1>
        </div>
    </section>
    <section class="home-row-one">
        <h2><?php the_field('row_one_title'); ?></h2>
        <p><?php the_field('row_one_text'); ?></p>
    </section>
    <!-- Add a section of the custom post type created under functions -->
    <section class="tech-news-list">
        <article class="row">
            <?php
                $args2 = array('post_type' => 'news', 'post_per_page' => 12);
                $the_query = new WP_QUERY($args2);
                if($the_query->have_posts()) :
                    while($the_query->have_posts()) : $the_query->the_post();
            ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <?php if(has_post_thumbnail()) : ?>
                <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="Featured Image">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php 
                    the_excerpt();
                    the_category();
                ?>
                <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
                else:
                endif;
            ?>
        <article>
    </section>
</main>
<?php
get_footer();
?>