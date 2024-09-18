<?php

/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function appland_fonts_url() {
    $opt = get_option('appland_opt');
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    $body_font_family = !empty($opt['body_typo']['font-family']) ? $opt['body_typo']['font-family'] : 'Quicksand';
    if ( 'off' !== esc_html__( 'on', 'appland' ) ) {
        $fonts[] = "$body_font_family:300,400,500,600,700,800";
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

function appland_scripts() {
    $opt = get_option('appland_opt');
    global $post;

    wp_register_style( 'bootstrap',  APPLAND_DIR_CSS.'/bootstrap.min.css' );

    wp_enqueue_style( 'bootstrap' );

    wp_enqueue_style('appland_gutenburg',  APPLAND_DIR_CSS.'/appland_gutenburg.css');

    wp_enqueue_style('font-awesome',  APPLAND_DIR_CSS.'/font-awesome.min.css');

    wp_enqueue_style('themify-icon',  APPLAND_DIR_VEND.'/themify-icon/themify-icons.css');

    wp_register_style('swiper',  APPLAND_DIR_VEND.'/swipper/swiper.min.css');

    wp_enqueue_style('linearicons',  APPLAND_DIR_CSS.'/linearicons.css');

    wp_enqueue_style('owl-carousel',  APPLAND_DIR_VEND.'/owl-carousel/owl.carousel.min.css');

    wp_enqueue_style('animate',  APPLAND_DIR_VEND.'/owl-carousel/animate.css');

    wp_register_style('magnific-popup',  APPLAND_DIR_VEND.'/magnific-popup/magnific-popup.css');

    wp_enqueue_style('appland-fonts', appland_fonts_url(), array(), null);

    if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'appland_hero_sec') ) {
        wp_register_style('YTPlayer',  APPLAND_DIR_VEND.'/video-player/css/jquery.mb.YTPlayer.min.css');
    }

    wp_register_style('appland-shop',  APPLAND_DIR_CSS.'/shop.css');

    if(class_exists('WooCommerce')) {
        wp_enqueue_style('appland-shop-global', APPLAND_DIR_CSS.'/shop-global.css');
        if( is_shop() ) {
            wp_enqueue_style('appland-shop');
        }
        if( is_singular('product') ||  is_tax('product_cat') ) {
            wp_enqueue_style('appland-shop');
            wp_enqueue_style('appland-shop-details',  APPLAND_DIR_CSS.'/shop-details.css');
        }
        if( is_singular('product') || is_cart() ) {
            wp_enqueue_style('dashicons');
        }
    }

    wp_enqueue_style( 'appland-wpd-style', APPLAND_DIR_CSS.'/wpd-style.css' );
    wp_enqueue_style( 'appland-style', APPLAND_DIR_CSS.'/style.css' );

    if( is_rtl() ) {
        wp_enqueue_style('bootstrap-rtl',  APPLAND_DIR_CSS.'/bootstrap-rtl.css');
    }
    wp_enqueue_style('appland-root', get_stylesheet_uri() );

    wp_enqueue_style('appland-responsive', APPLAND_DIR_CSS . '/responsive.css');

    $dynamic_css = "";

    if(is_404()) {
        if(!empty($opt['404_bg']['url']))
        $dynamic_css .= ".error_page_area:before{ background: url({$opt['404_bg']['url']}) repeat scroll center 0;}";
    }

    if(is_page()) {
        $dynamic_css .= get_the_post_thumbnail_url(get_the_ID()) ? "
            .banner-area {
                background: url(" . get_the_post_thumbnail_url(get_the_ID()) . ") no-repeat scroll center 0/cover;
            }
            " : '';
         $page_metaboxes = get_post_meta(get_the_ID(), 'page_metaboxes', true);

         if(!empty($page_metaboxes['page_header_color'])) {
             $dynamic_css .= '.page .banner-area:before {background:'.esc_attr($page_metaboxes['page_header_color']).' !important; }';
         }
         if(function_exists('cs_get_option')) {
             $padding_top = isset($page_metaboxes['page_padding_top']) ? 'padding-top: '.$page_metaboxes['page_padding_top'].'px;' : '';
             $padding_btm = isset($page_metaboxes['page_padding_bottom']) ? 'padding-bottom: '.$page_metaboxes['page_padding_bottom'].'px;' : '';
             $dynamic_css .= '.appland-page .sec-pad {'.$padding_top.$padding_btm.'}';
             if(!empty($page_metaboxes['menu_color'])) {
                 $dynamic_css .= ".navbar .navbar-nav > .menu-item a{color: {$page_metaboxes['menu_color']} !important;}";
                 $dynamic_css .= ".menu li.active a, .navbar .menu li a:hover{border-color: {$page_metaboxes['menu_color']} !important;}";
             }
         }
    }

    if(is_category()) {
        $terms = get_the_category();
        $term = get_category_by_slug($terms[0]->slug);
        $term_data = get_term_meta($term->term_id, 'appland_category_options', true);
        if(!empty($term_data['banner_bg'])) {
            $dynamic_css .= "
                    body.category .banner-area {
                        background: url(" . esc_url($term_data['banner_bg']) . ") no-repeat scroll center 0/cover;
                 }";
        }
    }

    if(class_exists('WooCommerce')) {
        $shop_bg_image = !empty($opt['shop_bg_image']['url']) ? $opt['shop_bg_image']['url'] : '';
        if(is_shop()) {
            $dynamic_css .= "
            .post-type-archive-product .banner-area {
                background: url(" . esc_url($shop_bg_image) . ") no-repeat scroll center 0/cover;
            }";
        }
        $product_metaboxes = get_post_meta(get_the_ID(), 'product_metaboxes', true);
        $product_banner = !empty($product_metaboxes['titlebar_bg']) ? $product_metaboxes['titlebar_bg'] : get_the_post_thumbnail_url();
        if(is_singular('product')) {
            $dynamic_css .= "
                .product-template-default .banner-area {
                    background: url(" . esc_url($product_banner) . ") no-repeat scroll center 0/cover;
                }
            ";
        }

        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $thumbnail_id = isset($cat->term_id) ? get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ) : '';
        $image = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : '';
        if($image) {
            $dynamic_css .= "
            .tax-product_cat .banner-area {
                background: url(" . esc_url($image) . ") no-repeat scroll center 0/cover;
            }
        ";
        }
    }

    // Typography
    if(class_exists('ReduxFrameworkPlugin')) {
        $menu_btn_size = !empty($opt['menu_btn_size']) ? $opt['menu_btn_size'].'px' : '';
        $dynamic_css .= ".btn-getnow {font-size: $menu_btn_size;}";
    }


    // Accent colors
    if(class_exists('ReduxFrameworkPlugin')) {
        $page_metaboxes = get_post_meta(get_the_ID(), 'page_metaboxes', true);
        $page_padding_top = isset($page_metaboxes['page_padding_top']) ? "padding-top: " . $page_metaboxes['page_padding_top'] . ";" : '';
        $page_padding_bottom = isset($page_metaboxes['page_padding_bottom']) ? "padding-bottom: " . $page_metaboxes['page_padding_bottom'] . ";" : '';
        $dynamic_css .= "
            .appland-page .container.sec-pad {"
                . esc_attr($page_padding_top) . esc_attr($page_padding_bottom) . ";
            }
        ";
        $scheme_type = !empty($opt['accent_color_type']) ? $opt['accent_color_type']  :'';
        $gradient1 = !empty($opt['accent_gradient']['from']) ? $opt['accent_gradient']['from'] : '';
        $gradient2 = !empty($opt['accent_gradient']['to']) ? $opt['accent_gradient']['to'] : '';
        
        if ($scheme_type == 'gradient') {
            $dynamic_css .= "
            .sec_title_five .br:before,
            .sec_title_five .br:after,
            .section_title .br:before, .section_title .br:after,
            .price_table .price_box h2 span,
            .pricing_area_three .price_table .price_box:hover .screenshot-btn,
            .testimonial-item .testimonial-content:after,
            .pricing_area_three .price_table .highlighted .price_box .screenshot-btn,
            .swiper-container .color-p .swiper-pagination-bullet.swiper-pagination-bullet-active,
            .swiper-container .color-p .swiper-pagination-bullet.swiper-pagination-bullet-active,
            .owl-dots .owl-dot.active, .clients-logo-one .owl-dots .owl-dot:hover,
            .screenshots-slider .screenshot:before,
            .testimonial_area_two .testimonial_carousel_two .owl-dots .owl-dot,
            .learn_btn, .sec_title .br:before,
            .pagination a:hover, .pagination a.active,
            .pagination span.page-numbers.current,
            .price_table .price_box .best-label, .learn_btn:hover {
                background-image: -moz-linear-gradient(0deg, " . esc_attr($gradient1) . " 0%, " . esc_attr($gradient2) . " 100%) !important;
                background-image: -webkit-linear-gradient(0deg, " . esc_attr($gradient1) . " 0%, " . esc_attr($gradient2) . " 100%) !important;
            }
            .price_table .price_box h2 span,
            .sec-pricing .price_table .price_box h2 span:first-child,
            .sec-pricing .price_table .price_box h2 span:last-child,
            .price_table .price_box .price_head i,
            .price_table .price_box h2, .error_content h1,
            .price_table .price_box .price_head h3,
            .team_area_four .team_member .social a:hover i,
            .more_features_four .exclusive_features-two .media .media-left i,
            .blog-masonry-item .blog-post-related-content .post-info .post-author a:hover,
            .thumbnail-blog:hover a, .thumbnail-blog:hover a i,
            .more_features_four .exclusive_features-two .media:hover h2 {
                background-image: -moz-linear-gradient(0deg, " . esc_attr($gradient1) . " 0%, " . esc_attr($gradient2) . " 100%) !important;
                background-image: -webkit-linear-gradient(0deg, " . esc_attr($gradient1) . " 0%, " . esc_attr($gradient2) . " 100%) !important;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            ";
        }

        $preloader_image = isset($opt['preloader_image']['url']) ? $opt['preloader_image']['url'] : APPLAND_DIR_IMG.'/status.gif';

        $post_metas = get_post_meta(get_the_ID(), 'post_metas', true);

        // ----------------- Single Post Title Bar Values -------------------------//
        if(!empty($post_metas['overlay_color'])) {
            $dynamic_css .= '.single-post .banner-area:before {background:'.esc_attr($post_metas['overlay_color']).' !important; }';
        }

        if(!empty($post_metas['titlebar_bg'])) {
            $dynamic_css .= ".single-post .banner-area {
                                background: url(" . esc_url($post_metas['titlebar_bg']) . ") no-repeat scroll center 0/cover;
                            }";
        }
        else {
            $dynamic_css .= !empty($opt['blog_header_bg']['url']) ? "
            .single-post .banner-area {
                background: url(" . esc_url($opt['blog_header_bg']['url']) . ") no-repeat scroll center 0/cover;
            }
            " : '';
        }


        if(is_home()) {
            $dynamic_css .= !empty($opt['blog_header_bg']['url']) ? "
            .banner-area {
                background: url(" . esc_url($opt['blog_header_bg']['url']) . ") no-repeat scroll center 0/cover;
            }
            " : '';
        }

        $footer_bg_image = isset($opt['footer_bg_image']['url']) ? "
            footer.row.footer-area.footer_four {
                   background: url(".esc_attr($opt['footer_bg_image']['url']).") no-repeat scroll center center/cover;   
            }" : '';

        $dynamic_css .= "
            $footer_bg_image
            #status {
                background-image: url(".esc_attr($preloader_image).");
                background-repeat: no-repeat;
                background-position: center;
            }
        ";
    }

    wp_add_inline_style('appland-root', $dynamic_css);

    $dynamic_js = '';

    wp_enqueue_script( 'bootstrap', APPLAND_DIR_JS.'/bootstrap.min.js', array('jquery'), '3.3.7', true );

    wp_enqueue_script( 'waypoints', APPLAND_DIR_VEND.'/waypoints/waypoints.min.js', array('jquery'), '1.6.2', true );

    wp_enqueue_script( 'counterup', APPLAND_DIR_VEND.'/counterup/jquery.counterup.min.js', array('jquery'), '1.0', false );

    wp_enqueue_script( 'magnific-popup', APPLAND_DIR_VEND.'/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );

    wp_enqueue_script( 'swiper', APPLAND_DIR_VEND.'/swipper/swiper.min.js', array('jquery'), '3.4.2', false );

    wp_enqueue_script( 'retina', APPLAND_DIR_JS.'/retina.js', array('jquery'), '1.0', false );

    if(function_exists('cs_get_option')) {
        wp_enqueue_script('nav', APPLAND_DIR_JS . '/nav.js', array('jquery'), '3.0.0', true);
        $dynamic_js .= '
            jQuery("#nav").onePageNav( {
                currentClass: \'active\', changeHash: !1, scrollSpeed: 1050,
                }
            );';
    }
    wp_enqueue_script( 'owl-carousel', APPLAND_DIR_VEND.'/owl-carousel/owl.carousel.min.js', array('jquery'), '3.0.0', true );
    wp_enqueue_script( 'twinlight', APPLAND_DIR_VEND.'/parallax/twinlight.js', array('jquery'), '1.18.0', true );
    wp_enqueue_script( 'jQuery-easing', APPLAND_DIR_JS.'/jQuery-easing.js', array('jquery'), '1.3', true );
    wp_enqueue_script( 'wow-js', APPLAND_DIR_VEND.'/wow/wow.min.js', array('jquery'), '1.18.0', true );

    if(is_page_template('page-contact.php')) {
        if(!empty($opt['map_api'])) {
            wp_enqueue_script('appland-googleapis-map', 'http://maps.googleapis.com/maps/api/js?key='.esc_attr($opt['map_api']).'');
        }
        $dynamic_js .= 'if (jQuery("#googleMap").length > 0) {
            let lat =  '.esc_js($opt['latitude']).';
            let long = '.esc_js($opt['longitude']).';
            let myCenter = new google.maps.LatLng(
                lat, long 
            );
            function changeMarker(newLogo) {
                "use strict";
                var marker = new google.maps.Marker({
                    position: myCenter,
                    icon: newLogo
                });
                var map = new google.maps.Map(document.getElementById("googleMap"), {
                    center: myCenter,
                    zoom: '.esc_js($opt['map_zoom']).',
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    fullscreenControl: false,
                });
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, "load", function () {
                changeMarker("'.esc_js($opt['map_marker']['url']).'");
            });
        }';
        wp_enqueue_script('appland-rechapcha', 'https://www.google.com/recaptcha/api.js');
    }

    if(is_page_template('page-blog-masonry.php')) {
        wp_enqueue_script( 'imagesloaded', APPLAND_DIR_VEND.'/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), '4.1.0', true );
        wp_enqueue_script( 'isotope', APPLAND_DIR_VEND.'/isotope/isotope-min.js', array('jquery'), '4.1.0', true );
    }
    wp_enqueue_script( 'wavify', APPLAND_DIR_VEND.'/parallax/jquery.wavify.js', array('jquery'), '1.0', true );

    if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'appland_hero_sec') ) {
        wp_enqueue_script( 'YTPlayer', APPLAND_DIR_VEND.'/video-player/jquery.mb.YTPlayer.js', array('jquery'), '1.0', true );
    };

    wp_enqueue_script( 'appland-custom', APPLAND_DIR_JS.'/custom.js', array('jquery'), '1.0', true );
    if(is_rtl()) {
        wp_dequeue_script('appland-custom');
        wp_enqueue_script( 'appland-custom-rtl', APPLAND_DIR_JS.'/custom-rtl.js', array('jquery'), '1.0', true );
    }
    wp_enqueue_script( 'appland-custom-wp', APPLAND_DIR_JS.'/custom-wp.js', array('jquery'), '1.0', true );

    $is_preloader = !empty($opt['is_preloader']) ? $opt['is_preloader'] : '1';
    if($is_preloader=='1') {
        $dynamic_js .= "
        //<![CDATA[
            jQuery(window).on('load', function() { // makes sure the whole site is loaded 
                jQuery('#status').fadeOut(); // will first fade out the loading animation 
                jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                jQuery('body').delay(350).css({'overflow':'visible'});
            })
        //]]>" . "\n";
    }

    $dynamic_js .= "";

    wp_add_inline_script('appland-custom-wp', $dynamic_js);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'appland_scripts');

add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style('appland-admin', APPLAND_DIR_CSS.'/appland-admin.css');
});

// Gutenberg editor assets
add_action( 'enqueue_block_assets', function() {
   wp_enqueue_style( 'appland-fonts', appland_fonts_url(), array(), null );
   wp_enqueue_style( 'bootstrap' );
   wp_enqueue_style( 'font-awesome',  APPLAND_DIR_CSS.'/font-awesome.min.css' );
});