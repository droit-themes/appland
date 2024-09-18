<?php
/**
 * Template Name: Blog Masonry
 */

get_header();
global $wp_query;
global $paged;
if(is_front_page()) {
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}else {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
$temp = $wp_query;
$wp_query = null;

$wp_query = new WP_Query(array(
    'post_type'     => 'post',
    'posts_per_page'=> get_option('posts_per_page'),
    'paged'         => $paged,
));
?>
    <section class="blog-area blog-masonry-area sec-pad">
        <div class="container">
            <div class="row blog-masonry">
                <?php
                while($wp_query->have_posts()):$wp_query->the_post();
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="blog-masonry-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('appland_370x700'); ?>
                            </a>
                            <div class="blog-post-related-content">
                                <a href="<?php the_permalink(); ?>"><h2> <?php the_title() ?> </h2></a>
                                <div class="post-info row m0">
                                    <div class="post-info-date"> <?php the_time(get_option('date_format')) ?> </div>
                                    <div class="post-author"><?php esc_html_e('by', 'appland'); ?>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ?>"> <?php echo get_the_author_meta('display_name'); ?> </a>
                                    </div>
                                </div>
                                <p> <?php echo wp_trim_words(get_the_content(), 12); ?> </p>
                                <a href="<?php the_permalink() ?>" class="read-more-btn"> <?php esc_html_e('Read More', 'appland'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-sm-12 pagination">
                    <?php Appland_pagination(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();