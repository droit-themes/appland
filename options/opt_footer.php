<?php

// Footer settings
Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Footer Settings', 'appland'),
	'id'        => 'appland_footer',
	'icon'      => 'dashicons dashicons-download',
	'fields'    => array(
		array(
			'title'     => esc_html__('Copyright text', 'appland'),
			'subtitle'  => esc_html__('Footer Copyright text', 'appland'),
			'id'        => 'copyright_txt',
			'type'      => 'editor',
			'default'   => '© 2018 <a href="http://droitthemes.com">DroiThemes</a>. All rights reserved',
			'args'    => array(
				'wpautop'       => true,
				'media_buttons' => false,
				'textarea_rows' => 5,
				//'tabindex' => 1,
				//'editor_css' => '',
				'teeny'         => false,
				//'tinymce' => array(),
				'quicktags'     => false,
			)
		),
	)
));

// Footer settings
Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Font colors', 'appland'),
	'id'        => 'appland_footer_font_colors',
	'icon'      => 'dashicons dashicons-editor-textcolor',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Footer top font color', 'appland'),
            'id'        => 'footer_top_font_color',
            'type'      => 'color_rgba',
            'default'   => array(
                'color' => '#fff',
                'alpha' => '0.7'
            )
        ),
        array(
            'title'     => esc_html__('Footer bottom font color', 'appland'),
            'id'        => 'footer_btm_font_color',
            'type'      => 'color_rgba',
            'default'   => array(
                'color' => '#fff',
                'alpha' => '0.5'
            ),
            'output'    => array('color' => '.footer_bottom')
        ),
        array(
            'title'     => esc_html__('Widget title color', 'appland'),
            'id'        => 'widget_title_color',
            'type'      => 'color',
            'default'   => '#e5e5e5',
            'output'    => array('.footer-top .footer_sidebar .widget .widget_title')
        ),
        array(
            'title'     => esc_html__('Footer link color', 'appland'),
            'id'        => 'footer_link',
            'type'      => 'link_color',
            'default'  => array(
                'regular'  => 'rgba(255, 255, 255, .5)', // blue
                'hover'    => '#fff', // red
                'active'   => '#8224e3',  // purple
                'visited'  => '#8224e3',  // purple
            ),
            'output' => array('
                .footer-widget a,
                .footer_sidebar .widget.widget_nav_menu ul li a,
                .footer_sidebar .widget.widget_meta ul li a,
                .footer_sidebar .widget.widget_pages ul li a,
                .footer_sidebar .widget.widget_archive ul li,
                .footer_sidebar .widget.widget_archive ul li a,
                .footer_sidebar .widget.widget_categories ul li a,
                .footer_four .footer-top .footer_sidebar .widget.widget_contact ul li .fleft a,
                .footer_sidebar .widget.widget_instagram span a,
                .footer_sidebar .widget.widget_contact ul li .fleft a,
                .footer-top .footer_sidebar .widget.about_us_widget .social_icon li i,
                .footer-top .footer_sidebar .widget.widget_twitter .tweets li .tweets-text a, 
                .footer-top .footer_sidebar .widget.widget_instagram span a,
                .footer_bottom a, .footer_bottom a, .footer-widget.widget ul li a,
                .footer-top .footer_sidebar .widget.widget_contact ul li .fleft a,
                .footer-top .footer_sidebar .widget.widget_twitter .tweets li .tweets-text a'
            )
        ),
	)
));

// Footer background
Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Background', 'appland'),
	'id'        => 'appland_footer_background',
	'icon'      => 'dashicons dashicons-admin-appearance',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Footer Background image', 'appland'),
            'desc'      => esc_html__('The main footer background image', 'appland'),
            'id'        => 'footer_bg_image',
            'type'      => 'media',
            'compiler'  => true
        ),
        array(
            'title'     => esc_html__('Footer top background color', 'appland'),
            'id'        => 'footer_top_bg_color',
            'type'      => 'color',
            'default'   => '#2a2a2a',
            'output'    => array('.footer-top'),
            'mode'      => 'background'
        ),
        array(
            'title'     => esc_html__('Footer bottom background color', 'appland'),
            'id'        => 'footer_btm_bg_color',
            'type'      => 'color',
            'default'   => '#242424',
            'output'    => array('.footer_bottom'),
            'mode'      => 'background'
        ),
	)
));

