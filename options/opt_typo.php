<?php
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Typography settings', 'appland' ),
    'id'               => 'appland_typo_opt',
    'icon'             => 'dashicons dashicons-editor-textcolor',
    'fields'           => array(
        array(
            'id'        => 'body_typo',
            'type'      => 'typography',
            'font-size' => false,
            'line-height' => false,
            'color' => false,
            'text-align' => false,
            'subsets' => false,
            'title'     => esc_html__('Body font properties', 'appland'),
            'subtitle'  => esc_html__('Default font family is Quicksand', 'appland'),
            'output' => 'body, .app_banner_texts h2, .app_banner_texts, .menu li a, .title_h3, .p_font, .app_banner_texts h2, .app_banner_texts p, .banner_btn,
                        .call-action3 .call-text p, .blog-sidebar .widget .widget_title, .post-widget .media .media-body .tn_tittle, .widget.widget_nav_menu ul li a, 
                        .widget.widget_meta ul li a, .widget.widget_pages ul li a, .widget.widget_archive ul li a, .widget.widget_categories ul li a,
                        .affix .menu > li > a, .footer_bottom, .app_banner_btn,
                        .footer-top .footer_sidebar .widget, .post_tag_info .post_tag a, .tagcloud a
                        '
        ),
        array(
            'id'        => 'sec_title_typo',
            'type'      => 'typography',
            'title'     => esc_html__('Titles', 'appland'),
            'subtitle'  => esc_html__('Default font family is Quicksand', 'appland'),
            'font-size' => false,
            'line-height' => false,
            'color' => false,
            'text-align' => false,
            'subsets' => false,
            'output' => array('
                .footer-top .footer_sidebar .widget .widget_title,
                .blog-section .blog-items .blog-content h2,
                .call-action3 .call-text h2,
                .n_features_item .title_h3,
                .app_banner_texts h2,
                .mojar_function_content .title_h3,
                .section_title h2, .page-cover-tittle,
                h1, h2, h3, h4, h5, h6,
                .new_section_heading h2',
            )
        ),
        array(
            'id'        => 'sec_subtitle_typo',
            'type'      => 'typography',
            'title'     => esc_html__('Section subtitle', 'appland'),
            'subtitle'  => esc_html__('Default font family is Quicksand', 'appland'),
            'font-size' => false,
            'line-height' => false,
            'color' => false,
            'text-align' => false,
            'subsets' => false,
            'output' => array('
                .call-action3 .call-text p,
                .mojar_function_content p,
                .app_banner_texts p,
                .new_section_heading p,
                .section_title p'
            )
        ),
    )
));