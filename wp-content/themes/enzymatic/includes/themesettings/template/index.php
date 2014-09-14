<?php 
    wp_enqueue_script('jquery');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('media-upload');

    wp_enqueue_style('thickbox');
    wp_enqueue_script('settings',get_template_directory_uri()."/includes/themesettings/settings.js",array("jquery"));

    $images = get_option('enzymatic_image_setting');
?>

<div class="wrap">
    <?php screen_icon('themes'); ?> <h2>Image Settings</h2>

    <form action ="options.php" method="POST">
        <?php settings_fields("enzymatic_image_group"); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Logo</th>
                <td>
                    <input type="text" name="enzymatic_image_setting[logo]" size="25" 
                           value="<?php echo $images['logo']; ?>" id="logo" readonly="true"/>
                    <input type="button" id="upload_logo" class="upload_image button-secondary" value="Upload Logo"/><br/><br/>
                    <img id="image_logo" style="max-width:200px" src="<?php echo $images['logo']; ?>"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Footer Logo</th>
                <td>
                    <input type="text" name="enzymatic_image_setting[footerlogo]" size="25" 
                           value="<?php echo $images['footerlogo']; ?>" id="footerlogo" readonly="true"/>
                    <input type="button" id="upload_footerlogo" class="upload_image button-secondary" value="Upload Footer Logo"/><br/><br/>
                    <img id="image_footerlogo" style="max-width:200px" src="<?php echo $images['footerlogo']; ?>"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Header Contact Icon</th>
                <td>
                    <input type="text" name="enzymatic_image_setting[headercontacticon]" size="25" 
                           value="<?php echo $images['headercontacticon']; ?>" id="headercontacticon" readonly="true"/>
                    <input type="button" id="upload_headercontacticon" class="upload_image button-secondary" value="Upload Header Contact Icon"/><br/><br/>
                    <img id="image_headercontacticon" style="max-width:200px" src="<?php echo $images['headercontacticon']; ?>" />
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Code Image</th>
                <td>
                    <input type="text" name="enzymatic_image_setting[code]" size="25" 
                           value="<?php echo $images['code']; ?>" id="code" readonly="true"/>
                    <input type="button" id="upload_code" class="upload_image button-secondary" value="Upload Code"/><br/><br/>
                    <img id="image_code" style="max-width:200px" src="<?php echo $images['code']; ?>" />
                </td>
            </tr>
        </table>
        <input type="submit" value="Save Settings" class="button-primary" />
    </form>
</div>