<?php

Redux::setSection('appland_opt', array(
    'title'     => esc_html__('404 Error Page', 'appland'),
    'id'        => '404_0pt',
    'icon'      => 'dashicons dashicons-info',
    'fields'    => array(
        array(
            'title'     => esc_html__('Error Heading Text', 'appland'),
            'id'        => 'error_heading',
            'type'      => 'text',
            'default'   => esc_html__("404", 'appland')
        ),
        array(
            'title'     => esc_html__('Title', 'appland'),
            'id'        => 'error_title',
            'type'      => 'text',
            'default'   => esc_html__("Oops, This Page Could Not Be Found!", 'appland')
        ),
        array(
            'title'     => esc_html__('Subtitle', 'appland'),
            'id'        => 'error_subtitle',
            'type'      => 'text',
            'default'   => esc_html__("We can't seem to find the page you're looking for", 'appland')
        ),
        array(
            'title'     => esc_html__('Home button label', 'appland'),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__("Back to home", 'appland')
        ),
        array(
            'title'     => esc_html__('Background Image', 'appland'),
            'id'        => '404_bg',
            'type'      => 'media',
        ),
    )
));
