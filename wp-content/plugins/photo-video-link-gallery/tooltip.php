<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}?>
<style>
    .sprev {
        margin: 8px;
    }
</style>

<script>
    jQuery(document).ready(function () {
        //Basic
        //jQuery('#p1').darkTooltip();
        //jQuery('#p2').darkTooltip();
        jQuery('#p3').darkTooltip();
        jQuery('#p4').darkTooltip();
        jQuery('#p5').darkTooltip();
        jQuery('#p6').darkTooltip();
        jQuery('#p7').darkTooltip();
        jQuery('#p8').darkTooltip();
        jQuery('#p9').darkTooltip();
        jQuery('#p10').darkTooltip();
        jQuery('#p11').darkTooltip();
        jQuery('#p12').darkTooltip();
        jQuery('#p13').darkTooltip();
        jQuery('#p14').darkTooltip();

        //With some options
        jQuery('#light').darkTooltip({
            animation: 'fadeIn',
            gravity: 'west',
            confirm: true,
            theme: 'light',
            opacity: 1,
        });
    });
</script>
<?php $PreviewImg = PGP_PLUGIN_URL . 'images/help/'; ?>

<div style="display:none;" id="s3">
    <h4><?php esc_html_e( 'Image Layout', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Image-style.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s4">
    <h4><?php esc_html_e( 'Image Hover Color', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "image-bg-color.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s5">
    <h4><?php esc_html_e( 'Gallery Title', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Gallery-title.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s6">
    <h4><?php esc_html_e( 'Image Label', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Image-label.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s7">
    <h4><?php esc_html_e( 'Gallery Layout', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "3columnlayout.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s8">
    <h4><?php esc_html_e( 'Light Box Styles', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "image-style.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s9">
    <h4><?php esc_html_e( 'Font Style', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Image-font-style.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s10">
    <h4><?php esc_html_e( 'Light Box Styles', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Pretty-box.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s11">
    <h4><?php esc_html_e( 'Image Border', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "border.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s12">
    <h4><?php esc_html_e( 'Image Border Size', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "Border-Size.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s13">
    <h4><?php esc_html_e( 'Image Border Color', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "border-shadow-color.jpg"); ?>" class="sprev">
</div>

<div style="display:none;" id="s14">
    <h4><?php esc_html_e( 'Masonry Thumbnails', PGP_TEXT_DOMAIN ); ?></h4>
    <img src="<?php echo esc_url($PreviewImg . "masonary-thumbnails.jpg"); ?>" class="sprev">
</div>