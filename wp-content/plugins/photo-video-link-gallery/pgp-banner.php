<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_enqueue_style( 'respport-banner', PGP_PLUGIN_URL . 'css/pgp-banner.css' );
$pgp_imgpath = PGP_PLUGIN_URL . "images/pgp_pro_banner.png";
?>
<div class="wb_plugin_feature notice  is-dismissible">
    <div class="wb_plugin_feature_banner default_pattern pattern_ ">    
        <div class="wb-col-md-6 wb-col-sm-12 box">
            <div class="ribbon"><span> <?php esc_html_e( "Go Pro", PGP_TEXT_DOMAIN ); ?></span></div>
            <img class="wp-img-responsive" src="<?php echo esc_url($pgp_imgpath); ?>" alt="img">
        </div>
        <div class="wb-col-md-6 wb-col-sm-12 wb_banner_featurs-list">
            <span class="gp_banner_head"><h2><?php esc_html_e( 'Photo Video Link Gallery Pro', PGP_TEXT_DOMAIN ); ?> </h2></span>
            <ul>
                <li><?php esc_html_e( 'Multiple Image Uploader', PGP_TEXT_DOMAIN ); ?></li>               
                <li><?php esc_html_e( 'Multiple Shortcode', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Transition Effect', PGP_TEXT_DOMAIN ); ?></li>             
                <li><?php esc_html_e( '19 Hover Animation Effect', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Responsive Gallery Plugin', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Two & Three Column Layout', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Background Color Option', PGP_TEXT_DOMAIN ); ?></li> 
                <li><?php esc_html_e( '500+ Google Fonts Style', PGP_TEXT_DOMAIN ); ?></li> 
                <li><?php esc_html_e( 'Grid/Masonry View', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Custom CSS Option', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'External Link', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Hide/Show Gallery Title and Label ', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Unique Settings for Each Gallery', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Shortcode Button On Post or Page', PGP_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Drag and Drop Image Position', PGP_TEXT_DOMAIN ); ?></li>                
            </ul>
            </ul>
            </ul>
            <div class="wp_btn-grup">
                <a class="wb_button-primary" href="http://demo.weblizar.com/photo-video-link-gallery-pro/"
                   target="_blank"><?php esc_html_e( 'View Demo', PGP_TEXT_DOMAIN ); ?></a>
                <a class="wb_button-primary" href="https://weblizar.com/plugins/photo-video-link-gallery-pro/"
                   target="_blank"><?php esc_html_e( 'Buy Now', PGP_TEXT_DOMAIN ); ?>  <?php esc_html_e( "$16", PGP_TEXT_DOMAIN ); ?></a>
            </div>
        </div>
    </div>
</div>