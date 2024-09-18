<?php

$options[]    = array(
    'id'        => 'product_metaboxes',
    'title'     => esc_html__('Product Meta fields', 'appland'),
    'post_type' =>  array('product'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
        array(
            'name'  => 'product_title_bar',
            'title' => esc_html__('Title-bar Settings', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'        => 'is_titlebar',
                    'type'      => 'switcher',
                    'title'     => esc_html__('Show/Hide Page Title Bar', 'appland'),
                    'default'   => true
                ),
                array(
                    'id'        => 'title',
                    'type'      => 'text',
                    'title'     => esc_html__('Title', 'appland'),
                    'default'   => esc_html__('Product details', 'appland'),
                    'dependency'=> array( 'is_titlebar', '==', 'true' ),
                ),
                array(
                    'id'        => 'subtitle',
                    'type'      => 'text',
                    'title'     => esc_html__('Subtitle', 'appland'),
                    'dependency'=> array( 'is_titlebar', '==', 'true' ),
                ),
                array(
                    'id'        => 'titlebar_bg',
                    'type'      => 'upload',
                    'title'     => esc_html__('Title-bar background', 'appland'),
                    'dependency'=> array( 'is_titlebar', '==', 'true' ),
                ),
            ), // end: fields
        ), // end: a section
    ),
);