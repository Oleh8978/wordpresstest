<?php
/*
Plugin Name: Custom LD-JSON Manager
Description: Adds JSON-LD to the header, managed via admin.
Version: 1.0
Author: Your Name
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add admin menu
 */
function cljm_add_admin_menu() {
    add_menu_page(
        'LD-JSON Manager',          // Page title
        'LD-JSON',                  // Menu title
        'manage_options',           // Capability
        'cljm-jsonld',              // Menu slug
        'cljm_admin_page',          // Callback
        'dashicons-editor-code',    // Icon
        100                         // Position
    );
}
add_action('admin_menu', 'cljm_add_admin_menu');

/**
 * Register settings
 */
function cljm_register_settings() {
    register_setting('cljm-settings-group', 'cljm_jsonld');
}
add_action('admin_init', 'cljm_register_settings');

/**
 * Admin page content
 */
function cljm_admin_page() { ?>
    <div class="wrap">
        <h1>Custom LD-JSON Manager</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields('cljm-settings-group');
                do_settings_sections('cljm-settings-group');
                $value = esc_textarea(get_option('cljm_jsonld'));
            ?>
            <textarea name="cljm_jsonld" rows="15" cols="100" class="large-text code"><?php echo $value; ?></textarea>
            <?php submit_button('Save JSON-LD'); ?>
        </form>
        <p>Enter valid JSON-LD. It will be added to your site's head.</p>
    </div>
<?php }

/**
 * Output JSON-LD in <head>
 */
function cljm_add_jsonld_to_head() {
    $json = get_option('cljm_jsonld');
    if ($json) {
        echo "\n<script type='application/ld+json'>\n" . $json . "\n</script>\n";
    }
}
add_action('wp_head', 'cljm_add_jsonld_to_head');