<?php
/**
 * Settings Template
 *
 * Displays Woocommerce Multistore Settings Tab.
 *
 */

defined( 'ABSPATH' ) || exit;

?>

<?php
if( is_multisite() ){
	if( class_exists('WOO_MSTORE_functions') ){
		$sites = WOO_MSTORE_functions::get_active_woocommerce_blog_ids();
	}else{
		$sites = WC_Multistore_Functions::get_active_woocommerce_blog_ids();
	}
}else{
	$sites = get_option('woonet_child_sites');
}

if ( ! empty( PMXI_Plugin::$session ) ) {
	$options = PMXI_Plugin::$session->options; // not available when running via cron.
} else {
	$import         = new PMXI_Import_Record();
	$options        = $import->getById( $_GET['import_id'] );
	$options = $options->options;
}
?>
<div class="panel woocommerce_options_panel" id="woonet_data" style="display:none;">
    <p class="form-field no_label _woonet_publish_to inline" >
        <label class="alignleft" style="width: auto; ">
            <select class="_woonet_global_publish_to" name="_woonet_global_publish_to">
                <option value="" <?php selected(!isset($options['_woonet_global_publish_to']) || $options['_woonet_global_publish_to'] == ''); ?> >— Use Product Settings —</option>
                <option value="yes" <?php selected(isset($options['_woonet_global_publish_to']) && $options['_woonet_global_publish_to'] == 'yes'); ?>>Yes</option>
                <option value="no" <?php selected(isset($options['_woonet_global_publish_to']) && $options['_woonet_global_publish_to'] == 'no'); ?>>No</option>
            </select>
            <span class="checkbox-title woomulti-store-name">Toggle all Sites</span></span>
        </label>
        <br class="clear">

        <label class="alignleft pl" style="width: auto; padding-left: 30px;">
            <select class="_woonet_global_inherit" name="_woonet_global_inherit">
                <option value="" <?php selected(!isset($options['_woonet_global_inherit']) || $options['_woonet_global_inherit'] == ''); ?> >— Use Product Settings —</option>
                <option value="yes" <?php selected(isset($options['_woonet_global_inherit']) && $options['_woonet_global_inherit'] == 'yes'); ?> >Yes</option>
                <option value="no" <?php selected(isset($options['_woonet_global_inherit']) && $options['_woonet_global_inherit'] == 'no'); ?> >No</option>
            </select>
            <span class="checkbox-title">Toggle all Child product inherit Parent products changes</span>
        </label>
        <br class="clear">

        <label class="alignleft pl" style="width: auto; padding-left: 30px;">
            <select class="_woonet_global_stock" name="_woonet_global_stock">
                <option value="" <?php selected(!isset($options['_woonet_global_stock']) || $options['_woonet_global_stock'] == ''); ?> >— Use Product Settings —</option>
                <option value="yes" <?php selected(isset($options['_woonet_global_stock']) && $options['_woonet_global_stock'] == 'yes'); ?> >Yes</option>
                <option value="no" <?php selected(isset($options['_woonet_global_stock']) && $options['_woonet_global_stock'] == 'no'); ?> >No</option>
            </select>
            <span class="checkbox-title">Toggle all Child stock sync</span>
        </label>
        <br class="clear">
    </p>

    <p class="form-field woomulti-quick-update-notice">
        <span class="description">Note: A linked product (upsell, cross-sell or grouped product) needs to be synced with the child store before it can be synced as upsell, cross-sell or grouped product for a child store product.</span>
    </p>

    <h4>Publish to</h4>

    <?php foreach ($sites as $site):  ?>
        <?php
            $site_id = '';
	        $site_name = '';
            if( is_multisite() ){
                if( $site == get_current_blog_id() ){ continue; }
                $site_id = $site;
                switch_to_blog($site);
	            $site_name = get_blog_details()->blogname;
                restore_current_blog();
            }else{
	            $site_id = $site['uuid'];
	            $site_name = esc_html( str_replace( array( 'http://', 'https://' ), '', $site['site_url'] ) );
            }
        ?>
        <p class="form-field no_label _woonet_publish_to inline" data-group-id="<?php echo $site_id; ?>" >
            <label class="alignleft" style="width: auto; ">
                <select class="_woonet_publish_to" name="_woonet_publish_to_<?php echo $site_id; ?>">
                    <option value="" <?php selected(!isset($options['_woonet_publish_to_'.$site_id]) || $options['_woonet_publish_to_'.$site_id] == ''); ?> >— Use Product Settings —</option>
                    <option value="yes" <?php selected(isset($options['_woonet_publish_to_'.$site_id]) && $options['_woonet_publish_to_'.$site_id] == 'yes'); ?> >Yes</option>
                    <option value="no" <?php selected(isset($options['_woonet_publish_to_'.$site_id]) && $options['_woonet_publish_to_'.$site_id] == 'no'); ?> >No</option>
                </select>
                <span class="checkbox-title woomulti-store-name"><?php echo $site_name; ?><span class="warning"><b>Warning:</b> By deselecting this shop the product is unassigned, but not deleted from the shop, which should be done manually.</span></span>
            </label>
            <br class="clear">

            <label class="alignleft pl" style="width: auto; padding-left: 30px;">
                <select class="_woonet_inherit" name="_woonet_publish_to_<?php echo $site_id; ?>_child_inheir">
                    <option value="" <?php selected(!isset($options['_woonet_publish_to_'.$site_id.'_child_inheir']) || $options['_woonet_publish_to_'.$site_id.'_child_inheir'] == ''); ?> >— Use Product Settings —</option>
                    <option value="yes" <?php selected(isset($options['_woonet_publish_to_'.$site_id.'_child_inheir']) && $options['_woonet_publish_to_'.$site_id.'_child_inheir'] == 'yes'); ?> >Yes</option>
                    <option value="no" <?php selected(isset($options['_woonet_publish_to_'.$site_id.'_child_inheir']) && $options['_woonet_publish_to_'.$site_id.'_child_inheir'] == 'no'); ?> >No</option>
                </select>
                <span class="checkbox-title">Child product inherit Parent products changes</span>
            </label>
            <br class="clear">

            <label class="alignleft pl" style="width: auto; padding-left: 30px;">
                <select class="_woonet_stock" name="_woonet_<?php echo $site_id; ?>_child_stock_synchronize">
                    <option value="" <?php selected(!isset($options['_woonet_'.$site_id.'_child_stock_synchronize']) || $options['_woonet_'.$site_id.'_child_stock_synchronize'] == ''); ?> >— Use Product Settings —</option>
                    <option value="yes" <?php selected(isset($options['_woonet_'.$site_id.'_child_stock_synchronize']) && $options['_woonet_'.$site_id.'_child_stock_synchronize'] == 'yes'); ?> >Yes</option>
                    <option value="no" <?php selected(isset($options['_woonet_'.$site_id.'_child_stock_synchronize']) && $options['_woonet_'.$site_id.'_child_stock_synchronize'] == 'no'); ?> >No</option>
                </select>
                <span class="checkbox-title">If checked, any stock change will synchronize across product tree.</span>
            </label>
            <br class="clear">
        </p>
    <?php endforeach; ?>
</div><!-- End Product Panel -->

<script>
    jQuery('._woonet_global_publish_to').change(function (){
        jQuery('._woonet_publish_to').val(this.value).change();
    });

    jQuery('._woonet_global_inherit').change(function (){
        jQuery('._woonet_inherit').val(this.value).change();
    });

    jQuery('._woonet_global_stock').change(function (){
        jQuery('._woonet_stock').val(this.value).change();
    });
</script>
