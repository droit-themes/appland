<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appland
 */
$opt = get_option('appland_opt');
$is_social_share = isset($opt['is_social_share']) ? $opt['is_social_share'] : '1';
$is_post_tag = isset($opt['is_post_tag']) ? $opt['is_post_tag'] : '1';
$is_single_post_cat = isset($opt['is_single_post_cat']) ? $opt['is_single_post_cat'] : '1';
$is_post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '';
$is_post_date = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';

$post_metas = get_post_meta(get_the_ID(), 'post_metas', true);
$post_video_url = isset($post_metas['post_video_url']) ? $post_metas['post_video_url'] : '';
$post_audio_url = isset($post_metas['post_audio_url']) ? $post_metas['post_audio_url'] : '';
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
?>

<div <?php post_class('blog-section blog_single') ?>>
    <article class="blog-items">

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
            if(has_post_thumbnail()) {
                ?>
                <a href="<?php the_permalink(); ?>" class="blog-img">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                </a>
                <?php
            }
        }
        ?>

        <div class="blog-content">

            <?php
            the_content();
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'appland' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'appland' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ));
            ?>

        </div>
    </article>


    <div class="post_tag_info d-flex">

        <div class="left-tags">

            <?php if($is_post_tag == '1') : ?>
                <div class="post_tag">
                    <?php the_tags(esc_html__('Tags : &nbsp;&nbsp;', 'appland'), '', ''); ?>
                </div>
            <?php endif; ?>

            <?php if($is_single_post_cat == '1') : ?>
                <div class="post_tag post_cat">
                    <span class="cat_label"> <?php esc_html_e('Category : &nbsp;&nbsp;', 'appland') ?> </span>
                    <?php the_category(' '); ?>
                </div>
            <?php endif; ?>

        </div>

    </div>

</div>