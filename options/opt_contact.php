<?php
// Contact page settings
Redux::setSection('appland_opt', array(
    'title'     => esc_html__('Contact Page', 'appland'),
    'id'        => 'appland_contact_opt',
    'icon'      => 'dashicons dashicons-email-alt',
    'fields'    => array(
        array(
            'title'     => esc_html__('Show/Hide Info Boxes', 'appland'),
            'id'        => 'is_info_boxes',
            'type'      => 'switch',
            'on'		=> esc_html__('Show', 'appland'),
            'off'		=> esc_html__('Hide', 'appland'),
        ),
        array(
            'title'     => esc_html__('Information boxes', 'appland'),
            'subtitle'  => esc_html__('Add here top information boxes in three column format.', 'appland'),
            'id'        => 'information_boxes',
            'class'     => 'information_boxes',
            'type'      => 'slides',
            'content_title' => esc_html__('Information box', 'appland'),
            'placeholder' => array(
                'title'           => esc_html__('Enter Title Here ', 'appland'),
                'description'     => esc_html__('Enter Information Here', 'appland'),
            ),
            'show' => array(
            	'url' => false,
                'title' => true,
                'description' => true,
            ),
            'required' => array('is_info_boxes', '=', true)
        ),
    )
));


// Contact form settings
Redux::setSection('appland_opt', array(
    'title'     => esc_html__('Contact Form', 'appland'),
    'id'        => 'appland_contact_form',
    'icon'      => 'dashicons dashicons-feedback',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'     => esc_html__('Contact form shortcode ', 'appland'),
            'subtitle'  => esc_html__('Generate the contact form with Contact Form 7 plugin then enter here the form shortcode. Don\'t forget to include the html_class="row m0 contact_form" attribute within the shortcode.', 'appland'),
            'id'        => 'contact_form_shortcode',
            'type'      => 'text',
        ),
        array(
            'title'     => esc_html__('How to use theme\'s contact form?', 'appland'),
            'desc'      => wp_kses_post(__('Install and activate the Contact Form 7 plugin from Appearance > Install Plugins. 
            You can get the contact form templates from <a href="http://docs.droitthemes.com/docs/appland-docs/pages/how-to-create-the-contact-page/" target="_blank">here</a>', 'appland')),
            'id'        => 'contact_form_info',
            'type'      => 'info',
            'style'     => 'warning',
            'icon'      => 'dashicons dashicons-info',
        ),
        array(
            'title'     => esc_html__('How to use Google re-capcha in your contact form?', 'appland'),
            'desc'      => esc_html__('Install and activate the Contact Form recaptcha plugin from Appearance > Install Plugins and configure it with your recaptcha keys.', 'appland'),
            'id'        => 'contact_form_recaptcha_info',
            'type'      => 'info',
            'style'     => 'warning',
            'icon'      => 'dashicons dashicons-info',
        ),
    )
));


// Map settings
Redux::setSection('appland_opt', array(
    'title'     => esc_html__('Map Settings', 'appland'),
    'id'        => 'map_settings',
    'icon'      => 'dashicons dashicons-chart-area',
    'subsection'=> true,
    'fields'    => array(
    	 array(
            'title'     => esc_html__('Map Enable/Disable', 'appland'),
            'id'        => 'is_google_map',
            'type'      => 'switch',
            'on'		=> esc_html__('Enable', 'appland'),
            'off'		=> esc_html__('Disable', 'appland'),
        ),
        array(
            'title'     => esc_html__('Map API key', 'appland'),
            'subtitle'  => wp_kses_post(__('Enter her your Google map API key. Get it from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>', 'appland')),
            'id'        => 'map_api',
            'type'      => 'text',
            'default'   => 'AIzaSyCenyYKHckrD2-MpW5GJR-0HBZYQCjSiUM',
            'required'  => array('is_google_map', '=', true)
        ),
        array(
            'title'     => esc_html__('Map latitude key', 'appland'),
            'subtitle'  => wp_kses_post(__('Get the latitude from <a href="https://www.latlong.net/">here</a>', 'appland')),
            'id'        => 'latitude',
            'type'      => 'text',
            'default'   => '42.008315',
            'required'  => array('is_google_map', '=', true)
        ),
        array(
            'title'     => esc_html__('Map Longitude key', 'appland'),
            'subtitle'  => wp_kses_post(__('Get the Longitude from <a href="https://www.latlong.net/">here</a>', 'appland')),
            'id'        => 'longitude',
            'type'      => 'text',
            'default'   => '-88.163807',
            'required'  => array('is_google_map', '=', true)
        ),
        array(
            'title'     => esc_html__('Map zoom label', 'appland'),
            'id'        => 'map_zoom',
            'type'      => 'slider',
            'default'       => 12,
            'min'           => 5,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'label',
            'required'  => array('is_google_map', '=', true)
        ),
        array(
            'title'     => esc_html__('Map marker', 'appland'),
            'id'        => 'map_marker',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => APPLAND_DIR_IMG.'/map_marker.png'
            ),
            'required'  => array('is_google_map', '=', true)
        ),
       
    )
));