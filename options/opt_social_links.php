<?php
Redux::setSection('appland_opt', array(
    'title'     => esc_html__('Social links', 'appland'),
    'id'        => 'opt_social_links',
    'icon'      => 'dashicons dashicons-share',
    'fields'    => array(
        array(
            'id'    => 'facebook',
            'type'  => 'text',
            'title' => esc_html__('Facebook', 'appland'),
            'default'	 => '#'
        ),
        array(
            'id'    => 'twitter',
            'type'  => 'text',
            'title' => esc_html__('Twitter', 'appland'),
            'default'	  => '#'
        ),
        array(
            'id'    => 'googleplus',
            'type'  => 'text',
            'title' => esc_html__('Google Plus', 'appland'),
            'default'	  => '#'
        ),
        array(
            'id'    => 'linkedin',
            'type'  => 'text',
            'title' => esc_html__('Linked In', 'appland'),
            'default'	  => '#'
        ),
        array(
            'id'    => 'dribbble',
            'type'  => 'text',
            'title' => esc_html__('Dribbble', 'appland'),
            'default'	  => '#'
        ),
        array(
            'id'    => 'youtube',
            'type'  => 'text',
            'title' => esc_html__('Youtube', 'appland'),
        ),
    ),
));