<?php
$options[]    = array(
    'id'        => 'page_metaboxes',
    'title'     => esc_html__('Page Title bar', 'appland'),
    'post_type' =>  array('page'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
        array(
            'name'  => 'page_title_bar',
            'icon'  => 'dashicons dashicons-minus',
            'title' => esc_html__('Title-bar Banner', 'appland'),
            'fields' => array(
                array(
                    'id'        => 'is_titlebar',
                    'type'      => 'switcher',
                    'title'     => esc_html__('Title Bar', 'appland'),
                    'desc'      => esc_html__('Title-bar background image comes from the featured image.', 'appland'),
                    'default'   => true
                ),
                array(
                  'id'      => 'page_header_color',
                  'type'    => 'color_picker',
                  'title'   => esc_html__('Title-bar Overlay Color','appland'),
                  'desc'    => esc_html__('Leave the field blank (clear) to use the default color from Theme Settings>Header>Title-bar','appland'),
                  'rgba'    => true,
                ),
                 array(
                    'id'        => 'page_sub_title',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Subtitle', 'appland'),
                ),
            )
        ),
        array(
            'name'  => 'page_settings',
            'icon'  => 'dashicons dashicons-minus',
            'title' => esc_html__('Page Settings', 'appland'),
            'fields' => array(
                array(
                    'id'        => 'page_padding_top',
                    'type'      => 'number',
                    'title'     => esc_html__('Page padding top', 'appland'),
                    'desc'      => esc_html__('Input the padding top of the page in pixel unit', 'appland'),
                ),
                array(
                    'id'        => 'page_padding_bottom',
                    'type'      => 'number',
                    'title'     => esc_html__('Page padding bottom', 'appland'),
                    'desc'      => esc_html__('Input the padding bottom of the page in pixel unit', 'appland'),
                ),
            ),
        ),
        array(
            'name'  => 'menu_settings',
            'icon'  => 'dashicons dashicons-minus',
            'title' => esc_html__('Menu Settings', 'appland'),
            'fields' => array(
                array(
                    'id'        => 'menu_color',
                    'type'      => 'color_picker',
                    'title'     => esc_html__('Font Color', 'appland'),
                    'desc'      => esc_html__('Leave the field empty to use the default color.', 'appland'),
                ),
            ),
        ),
    ),
);