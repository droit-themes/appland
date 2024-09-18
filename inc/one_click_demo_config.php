<?php
// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'appland_import_files' );
function appland_import_files() {
    return array(
        array(
            'import_file_name'             => esc_html__('Demo One', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo1/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland-main/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Two', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo2/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo2/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo2/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo2',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo2/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Three', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo3/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo3/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo3/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo3',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo3/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Four', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo4/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo4/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo4/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo4',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo4/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Five', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo5/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo5/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo5/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo5',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo5/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Six', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo6/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo6/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo6/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo6',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo6/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Seven', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo7/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo7/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo7/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo7',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo7/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Eight', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo8/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo8/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo8/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo8/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Nine', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo9/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo9/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo9/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/demo9',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo9/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Ten (Saas 01)', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland'), esc_html__('Saas', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/saas/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/saas/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/saas/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/saas',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/saas/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Eleven (Saas 02)', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland'), esc_html__('Saas', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/saas2/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/saas2/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/saas2/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/saas/illustration',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/saas/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Twelve (Saas 03)', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland'), esc_html__('Saas', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/saas3/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/saas3/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/saas3/screenshot.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/saas/3',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/saas3/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Thirteen', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/green/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/green/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/green/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/green',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/green/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Demo Fourteen', 'appland'),
            'categories'                   => array( esc_html__('One Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/green2/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/green2/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/green2/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button. Note: You can skip the WooCommerce plugin if you don\'t want shop.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/green/2',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/green2/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Multi Page (All pages with Shop)', 'appland'),
            'categories'                   => array( esc_html__('Multi Page', 'appland') ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/multipage/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/multipage/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/multipage/screenshot.jpg',
            'import_notice'                => esc_html__( 'This demo contains all pages. Install and active all required plugins before you click on the "Import Demo Data" button.', 'appland' ),
            'preview_url'                  => 'http://droitthemes.com/wp/appland/multipage',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/multipage/settings.json',
                    'option_name' => 'appland_opt',
                ),
            ),
        ),
    );
}


function appland_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main_menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'appland_after_import_setup' );