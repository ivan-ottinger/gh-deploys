<?php
/**
 * Plugin Name: Example plugin
 * Description: Displays a simple admin notice in the WordPress admin dashboard.
 * Version: 1.0
 * Author: Ivan Ottinger
 */

// Hook into the 'admin_notices' action
add_action( 'admin_notices', 'ane_show_admin_notice' );

function ane_show_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><strong>TEST 3 Admin Notice Example:</strong> This is a success message in the WordPress admin.</p>
    </div>
    <?php
}