<?php
$opt = get_option('appland_opt');
$page_metaboxes = get_post_meta(get_the_ID(), 'page_metaboxes', true);
$is_titlebar = isset($page_metaboxes['is_titlebar']) ? $page_metaboxes['is_titlebar'] : '1';

if($is_titlebar & !is_404()) {
    $titlebar_align = !empty($opt['titlebar_align']) ? $opt['titlebar_align'] : 'center';
    ?>
    <section class="banner-area <?php echo esc_attr($titlebar_align) ?>">
        <div class="container">
            <div class="banner-content">
                <h1 class="page-cover-tittle">
                    <?php
                    if( is_home() ) {
                        $blog_title = !empty($opt['blog_title']) ? $opt['blog_title'] : esc_html__('Blog', 'appland');
                        echo esc_html($blog_title);
                    }
                    elseif( is_singular('product') ) {
                        $product_metaboxes = get_post_meta(get_the_ID(), 'product_metaboxes', true);
                        $product_title = !empty($product_metaboxes['title']) ? $product_metaboxes['title'] : get_the_title();
                        echo esc_html($product_title);
                    }
                    elseif( is_single() ) {
                        the_title();
                    }
                    elseif( is_search() ) {
                        echo esc_html__('Search result for : ', 'appland').get_search_query();
                    }

                    elseif( is_archive() ) {
                        if( class_exists('WooCommerce') ) {
                            if( is_shop() ) {
                                echo !empty($opt['shop_title']) ? esc_html($opt['shop_title']) : '';
                            } else {
                                the_archive_title();
                            }
                        } else {
                            the_archive_title();
                        }
                    }
                    elseif( is_category() ) {
                        single_cat_title();
                    }
                    else {
                        the_title();
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(is_home() ) {
                        $blog_subtitle = !empty($opt['blog_subtitle']) ? $opt['blog_subtitle'] : get_bloginfo('description');
                        echo esc_html($blog_subtitle);
                    }
                    elseif(is_singular('product')) {
                        $product_subtitle = !empty($product_metaboxes['subtitle']) ? $product_metaboxes['subtitle'] : '';
                        echo esc_html($product_subtitle);
                    }
                    elseif(is_single()) {
                        echo (has_excerpt(get_the_ID())) ?  get_the_excerpt() : '';
                    }
                    elseif(is_archive()) {
                        if(class_exists('WooCommerce')) {
                            if(is_shop()) {
                                echo !empty($opt['shop_subtitle']) ? esc_html($opt['shop_subtitle']) : '';
                            }
                        }else {
                            $post_count = $GLOBALS['wp_query']->post_count;
                            $post_count = $post_count > 1 ? $post_count.esc_html__(' Posts', 'appland') : $post_count.esc_html__(' Post', 'appland');
                            echo esc_html($post_count).esc_html__(' found in this archive.', 'appland');
                        }
                    } elseif(!is_search()) {
                        echo !empty($page_metaboxes['page_sub_title']) ? esc_html($page_metaboxes['page_sub_title']) : '';
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>
    <?php
}