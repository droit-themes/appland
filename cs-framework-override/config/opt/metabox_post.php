<?php
$options[]    = array(
    'id'        => 'post_metas',
    'title'     => esc_html__('Post configurations', 'appland'),
    'post_type' =>  array('post'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
        array(
            'name'  => 'title-bar',
            'title' => esc_html__('Title Bar', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'        => 'titlebar_bg',
                    'type'      => 'upload',
                    'title'     => esc_html__('Title-bar background', 'appland'),
                    'desc'      => esc_html__('Leave the field blank to use the Blog page Title-bar default background image value.', 'appland'),
                ),
                array(
                    'id'        => 'overlay_color',
                    'type'      => 'color_picker',
                    'title'     => esc_html__('Overlay Color', 'appland'),
                    'desc'    => esc_html__('Leave the field blank (clear) to use the default color from Theme Settings>Header>Title-bar','appland'),
                ),
            ),
        ),
        array(
            'name'  => 'video-post',
            'title' => esc_html__('Video post', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'        => 'post_video_url',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Video embed code', 'appland'),
                    'desc'      => esc_html__('Input here the video iFrame code. You can get it from Vimeo, YouTube, Dailymotion', 'appland'),
                    'sanitize' => 'disabled'
                ),
            ),
        ),
        array(
            'name'  => 'audio-post',
            'title' => esc_html__('Audio post', 'appland'),
            'icon'  => 'dashicons dashicons-minus',
            'fields' => array(
                array(
                    'id'        => 'post_audio_url',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Audio embed code', 'appland'),
                    'desc'      => esc_html__('Input here the Audio iFrame code. You can get it from SoundCloud, Gaana.com', 'appland'),
                    'sanitize' => 'disabled'
                ),
            ),
        ),
    ),
);

