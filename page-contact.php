<?php
/**
 * Template Name: Contact
 */

$opt = get_option('appland_opt');
$is_info_boxes = !empty($opt['is_info_boxes']) ? $opt['is_info_boxes'] : '';
$information_boxes = !empty($opt['information_boxes']) ? $opt['information_boxes'] : '';
get_header(); 

/* Content Goes Here */?>
 <section class="contact_area sec-pad">
     <?php
     if($is_info_boxes=='1') : ?>
         <div class="contact_info">
         <div class="container">
         <div class="row">
             <?php
             foreach ($information_boxes as $infobox) : ?>
                 <div class="col-sm-4 col-xs-4">
                     <div class="contact_info_item">
                         <?php if(!empty($infobox['image'])) : ?>
                            <img src="<?php echo esc_url($infobox['image']); ?>" title="<?php echo esc_attr($infobox['title']) ?>">
                         <?php endif; ?>
                         <?php echo !empty($infobox['title']) ? '<h5>' . wp_kses_post(nl2br($infobox['title'])) . '</h5>' : ''; ?>
                         <?php echo !empty($infobox['description']) ? '<p>' . wp_kses_post(nl2br($infobox['description'])) . '</p>' : ''; ?>
                     </div>
                 </div>
            <?php endforeach; ?>
        </div>
        </div>
        </div>
     <?php endif; ?>
    <?php if(!empty($opt['contact_form_shortcode'])) : ?>
        <div class="contact_form_section">
            <div class="container">
                <?php echo do_shortcode($opt['contact_form_shortcode']) ?>
            </div>
        </div>
    <?php endif; ?>
</section>

    <?php 
    if(!empty($opt['is_google_map'])):
        $latitude = !empty($opt['latitude']) ? "data-map-latitude='{$opt['latitude']}' " : '42.008315';
        $longitude = !empty($opt['longitude']) ? "data-map-longitude='{$opt['longitude']}' " : '-88.163807';
        $map_zoom = !empty($opt['map_zoom']) ? "data-map-zoom='{$opt['map_zoom']}' " : '12';
        ?>
        <div id="googleMap" class="google-maps" <?php echo esc_attr($latitude.$longitude.$map_zoom) ?>></div>
    <?php endif;  

get_footer();