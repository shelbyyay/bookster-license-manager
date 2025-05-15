<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Bookster_Edd_Item_Customizer {
    private const META_KEY = '_bookster_edd_sl_version';
    private const NONCE_ACTION = 'bookster_edd_custom_version_nonce_action';
    private const NONCE_NAME = 'bookster_edd_custom_version_nonce';

    public function __construct() {
        $this->init_hooks();
    }

    private function init_hooks(): void {
        add_action('add_meta_boxes', [$this, 'register_meta_box']);
        add_action('save_post', [$this, 'save_meta_box']);
        add_filter( 'edd_sl_download_version', [$this, 'modify_stable_version_in_response'], 10, 2 );
    }

    public function register_meta_box(): void {
        add_meta_box(
            'bookster_edd_custom_version_meta',
            __('Plugin Version', 'bookster-license-manager'),
            [$this, 'render_meta_box'],
            'download',
            'normal',
            'core'
        );
    }

    public function save_meta_box(int $post_id): void {
        if (!$this->can_save_meta_box($post_id)) {
            return;
        }

        if (isset($_POST['bookster_edd_sl_version'])) {
            update_post_meta(
                $post_id,
                self::META_KEY,
                sanitize_text_field($_POST['bookster_edd_sl_version'])
            );
        }
    }

    private function can_save_meta_box(int $post_id): bool {
        if (!isset($_POST[self::NONCE_NAME]) || 
            !wp_verify_nonce($_POST[self::NONCE_NAME], self::NONCE_ACTION)) {
            return false;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return false;
        }

        return get_post_type($post_id) === 'download';
    }

    public function render_meta_box($post): void {
        $version = get_post_meta($post->ID, self::META_KEY, true);
        wp_nonce_field(self::NONCE_ACTION, self::NONCE_NAME);
        ?>
        <p>
            <label for="bookster_edd_sl_version">
                <?php esc_html_e('Version:', 'bookster-license-manager'); ?>
            </label>
            <input 
                type="text" 
                name="bookster_edd_sl_version" 
                id="bookster_edd_sl_version" 
                value="<?php echo esc_attr($version); ?>" 
                class="regular-text" 
            />
        </p>
        <?php
    }

    public function modify_stable_version_in_response( $version , $edd_sl_download ) {
        $custom_version = get_post_meta($edd_sl_download->get_id(), self::META_KEY, true);
        if (empty($version) && !empty($custom_version) ) {
            return $custom_version;
        }
        return $version;
    }
}

new Bookster_Edd_Item_Customizer();
