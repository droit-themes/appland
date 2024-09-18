<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appland
 */
$opt = get_option('appland_opt');
$copyright_text = !empty($opt['copyright_txt']) ? $opt['copyright_txt'] : esc_html__('© 2018 DroitThemes. All rights reserved', 'appland');
?>

<footer class="row footer-area footer_four">
    <?php if(is_active_sidebar('footer_widgets')) { ?>
        <div class="footer-top">
            <div class="container">
                <div class="row footer_sidebar">
                    <?php dynamic_sidebar('footer_widgets') ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="row m0 footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <?php echo wp_kses_post($copyright_text); ?>
                </div>
                <?php
                if(has_nav_menu('footer_menu')) {
                    wp_nav_menu(array(
                        'menu' => 'footer_menu',
                        'theme_location' => 'footer_menu',
                        'container_class' => 'right col-sm-7',
                        'menu_class' => 'footer-menu',
                        'depth' => 1,
                        'fallback_cv' => 'Appland_Nav_Navwalker::fallback'
                    ));
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

