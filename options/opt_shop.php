<?php

// Shop page

Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'Shop Settings', 'appland' ),
    'id'               => 'shop_opt',
    'icon'             => 'dashicons dashicons-cart',
    'fields'           => array(
        array(
            'title'     => esc_html__('Cart Icon', 'appland'),
            'subtitle'  => esc_html__('Show/Hide cart icon on the header (besides menu item).', 'appland'),
            'id'        => 'is_cart_icon',
            'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
        ),
        array(
            'title'     => esc_html__('Sidebar', 'appland'),
            'subtitle'  => esc_html__('Select the sidebar position of Shop page. And remove the Shop sidebar widgets to make the Shop page full-width', 'appland'),
            'id'        => 'shop_sidebar',
            'type'      => 'image_select',
            'options'   => array(
                'left' => array(
                    'alt' => esc_html__('Left Sidebar', 'appland'),
                    'img' => APPLAND_DIR_IMG.'/layouts/sidebar_left.jpg'
                ),
                'right' => array(
                    'alt' => esc_html__('Right Sidebar', 'appland'),
                    'img' => APPLAND_DIR_IMG.'/layouts/sidebar_right.jpg',
                ),
            ),
            'default' => 'left'
        ),
        array(
            'title'     => esc_html__('Title ', 'appland'),
            'id'        => 'shop_title',
            'type'      => 'text',
            'default'   => 'Shop Page'
        ),
        array(
            'title'     => esc_html__('Subtitle ', 'appland'),
            'id'        => 'shop_subtitle',
            'type'      => 'textarea',
        ),
        array(
            'title'     => esc_html__('Header Background image', 'appland'),
            'id'        => 'shop_bg_image',
            'type'      => 'media',
            'compiler'  => true
        ),
        array(
            'title'     => esc_html__('Product Title Align', 'appland'),
            'id'        => 'product_title_align',
            'type'      => 'button_set',
            'default'   => 'center',
            'options'   => array(
                'left'      => esc_html__('Left', 'appland'),
                'center'    => esc_html__('Center', 'appland'),
            )
        ),
    ),
));