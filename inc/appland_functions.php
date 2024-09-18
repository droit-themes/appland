<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package appland
 */


// Image sizes
add_image_size('appland_228x405', 228, 405, true); // Screenshot carousel style 6
add_image_size('appland_370x280', 370, 280, true); // Blog masonry thumbnail size
add_image_size('appland_370x700', 370, 700, true); // Blog masonry thumbnail size
add_image_size('appland_370x190', 370, 190, true); // Blog grid thumbnail size
add_image_size('appland_80x80', 80, 80, true); // Testimonial author image
add_image_size('appland_50x50', 50, 50, true); // Testimonial author image
add_image_size('appland_570x340', 570, 340, true);
add_image_size('appland_110x80', 110, 80, true);
add_image_size('appland_800x400', 800, 400, true);


// Pagination
function appland_pagination() {
    the_posts_pagination(array(
        'screen_reader_text' => ' ',
        'prev_text'          => '<i class="fa fa-angle-left"></i>',
        'next_text'          => '<i class="fa fa-angle-right"></i>'
    ));
}


// Comment list
function appland_comments($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    ?>
    <div <?php comment_class('media comment') ?> id="comment-<?php comment_ID() ?>">
        <div class="media-left">
            <?php
            if(get_avatar($comment)) {
                echo get_avatar($comment, 70, null, null, array('class'=> 'img-circle'));
            }
            ?>
        </div>
        <div class="media-body">
            <div class="comment-meta">
                <h5 class="commenter-name"> <?php comment_author(); ?> </h5>
                <h6 class="comment_time"> <?php comment_date(get_option('date_format')); ?> </h6>
                <p>
                    <?php
                    if ( $comment->comment_approved == '0' ) : ?>
                        <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'appland' ); ?></em>
                    <?php endif; ?>
                </p>
            </div>
            <div class="comment_item_text">
                <?php comment_text(); ?>
            </div>
            <?php comment_reply_link(array_merge( $args, array('reply_text'=>''.esc_html__('Reply', 'appland'), 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
    </div>
<?php
}


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function appland_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'appland_pingback_header' );


// Move the comment field to bottom
add_filter( 'comment_form_fields', function ( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
});


// Social Links
function appland_social_links() {
    $opt = get_option('appland_opt');
    $dribbble       = !empty($opt['dribble']) ? $opt['dribbble'] : '';
    $facebook       = !empty($opt['facebook']) ? $opt['facebook'] : '';
    $twitter        = !empty($opt['twitter']) ? $opt['twitter'] : '';
    $youtube        = !empty($opt['youtube']) ? $opt['youtube'] : '';
    $lnkedin        = !empty($opt['linkedin']) ? $opt['linkedin'] : '';
    $googleplus     = !empty($opt['googleplus']) ? $opt['googleplus'] : '';
    ?>
    <?php if(!empty($facebook)) { ?>
        <li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if(!empty($twitter)) { ?>
        <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if(!empty($dribbble)) { ?>
        <li><a href="<?php echo esc_url($dribbble); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if(!empty($youtube)) { ?>
        <li><a href="<?php echo esc_url($youtube); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if(!empty($lnkedin)) { ?>
        <li><a href="<?php echo esc_url($lnkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if(!empty($googleplus)) { ?>
        <li><a href="<?php echo esc_url($googleplus); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php
}

// Search form
function appland_search_form($is_button = true) {
    $opt = get_option('appland_opt');
    $error_home_btn_label = !empty($opt['error_home_btn_label']) ? $opt['error_home_btn_label'] : esc_html__('Back to home Page', 'appland');
    ?>
    <div class="appland-search">
        <form class="form-wrapper" action="<?php echo esc_url(home_url('/')); ?>" _lpchecked="1">
            <input type="text" id="search" placeholder="<?php esc_attr_e('Search ...', 'appland'); ?>" name="s">
            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
        </form>
        <?php if($is_button == true) { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home_btn">
                <?php echo esc_html($error_home_btn_label); ?>
            </a>
        <?php } ?>
    </div>
    <?php
}


// add category nicenames in body and post class
function appland_post_class( $classes ) {
    global $post;
    if(!has_post_thumbnail()) {
        $classes[] = 'no-post-thumbnail';
    }
    return $classes;
}
add_filter( 'post_class', 'appland_post_class' );


// Body classes
add_filter( 'body_class', function($classes) {
    $opt = get_option('appland_opt');
    $nav_layout = !empty($opt['nav_layout']) ? 'nav_'.$opt['nav_layout'] : '';
    $menu_alignment = !empty($opt['menu_alignment']) ? ' menu_'.$opt['menu_alignment'] : '';

    if( is_front_page() ) {
        $classes[] = 'front-page';
    }

    if ( !isset($opt['main_logo']['url']) ) {
        $classes[] = 'text_logo';
    }

    $classes[] = $nav_layout;

    return $classes;
});

// Day link to archive page
function appland_day_link() {
    $archive_year   = get_the_time('Y');
    $archive_month  = get_the_time('m');
    $archive_day    = get_the_time('d');
    echo get_day_link( $archive_year, $archive_month, $archive_day);
}


// Limit latter
function appland_limit_latter($string, $limit_length, $suffix = '...') {
    if (strlen($string) > $limit_length) {
        echo substr($string, 0, $limit_length) . $suffix;
    }
    else {
        echo esc_html($string);
    }
}


// Get comment count text
function appland_comment_count($post_id) {
    $comments_number = get_comments_number($post_id);
    if($comments_number == 0) {
        $comment_text = esc_html__('No comment', 'appland');
    }elseif($comments_number == 1) {
        $comment_text = esc_html__('One comment', 'appland');
    }elseif($comments_number > 1) {
        $comment_text = $comments_number.esc_html__(' Comments', 'appland');
    }
    echo esc_html($comment_text);
}

// Change page featured image labels
add_filter( 'post_type_labels_page', function( $labels ) {
    $labels->featured_image 	= esc_html__('Banner Background Image', 'appland');
    $labels->set_featured_image 	= esc_html__('Set Banner Background Image', 'appland');
    $labels->remove_featured_image 	= esc_html__('Remove Banner Background Image', 'appland');
    $labels->use_featured_image 	= esc_html__('Use as Banner Background Image', 'appland');

        return $labels;

}, 10, 1 );