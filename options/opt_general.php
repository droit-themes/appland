<?php
Redux::setSection('appland_opt', array(
    'title'            => esc_html__( 'General', 'appland' ),
    'id'               => 'general_opt',
    'icon'             => 'dashicons dashicons-admin-tools',
    'fields'           => array(
        array(
            'id'      => 'is_preloader',
            'type'    => 'switch',
            'title'   => esc_html__( 'Pre-loader ON/Disable', 'appland' ),
            'on'      => esc_html__('Enable', 'appland'),
            'off'     => esc_html__('Disable', 'appland'),
            'default' => true,
        ),
        array(
            'required' => array('is_preloader', '=', 'true'),
            'id'       => 'preloader_image',
            'type'     => 'media',
            'title'    => esc_html__( 'Pre-loader image', 'appland' ),
            'compiler' => true,
            'default'  => array(
                'url' => APPLAND_DIR_IMG.'/status.gif'
            )
        ),
    )
));