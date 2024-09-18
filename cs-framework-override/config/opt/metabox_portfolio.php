<?php
$options[]    = array(
    'id'        => 'portfolio_metaboxes',
    'title'     => esc_html__('Portfolio Meta fields', 'appland'),
    'post_type' =>  array('portfolio'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
        array(
            'name'  => 'portfolio_title_bar',
            'title' => esc_html__('Title-bar Settings', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'        => 'titlebar_title',
                    'type'      => 'text',
                    'title'     => esc_html__('Title-bar title', 'appland'),
                ),
                array(
                    'id'        => 'titlebar_bg',
                    'type'      => 'upload',
                    'title'     => esc_html__('Title-bar background', 'appland'),
                ),
            ),
        ),
        array(
            'name'  => 'portfolio_settings',
            'title' => esc_html__('Portfolio Settings', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'              => 'portfolio_atts',
                    'type'            => 'group',
                    'title'           => esc_html__('Portfolio attributes', 'appland'),
                    'button_title'    => esc_html__('Add Attribute', 'appland'),
                    'accordion_title' => 'title',
                    'fields'          => array(
                        array(
                            'id'        => 'title',
                            'type'      => 'text',
                            'title'     => esc_html__('Attribute Name', 'appland'),
                            'value'     => 'CLIENT NAME'
                        ),
                        array(
                            'id'        => 'value',
                            'type'      => 'text',
                            'title'     => esc_html__('Attribute value', 'appland'),
                            'value'     => 'Eh Jewel'
                        ),
                    )
                ),
            ),
        ),
    ),
);