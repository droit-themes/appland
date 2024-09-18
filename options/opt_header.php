<?php

// Header Section
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Header Settings', 'appland' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-home'
) );


Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Logo', 'appland' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => 'dashicons dashicons-schedule',
    'fields'           => array(
        array(
            'title'     => esc_html__('Logo Type', 'appland'),
            'id'        => 'logo_type',
            'type'      => 'button_set',
            'default'   => 'image',
            'options'   => array(
                'image' => esc_html__('Image Logo', 'appland'),
                'text'  => esc_html__('Text Logo', 'appland'),
            )
        ),

        array(
            'title'     => esc_html__('Text Logo', 'appland'),
            'id'        => 'text_logo',
            'type'      => 'text',
            'default'   => get_bloginfo('name'),
            'required'  => array('logo_type', '=', 'text')
        ),

        array(
            'title'     => esc_html__('Text Logo Typography', 'appland'),
            'id'        => 'text_logo_typo',
            'type'      => 'typography',
            'output'    => array( '.navbar-brand h3' ),
            'required'  => array('logo_type', '=', 'text')
        ),

        array(
            'title'     => esc_html__('Upload logo', 'appland'),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'appland' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'compiler'  => true,
            'required'  => array('logo_type', '=', 'image'),
            'default'   => array(
                'url'   => APPLAND_DIR_IMG.'/logo_default.png'
            )
        ),

        array(
            'title'     => esc_html__('Sticky header logo', 'appland'),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'required'  => array('logo_type', '=', 'image'),
            'compiler'  => true,
            'default'   => array(
                'url'   => APPLAND_DIR_IMG.'/logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__('Retina Logo', 'appland'),
            'subtitle'  => esc_html__('The retina logo should be double (2x) of your original logo', 'appland'),
            'id'        => 'retina_logo',
            'type'      => 'media',
            'required'  => array('logo_type', '=', 'image'),
            'compiler'  => true,
            'default'   => array(
                'url'   => APPLAND_DIR_IMG.'/logo_default_retina.png'
            )
        ),

        array(
            'title'     => esc_html__('Retina Sticky Logo', 'appland'),
            'subtitle'  => esc_html__('The retina logo should be double (2x) of your original logo', 'appland'),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
            'compiler'  => true,
            'required'  => array('logo_type', '=', 'image'),
            'default'   => array(
                'url'   => APPLAND_DIR_IMG.'/logo_sticky_retina.png'
            )
        ),

        array(
            'title'     => esc_html__('Logo dimensions', 'appland'),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'appland' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array('em','px','%'),
            'required'  => array('logo_type', '=', 'image'),
            'output'    => '.navbar-brand>img'
        ),

        array(
            'title'     => esc_html__('Padding', 'appland'),
            'subtitle'  => esc_html__('Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'appland'),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.navbar-header .navbar-brand' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

    )
) );

// Navbar styling
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Navbar Styling', 'appland' ),
    'id'               => 'navbar_styling',
    'subsection'       => true,
    'icon'             => 'dashicons dashicons-schedule',
    'fields'           => array(
        array(
            'title'     => esc_html__('Navbar Layout', 'appland'),
            'id'        => 'nav_layout',
            'type'      => 'select',
            'default'   => 'boxed',
            'options'   => array(
                'boxed' => esc_html__('Boxed', 'appland'),
                'full_width' => esc_html__('Full Width', 'appland'),
            )
        ),
        array(
            'title'     => esc_html__('Menu Alignment', 'appland'),
            'id'        => 'menu_alignment',
            'type'      => 'select',
            'default'   => 'menu_right',
            'options'   => array(
                //'menu_left' => esc_html__('Left', 'appland'),
                'menu_center' => esc_html__('Center', 'appland'),
                'menu_right' => esc_html__('Right', 'appland'),
            ),
        ),
        array(
            'title'     => esc_html__('Menu color', 'appland'),
            'subtitle'  => esc_html__('Menu item font color', 'appland'),
            'id'        => 'menu_font_color',
            'output'    => array(
                'color' => '.navbar .navbar-nav > .menu-item a',
                'border-color' => '.menu li.active a, .navbar .menu li a:hover',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu background color', 'appland'),
            'id'        => 'menu_bg_color',
            'output'    => '.navbar.navbar-fixed-top',
            'type'      => 'color',
            'mode'      => 'background',
            'default'   => 'transparent'
        ),
        array(
            'title'     => esc_html__('Menu item margin', 'appland'),
            'subtitle'  => esc_html__('Margin around menu item.', 'appland'),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.navbar .navbar-nav > .menu-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'default'   => array(
                'margin-top'    => '0px',
                'margin-right'  => '40px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            )
        ),
        // Sticky menu settings section
        array(
            'id' => 'sticky_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sticky menu settings', 'appland'),
            'subtitle' => esc_html__('The following settings will only apply on the sticky header mode..', 'appland'),
            'indent' => true
        ),
        array(
            'title'     => esc_html__('Sticky menu color', 'appland'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'appland'),
            'id'        => 'sticky_menu_font_color',
            'output'    => '.navbar.affix .navbar-nav.menu li a',
            'type'      => 'color',
            'default'   => '#000'
        ),
        array(
            'title'     => esc_html__('Sticky menu background color', 'appland'),
            'id'        => 'sticky_menu_bg_color',
            'output'    => '.affix.navbar',
            'type'      => 'color',
            'mode'      => 'background',
            'default'   => '#ffffff'
        ),
        array(
            'id'     => 'sticky_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),
    )
));

// Menu action button
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Menu action button', 'appland' ),
    'id'               => 'menu_action_btn_opt',
    'subsection'       => true,
    'icon'             => 'dashicons dashicons-minus',
    'fields'           => array(
        array(
            'title'     => esc_html__('Button Visibility', 'appland'),
            'id'        => 'is_menu_btn',
            'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
        ),
        array(
            'title'     => esc_html__('Button label', 'appland'),
            'subtitle'  => esc_html__('Leave the button label field empty to hide the menu action button.', 'appland'),
            'id'        => 'menu_btn_label',
            'type'      => 'text',
            'default'   => 'Get Started',
        ),
        array(
            'title'     => esc_html__('Button URL', 'appland'),
            'id'        => 'menu_btn_url',
            'type'      => 'text',
            'default'   => '#'
        ),
        array(
            'title'     => esc_html__('Button font color', 'appland'),
            'id'        => 'menu_btn_font_color',
            'type'      => 'color',
            'output'    => array('.btn-getnow'),
            'default'   => '#ffffff',
        ),
        array(
            'title'     => esc_html__('Button background color', 'appland'),
            'id'        => 'menu_btn_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array('.btn-getnow'),
            'default'   => 'transparent',
        ),
        array(
            'title'     => esc_html__('Button border', 'appland'),
            'id'        => 'menu_btn_border',
            'type'      => 'border',
            'output'    => array('.btn-getnow'),
            'mode'      => 'border-color',
            'default'  => array(
                'border-color'  => '#fff',
                'border-style'  => 'solid',
                'border-top'    => '2px',
                'border-right'  => '2px',
                'border-bottom' => '2px',
                'border-left'   => '2px'
            ),
        ),
        array(
            'title'     => esc_html__('Button font size', 'appland'),
            'id'        => 'menu_btn_size',
            'type'      => 'spinner',
            'default'   => '14',
            'min'       => '12',
            'step'      => '1',
            'max'       => '50',
        ),
        array(
            'title'     => esc_html__('Button padding', 'appland'),
            'subtitle'  => esc_html__('Padding around the menu action button.', 'appland'),
            'id'        => 'menu_btn_padding',
            'type'      => 'spacing',
            'output'    => array( '.btn-getnow' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'default'   => array(
                'padding-top'    => '9px',
                'padding-right'  => '37px',
                'padding-bottom' => '9px',
                'padding-left'   => '37px'
            ),
        ),
    )
));

// Title-bar
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Title-bar', 'appland' ),
    'id'               => 'title_bar_opt',
    'subsection'       => true,
    'icon'             => 'dashicons dashicons-schedule',
    'fields'           => array(
        array(
            'title'     => esc_html__('Title-bar overlay color', 'appland'),
            'id'        => 'title_bar_overlay_color',
            'type'      => 'color_rgba',
            'mode'      => 'background',
            'default'   => array(
                'color' => '#000000',
                'alpha' => '.35'
            ),
            'output'    => array('.banner-area:before')
        ),
        array(
            'title'     => esc_html__('Title-bar padding', 'appland'),
            'id'        => 'title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.banner-area' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'default'   => array(
                'padding-top'    => '150px',
                'padding-right'  => '0px',
                'padding-bottom' => '100px',
                'padding-left'   => '0px'
            )
        ),
        array(
            'id'       => 'titlebar_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Alignment', 'appland'),
            //Must provide key => value pairs for options
            'options' => array(
                'left' => esc_html__('Left', 'appland'),
                'center' => esc_html__('Center', 'appland'),
                'right' => esc_html__('Right', 'appland')
            ),
            'default' => 'center'
        ),
    )
));