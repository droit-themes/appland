<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appland
 */

$allowed_html = array(
	'a' => array(
		'href' => array(),
		'title' => array()
	),
	'br' => array(),
	'em' => array(),
	'strong' => array(),
    'iframe' => array(
        'src' => array(),
    )
);
$opt = get_option('appland_opt');
$blog_excerpt = !empty($opt['blog_excerpt']) ? $opt['blog_excerpt'] : 40;
$is_post_meta = isset($opt['is_post_meta']) ? $opt['is_post_meta'] : '1';
$is_post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '1';
$is_post_date = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';
$is_post_cat = isset($opt['is_post_cat']) ? $opt['is_post_cat'] : '';

$post_metas = get_post_meta(get_the_ID(), 'post_metas', true);
$post_video_url = isset($post_metas['post_video_url']) ? $post_metas['post_video_url'] : '';
$post_audio_url = isset($post_metas['post_audio_url']) ? $post_metas['post_audio_url'] : '';
?>

    <article <?php post_class('blog-items'); ?>>
        <?php
        if(has_post_format('video')) { ?>
            <div class="blog-video blog-video1">
                <?php echo wp_kses($post_video_url, $allowed_html); ?>
            </div>
            <?php
        }
        elseif(has_post_format('audio')) { ?>
            <div class="blog-video blog-video1">
                <?php echo wp_kses($post_audio_url, $allowed_html); ?>
            </div>
            <?php
        }
        else {
            if(has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" class="blog-img">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                </a>
                <?php
            }
        }
        if(is_sticky()) {
            echo '<div class="featured_post">'.esc_html__('Featured', 'appland').'</div>';
        }
        ?>
        <div class="blog-content blog_content_new">

            <?php if($is_post_meta == '1') : ?>
                <ul class="post-info post_info_top">

                    <?php if($is_post_author == '1') : ?>
                        <li>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ?>">
                                <?php echo get_the_author_meta('display_name'); ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if($is_post_date == '1') : ?>
                        <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span><a href="<?php appland_day_link(); ?> "> <?php the_time(get_option('date_format')); ?> </a> </span>
                        </li>
                    <?php endif; ?>

                </ul>
            <?php endif; ?>

            <a href="<?php the_permalink(); ?>">
                <h2 class="archive_post_title"> <?php the_title(); ?> </h2>
            </a>

            <p> <?php echo wp_trim_words(get_the_content(), $blog_excerpt); ?> </p>

        </div>
    </article>