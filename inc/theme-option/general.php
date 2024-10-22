<?php

?>
<div id="theme_optin_body">
    <div class="main_area_option">
        <!-- Header -->
        <?php echo "<h1>Theme Option</h1>
                    <p>Add your <strong>Header Area</strong> Information here.</p>"; ?>

        <form action="options.php" method="post">
        <?php wp_nonce_field("update-options") ?>
        <label for="address-info" name="address-info" title="Address Info">Address Info</label>
        <input type="text" id="address-info" name="address-info" value="<?php echo get_option("address-info"); ?>" placeholder="Enter Your Address">

        <label for="email-info" name="email-info" title="Email Info">Email Info</label>
        <input type="text" id="email-info" name="email-info" value="<?php echo get_option("email-info"); ?>" placeholder="Enter Your Email Address">

        <label for="phone-number" name="phone-number" title="Phone Number">Phone Number</label>
        <input type="text" id="phone-number" name="phone-number" value="<?php echo get_option("phone-number"); ?>" placeholder="Enter Your Phone Number">



        <input type="hidden" name="action" value="update">
        <input type="hidden" name="page_options" value="address-info,email-info,phone-number">
        <input type="submit" name="submit" value="<?php _e("Save Info","shahidul") ?>">

        </form>
    </div>
</div>

<?php