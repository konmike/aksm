<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Load Saved Photo Gallery Plugin Pro Settings
 */
$PostId               = $post->ID;
$PGP_Gallery_Settings = "PGP_Gallery_Settings_" . $PostId;
$PGP_Gallery_Settings = unserialize( get_post_meta( $PostId, $PGP_Gallery_Settings, true ) );
//$DefaultSettings = unserialize(get_option('PGP_Settings'));
if ( $PGP_Gallery_Settings['PGP_Show_Gallery_Title'] && $PGP_Gallery_Settings['PGP_Color'] ) {
	$PGP_Effect             = $PGP_Gallery_Settings['PGP_Effect'];
	$PGP_Effect_animation   = $PGP_Gallery_Settings['PGP_Effect_animation'];
	$PGP_Show_Gallery_Title = $PGP_Gallery_Settings['PGP_Show_Gallery_Title'];
	$PGP_Show_Image_Label   = $PGP_Gallery_Settings['PGP_Show_Image_Label'];
	$PGP_Gallery_Layout     = $PGP_Gallery_Settings['PGP_Gallery_Layout'];
	$PGP_Open_Link          = $PGP_Gallery_Settings['PGP_Open_Link'];
	$PGP_Color              = $PGP_Gallery_Settings['PGP_Color'];
	$PGP_Font_Style         = $PGP_Gallery_Settings['PGP_Font_Style'];
	$PGP_Light_Box          = $PGP_Gallery_Settings['PGP_Light_Box'];
	$PGP_Image_Border       = $PGP_Gallery_Settings['PGP_Image_Border'];
	$PGP_Custom_CSS         = $PGP_Gallery_Settings['PGP_Custom_CSS'];
} else {
	$PGP_Gallery_Settings = unserialize( get_option( 'PGP_Settings' ) );
	if ( count( $PGP_Gallery_Settings ) ) {
		$PGP_Effect             = $PGP_Gallery_Settings['PGP_Effect'];
		$PGP_Effect_animation   = $PGP_Gallery_Settings['PGP_Effect_animation'];
		$PGP_Show_Gallery_Title = $PGP_Gallery_Settings['PGP_Show_Gallery_Title'];
		$PGP_Show_Image_Label   = $PGP_Gallery_Settings['PGP_Show_Image_Label'];
		$PGP_Gallery_Layout     = $PGP_Gallery_Settings['PGP_Gallery_Layout'];
		$PGP_Open_Link          = $PGP_Gallery_Settings['PGP_Open_Link'];
		$PGP_Color              = $PGP_Gallery_Settings['PGP_Color'];
		$PGP_Font_Style         = $PGP_Gallery_Settings['PGP_Font_Style'];
		$PGP_Light_Box          = $PGP_Gallery_Settings['PGP_Light_Box'];
		$PGP_Image_Border       = $PGP_Gallery_Settings['PGP_Image_Border'];
		$PGP_Custom_CSS         = "";
	}
}
?>
<?php require_once( "tooltip.php" ); ?>
<table class="form-table">
    <tbody>
    <?php $nonce = wp_create_nonce( 'nonce_save_PGP_gallery_settings' ); ?>
        <input type="hidden" name="security" value="<?php echo esc_attr( $nonce ); ?>">
    <tr>
        <th scope="row"><label><?php esc_html_e( 'Transition Effect', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
            <!--<select name="PGP_Effect" id="PGP_Effect" onchange='effect_change()'>-->
            <select name="PGP_Effect" id="PGP_Effect">
                <optgroup label="Select Effect">
                    <option value="effect0" <?php if ( $PGP_Effect == 'effect0' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( '-- No Effect --', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="effect11" <?php if ( $PGP_Effect == 'effect11' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Effect 1', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="effect4" <?php if ( $PGP_Effect == 'effect4' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Effect 2', PGP_TEXT_DOMAIN ); ?></option>
                </optgroup>
            </select>
            <p class="description">
				<?php esc_html_e( 'Choose an animation effect apply on images after mouse hover.', PGP_TEXT_DOMAIN ); ?>
            </p>
        </td>
    </tr>
    <tr id="PG_anim" style="<?php if ( $PGP_Effect == 'effect0' ) {
		echo "display: none";
	} else {
		echo "display: table-row";
	} ?>">
        <th scope="row"><label><?php esc_html_e( 'Animation', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
            <select name="PGP_effect11_anim" id="PGP_effect11_anim">
                <optgroup label="Select Animation">
                    <option value="left_to_right" <?php if ( $PGP_Effect_animation == 'left_to_right' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Left to Right', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="right_to_left" <?php if ( $PGP_Effect_animation == 'right_to_left' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Right to Left', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="top_to_bottom" <?php if ( $PGP_Effect_animation == 'top_to_bottom' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Top to Bottom', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="bottom_to_top" <?php if ( $PGP_Effect_animation == 'bottom_to_top' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Bottom to Top', PGP_TEXT_DOMAIN ); ?></option>
                </optgroup>
            </select>
            <p class="description">
				<?php esc_html_e( 'Choose Animation style.', PGP_TEXT_DOMAIN ); ?>
            </p>
        </td>
    </tr>

    <tr id="PG_imghovclr" style="<?php if ( $PGP_Effect == 'effect0' ) {
		echo "display: none";
	} else {
		echo "display: table-row";
	} ?>">
        <th scope="row"><label><?php esc_html_e( 'Image Hover Color', PGP_TEXT_DOMAIN ); ?></label></th>
        <td class="image_color">
			<?php if ( $PGP_Color == "" ) {
				$PGP_Color = "#31A3DD";
			} ?>
            <input id="PGP_Color" name="PGP_Color" type="text" value="<?php echo esc_attr($PGP_Color); ?>" class="my-color-field"
                   data-default-color="#ffffff"/>
            <p class="description">
				<?php esc_html_e( 'Select any color to apply on image gallery.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p4" data-tooltip="#s4"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Show Gallery Title', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Show_Gallery_Title == "" ) {
				$PGP_Show_Gallery_Title = "yes";
			} ?>
            <input type="radio" name="PGP_Show_Gallery_Title" id="PGP_Show_Gallery_Title1"
                   value="yes" <?php if ( $PGP_Show_Gallery_Title == 'yes' ) {
				echo "checked";
			} ?>> <i class="fa fa-check fa-2x"></i>
            <input type="radio" name="PGP_Show_Gallery_Title" id="PGP_Show_Gallery_Title2"
                   value="no" <?php if ( $PGP_Show_Gallery_Title == 'no' ) {
				echo "checked";
			} ?>> <i class="fa fa-times fa-2x"></i>
            <p class="description">
				<?php esc_html_e( 'Select Yes/No option to hide or show gallery title.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p5" data-tooltip="#s5"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr id="PG_showimglbl" style="<?php if ( $PGP_Effect == 'effect0' ) {
		echo "display: none";
	} else {
		echo "display: table-row";
	} ?>">
        <th scope="row"><label><?php esc_html_e( 'Show Image Label', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Show_Image_Label == "" ) {
				$PGP_Show_Image_Label = "yes";
			} ?>
            <input type="radio" name="PGP_Show_Image_Label" id="PGP_Show_Image_Label1"
                   value="yes" <?php if ( $PGP_Show_Image_Label == 'yes' ) {
				echo "checked";
			} ?>> <i class="fa fa-check fa-2x"></i>
            <input type="radio" name="PGP_Show_Image_Label" id="PGP_Show_Image_Label2"
                   value="no" <?php if ( $PGP_Show_Image_Label == 'no' ) {
				echo "checked";
			} ?>> <i class="fa fa-times fa-2x"></i>
            <p class="description">
				<?php esc_html_e( 'Select Yes/No option to hide or show label on image.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p6" data-tooltip="#s6"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Gallery Layout', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Gallery_Layout == "" ) {
				$PGP_Gallery_Layout = "col-md-6";
			} ?>
            <select name="PGP_Gallery_Layout" id="PGP_Gallery_Layout">
                <optgroup label="Select Gallery Layout">
                    <option value="col-md-6" <?php if ( $PGP_Gallery_Layout == 'col-md-6' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Two Column', PGP_TEXT_DOMAIN ); ?></option>
                    <option value="col-md-4" <?php if ( $PGP_Gallery_Layout == 'col-md-4' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( 'Three Column', PGP_TEXT_DOMAIN ); ?></option> 
                    <option value="col-md-3" <?php if ( $PGP_Gallery_Layout == 'col-md-3' ) {
                        echo "selected=selected";
                    } ?>><?php esc_html_e( 'Four Column', PGP_TEXT_DOMAIN ); ?></option>
                </optgroup>
            </select>
            <p class="description">
				<?php esc_html_e( 'Choose a column layout for image gallery.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p7" data-tooltip="#s7"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Open Link', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Open_Link == "" ) {
				$PGP_Open_Link = "_blank";
			} ?>
            <input type="radio" name="PGP_open_link" id="PGP_open_link"
                   value="_self" <?php if ( $PGP_Open_Link == '_self' ) {
				echo "checked";
			} ?>> <?php esc_html_e( 'In Same Tab', PGP_TEXT_DOMAIN ); ?>
            <input type="radio" name="PGP_open_link" id="PGP_open_link"
                   value="_blank" <?php if ( $PGP_Open_Link == '_blank' ) {
				echo "checked";
			} ?>> <?php esc_html_e( 'In New Tab', PGP_TEXT_DOMAIN ); ?>
            <p class="description">
				<?php esc_html_e( 'Select option to open link in same tab or in new tab.', PGP_TEXT_DOMAIN ); ?>
            </p>
        </td>
    </tr>

    <tr id="PG_fontstyle" style="<?php if ( $PGP_Effect == 'effect0' ) {
		echo "display: none";
	} else {
		echo "display: table-row";
	} ?>">
        <th scope="row"><label><?php esc_html_e( 'Font Style', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Font_Style == "" ) {
				$PGP_Font_Style = "Arial";
			} ?>
            <select name="PGP_Font_Style" class="standard-dropdown" id="PGP_Font_Style">
                <optgroup label="Default Fonts">
                    <option value="Arial" <?php selected( $PGP_Font_Style, 'Arial' ); ?>><?php esc_html_e( "Arial", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Arial Black" <?php selected( $PGP_Font_Style, 'Arial Black' ); ?>><?php esc_html_e( "Arial Black", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Courier New" <?php selected( $PGP_Font_Style, 'Courier New' ); ?>><?php esc_html_e( "Courier New", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Georgia" <?php selected( $PGP_Font_Style, 'Georgia' ); ?>><?php esc_html_e( "Georgia", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Grande"<?php selected( $PGP_Font_Style, 'Grande' ); ?>><?php esc_html_e( "Grande", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Helvetica Neue" <?php selected( $PGP_Font_Style, 'Helvetica Neue' ); ?>><?php esc_html_e( "Helvetica
                        Neue", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Impact" <?php selected( $PGP_Font_Style, 'Impact' ); ?>><?php esc_html_e( "Impact", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Lucida" <?php selected( $PGP_Font_Style, 'Lucida' ); ?>><?php esc_html_e( "Lucida", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Lucida Console"<?php selected( $PGP_Font_Style, 'Lucida Console' ); ?>><?php esc_html_e( "Lucida
                        Console", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Open Sans" <?php selected( $PGP_Font_Style, 'Open Sans' ); ?>><?php esc_html_e( "Open Sans", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Palatino" <?php selected( $PGP_Font_Style, 'Palatino' ); ?>><?php esc_html_e( "Palatino", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="sans" <?php selected( $PGP_Font_Style, 'sans' ); ?>><?php esc_html_e( "Sans", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="sans-serif" <?php selected( $PGP_Font_Style, 'sans-serif' ); ?>><?php esc_html_e( "Sans-Serif", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Tahoma" <?php selected( $PGP_Font_Style, 'Tahoma' ); ?>><?php esc_html_e( "Tahoma", PGP_TEXT_DOMAIN ); ?></option>
                    <option value="Times New Roman"<?php selected( $PGP_Font_Style, 'Times New Roman' ); ?>><?php esc_html_e( "Times New
                        Roman", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Trebuchet MS" <?php selected( $PGP_Font_Style, 'Trebuchet MS' ); ?>><?php esc_html_e( "Trebuchet MS", PGP_TEXT_DOMAIN ); ?>
                    </option>
                    <option value="Verdana" <?php selected( $PGP_Font_Style, 'Verdana' ); ?>><?php esc_html_e( "Verdana", PGP_TEXT_DOMAIN ); ?></option>
                </optgroup>
            </select>
            <p class="description">
				<?php esc_html_e( 'Choose a caption font style.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p9" data-tooltip="#s9"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Light Box Styles', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Light_Box == "" ) {
				$PGP_Light_Box = "lightbox2";
			} ?>
            <select name="PGP_Light_Box" id="PGP_Light_Box">
                <optgroup label="Select Light Box Styles">
                    <option value="swipe_box" <?php if ( $PGP_Light_Box == 'swipe_box' ) {
						echo "selected=selected";
					} ?>><?php esc_html_e( "Swipe Box", PGP_TEXT_DOMAIN ); ?>
                    </option>
                </optgroup>
            </select>
            <p class="description">
				<?php esc_html_e( 'Choose an image Title style.', PGP_TEXT_DOMAIN ) ?>
                <a href="#" id="p10" data-tooltip="#s10"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Image Border', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
			<?php if ( $PGP_Image_Border == "" ) {
				$PGP_Image_Border = "yes";
			} ?>
            <input type="radio" name="PGP_Image_Border" id="PGP_Image_Border"
                   value="yes" <?php if ( $PGP_Image_Border == 'yes' ) {
				echo "checked";
			} ?>> <i class="fa fa-check fa-2x"></i>
            <input type="radio" name="PGP_Image_Border" id="PGP_Image_Border"
                   value="no" <?php if ( $PGP_Image_Border == 'no' ) {
				echo "checked";
			} ?>> <i class="fa fa-times fa-2x"></i>
            <p class="description">
				<?php esc_html_e( 'Select Yes/No option to apply border on portfolio image thumbnails.', PGP_TEXT_DOMAIN ); ?>
                <a href="#" id="p11" data-tooltip="#s11"><?php esc_html_e( 'Preview', PGP_TEXT_DOMAIN ); ?></a>
            </p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label><?php esc_html_e( 'Custom CSS', PGP_TEXT_DOMAIN ); ?></label></th>
        <td>
            <textarea id="PGP_Custom_CSS" name="PGP_Custom_CSS" type="text" class="" style="width:80%"><?php echo esc_html($PGP_Custom_CSS); ?></textarea>
            <p class="description">
				<?php esc_html_e( 'Enter any custom css you want to apply on this gallery.', PGP_TEXT_DOMAIN ); ?><br>
            </p>
            <p class="custnote"><?php esc_html_e( "Note : Please Do Not Use Style Tag With Custom CSS", PGP_TEXT_DOMAIN ); ?></p>
        </td>
    </tr>
    </tbody>
</table>

<script type="text/javascript">
    jQuery("#PGP_Effect").change(function () {
        var myval = jQuery('#PGP_Effect :selected').text();
        if (myval == "-- No Effect --") {
            jQuery("#PG_anim").hide();
            jQuery("#PG_imghovclr").hide();
            jQuery("#PG_showimglbl").hide();
            jQuery("#PG_fontstyle").hide();
        } else {
            jQuery("#PG_anim").show();
            jQuery("#PG_imghovclr").show();
            jQuery("#PG_showimglbl").show();
            jQuery("#PG_fontstyle").show();
        }
    });

    jQuery(document).ready(function () {
        var editor = CodeMirror.fromTextArea(document.getElementById("PGP_Custom_CSS"), {
            lineWrapping: true,
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: true,
            hint: true,
            theme: 'blackboard',
            extraKeys: {"Ctrl-Space": "autocomplete"},
        });
    });
</script>