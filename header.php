<?php
$opt = get_option('appland_opt');

$navbar_layout = isset($opt['navbar_layout']) ? $opt['navbar_layout'] : 'boxed';

$menu_alignment = !empty($opt['menu_alignment']) ? $opt['menu_alignment'] : '';

$is_menu_btn = !empty($opt['is_menu_btn']) ? $opt['is_menu_btn'] : '';
$menu_btn_title = !empty($opt['menu_btn_label']) ? $opt['menu_btn_label'] : '';
$menu_btn_url = !empty($opt['menu_btn_url']) ? $opt['menu_btn_url'] : '';

$is_preloader = !empty($opt['is_preloader']) ? $opt['is_preloader'] : '1';

$page_metaboxes = get_post_meta(get_the_ID(), 'page_metaboxes', true);
$is_titlebar = isset($page_metaboxes['is_titlebar']) ? $page_metaboxes['is_titlebar'] : '1';

$nav_layout = !empty($opt['nav_layout']) ? $opt['nav_layout'] : '';
$nav_layout = $nav_layout == 'boxed' ? 'container' : 'container-fluid';

$page_metaboxes = get_post_meta( get_the_ID(), 'page_metaboxes', true );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="70">
<?php
    if ( function_exists('wp_body_open') ) {
        wp_body_open();
    }
?>
<?php if($is_preloader == '1') { ?>
    <div id="preloader">
        <div id="status"></div>
    </div>
<?php } ?>

    <nav class="navbar navbar-fixed-top <?php echo is_404() ? 'header_error' : ''; ?>" data-spy="affix" data-offset-top="70">
        <div class="<?php echo esc_attr($nav_layout.' '.$menu_alignment) ?>">
            <!--========== Brand and toggle get grouped for better mobile display ==========-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"> <?php esc_html_e('Toggle navigation', 'appland'); ?> </span>
                    <i class="lnr lnr-menu"></i>
                    <i class="lnr lnr-cross"></i>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                    $logo_type = '1';
                    if( class_exists('ReduxFrameworkPlugin') ){
                        $logo_type = $opt['logo_type'] == 'image' ? '1' : '';
                    }
                    if( !empty( $logo_type ) ) {
                        if ( isset($opt['main_logo']['url']) ) {
                            $sticky_logo = isset($opt['sticky_logo'] ['url']) ? $opt['sticky_logo'] ['url'] : '';
                            $retina_logo = isset($opt['retina_logo'] ['url']) ? $opt['retina_logo'] ['url'] : '';
                            $retina_sticky_logo = isset($opt['retina_sticky_logo'] ['url']) ? $opt['retina_sticky_logo'] ['url'] : '';
                            if (!is_404()) {
                                ?>
                                <img src="<?php echo esc_url($opt['main_logo']['url']); ?>"
                                     data-rjs="<?php echo esc_url($retina_logo) ?>" alt="<?php bloginfo('name'); ?>">
                                <img src="<?php echo esc_url($sticky_logo); ?>"
                                     data-rjs="<?php echo esc_url($retina_sticky_logo) ?>"
                                     alt="<?php bloginfo('name'); ?>">
                                <?php
                            } else {
                                ?> <img src="<?php echo esc_url($sticky_logo); ?>"
                                        alt="<?php bloginfo('name'); ?>"> <?php
                            }
                        } else {
                            echo '<h3>' . get_bloginfo('name') . '</h3>';
                        }
                    }
                    else {
                        echo '<h3>' . get_bloginfo('name') . '</h3>';
                    }
                    ?>
                </a>
                <?php
                if(!empty($menu_btn_title) & $is_menu_btn == '1') {
                    ?>
                    <a class="banner_btn btn-getnow mobile_action_btn"
                       href="<?php echo esc_url($menu_btn_url); ?>"> <?php echo esc_html($menu_btn_title); ?> </a>
                    <?php
                }
                ?>
            </div>

            <?php
            if($menu_alignment == 'menu_right') {
                if(!empty($menu_btn_title) & $is_menu_btn == '1') {
                    ?>
                    <a class="banner_btn btn-getnow hidden-sm hidden-xs"
                       href="<?php echo esc_url($menu_btn_url); ?>"> <?php echo esc_html($menu_btn_title); ?> </a>
                    <?php
                }
            }
            ?>

            <!--========== Collect the nav links, forms, and other content for toggling ==========-->
            <?php
            if(has_nav_menu('main_menu')) { ?>
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-right navbar-collapse">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'main_menu',
                        'theme_location' => 'main_menu',
                        'menu_class' => 'nav navbar-nav menu',
                        'container' => null,
                        'menu_id' => 'nav',
                        'depth' => 2,
                        'walker' => new Appland_Nav_Navwalker(),
                        'fallback_cv' => 'Appland_Nav_Navwalker::fallback'
                    ));
                    ?>
                    <?php get_template_part('template-parts/header', 'mini_cart'); ?>
                </div>
                <?php
            }
            ?>

            <?php
            if($menu_alignment == 'menu_center') {
                if(!empty($menu_btn_title) & $is_menu_btn == '1') {
                    ?>
                    <a class="banner_btn btn-getnow dskp_action_btn"
                       href="<?php echo esc_url($menu_btn_url); ?>"> <?php echo esc_html($menu_btn_title); ?> </a>
                    <?php
                }
            }

            ?>
        </div>
    </nav>

<?php
get_template_part('template-parts/title', 'bar');