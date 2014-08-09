<?php $contacts = get_option('enzymatic_contact_setting'); ?>
<div class="wrap">
    <?php screen_icon('themes'); ?> <h2>Contact Settings</h2>

    <form action ="options.php" method="POST">
        <?php settings_fields("enzymatic_contact_group"); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Contact Number</th>
                <td>
                    <input type="text" name="enzymatic_contact_setting[contactnumber]" size="25" 
                           value="<?php echo $contacts['contactnumber']; ?>" />
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Email</th>
                <td>
                    <input type="text" name="enzymatic_contact_setting[email]" size="25"
                           value="<?php echo $contacts['email']; ?>" />
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Address</th>
                <td>
                    <textarea name="enzymatic_contact_setting[address]" style="width:300px;height:150px;"><?php echo $contacts['address']; ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Facebook Link</th>
                <td>
                    <input type="text" name="enzymatic_contact_setting[facebook]" size="25" 
                           value="<?php echo $contacts['facebook']; ?>"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Twitter Link</th>
                <td>
                    <input type="text" name="enzymatic_contact_setting[twitter]" size="25" 
                           value="<?php echo $contacts['twitter']; ?>"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Youtube Link</th>
                <td>
                    <input type="text" name="enzymatic_contact_setting[youtube]" size="25" 
                           value="<?php echo $contacts['youtube']; ?>"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"></th>
                <td><input type="submit" value="Save Contacts" class="button-primary"/></td>
            </tr>
        </table>
    </form>
</div>