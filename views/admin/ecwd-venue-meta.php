<?php
/**
 * Display for Event Custom Post Types
 */
global $post;
$post_id = $post->ID;
$meta = get_post_meta($post_id);

// Load up all post meta data
$ecwd_venue_location = get_post_meta($post->ID, ECWD_PLUGIN_PREFIX.'_venue_location', true);
$ecwd_venue_lat_long = get_post_meta($post->ID, ECWD_PLUGIN_PREFIX.'_venue_lat_long', true);
$ecwd_map_zoom = get_post_meta($post->ID, ECWD_PLUGIN_PREFIX.'_map_zoom', true);
if(!$ecwd_map_zoom){
    $ecwd_map_zoom = 17;
}
?>


<table class="form-table">
    <tr>
        <td>
            <input type="text" name="<?php echo ECWD_PLUGIN_PREFIX;?>_venue_location" id="<?php echo ECWD_PLUGIN_PREFIX;?>_event_location"
                   value="<?php echo $ecwd_venue_location; ?>" size="70"/>

            <div class="google_map">
                <?php
                $ecwd_marker = 1;
                if (!$ecwd_venue_lat_long) {
                    $ecwd_map_zoom = 9;
                    $ecwd_venue_lat_long = $lat . ',' . $long;
                    $ecwd_marker = 0;
                } ?>
                <input type="hidden" name="<?php echo ECWD_PLUGIN_PREFIX;?>_venue_lat_long" id="<?php echo ECWD_PLUGIN_PREFIX;?>_lat_long"
                       value="<?php echo $ecwd_venue_lat_long; ?>"/>
                <input type="hidden" name="<?php echo ECWD_PLUGIN_PREFIX;?>_marker" id="<?php echo ECWD_PLUGIN_PREFIX;?>_marker" value="<?php echo $ecwd_marker; ?>"/>
                <input type="hidden" name="<?php echo ECWD_PLUGIN_PREFIX;?>_map_zoom" id="<?php echo ECWD_PLUGIN_PREFIX;?>_map_zoom"
                       value="<?php echo $ecwd_map_zoom; ?>"/>

                <div id="map-canvas" style="width: 100%; height: 100%; min-height: 300px;">

                </div>
            </div>
            <p class="description">
                <?php _e('Fill in the address of the venue or click on the map to drag and drop the marker to a specific location', 'ecwd'); ?>
            </p>
        </td>
    </tr>
</table>
