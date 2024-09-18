<?php

Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Blog settings', 'appland'),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(
		array(
			'title'     => esc_html__('Blog page title', 'appland'),
			'subtitle'  => esc_html__('Give here the blog page title', 'appland'),
			'desc'      => esc_html__('This text will be show on blog page banner', 'appland'),
			'id'        => 'blog_title',
			'type'      => 'text',
			'default'   => 'Blog List'
		),
		array(
			'title'     => esc_html__('Blog page subtitle', 'appland'),
			'id'        => 'blog_subtitle',
			'type'      => 'text',
			'default'   => 'With right sidebar'
		),
		array(
			'title'     => esc_html__('Title bar background', 'appland'),
			'subtitle'  => esc_html__('Upload image file as Blog page title bar background', 'appland'),
			'id'        => 'blog_header_bg',
			'type'      => 'media',
		),
	)
));


Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Blog archive', 'appland'),
	'id'        => 'blog_meta_opt',
	'icon'      => 'dashicons dashicons-info',
	'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Blog excerpt', 'appland'),
            'subtitle'  => esc_html__('How much words you want to show in blog page.', 'appland'),
            'id'        => 'blog_excerpt',
            'type'      => 'slider',
            'default'   => 40,
            "min"       => 15,
            "step"      => 1,
            "max"       => 100,
            'display_value' => 'label'
        ),
		array(
			'title'     => esc_html__('Post meta', 'appland'),
			'subtitle'  => esc_html__('Show/hide post meta on blog archive page', 'appland'),
			'id'        => 'is_post_meta',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1',
		),
		array(
			'title'     => esc_html__('Post author name', 'appland'),
			'id'        => 'is_post_author',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),
		array(
			'title'     => esc_html__('Post date', 'appland'),
			'id'        => 'is_post_date',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),
		array(
			'title'     => esc_html__('Post category', 'appland'),
			'id'        => 'is_post_cat',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),
	)
));


Redux::setSection('appland_opt', array(
	'title'     => esc_html__('Blog single', 'appland'),
	'id'        => 'blog_single_opt',
	'icon'      => 'dashicons dashicons-info',
	'subsection' => true,
	'fields'    => array(
		array(
			'title'     => esc_html__('Post tag', 'appland'),
			'id'        => 'is_post_tag',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1'
		),
		array(
			'title'     => esc_html__('Post Categories', 'appland'),
			'id'        => 'is_single_post_cat',
			'type'      => 'switch',
            'on'        => esc_html__('Show', 'appland'),
            'off'       => esc_html__('Hide', 'appland'),
            'default'   => '1'
		),
	)
));
