<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appland
 */

get_header();
$padding = "";

while ( have_posts() ) : the_post();
    ?>
    <div class="appland-page container guten_elements">
        <div class="<?php echo !is_front_page() ? 'sec-pad':''; ?>">
          <?php
            the_content();
            wp_link_pages(array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'appland' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'appland' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ));
            ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </div> <!-- /.container -->

    </div>
<?php
endwhile; // End of the loop.


get_footer();
