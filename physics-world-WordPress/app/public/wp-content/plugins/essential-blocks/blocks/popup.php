<?php

/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package essential-blocks
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function popup_block_init()
{
    // Skip block registration if Gutenberg is not enabled/merged.
    if (!function_exists('register_block_type')) {
        return;
    }

    $dir = dirname(__FILE__);

    $frontend_dependencies = include_once ESSENTIAL_BLOCKS_DIR_PATH . 'blocks/popup/frontend/index.asset.php';

    //  Frontend Script
    $frontEnd_js = 'popup/frontend/index.js';
    wp_register_script(
        'essential-blocks-popup-frontend',
        ESSENTIAL_BLOCKS_ADMIN_URL . 'blocks/popup/frontend/index.js',
        $frontend_dependencies['dependencies'],
        EssentialAdmin::get_version($dir . "/" . $frontEnd_js),
        true
    );



    register_block_type(
        EssentialBlocks::get_block_register_path("popup"),
        array(
            'editor_script'     => 'essential-blocks-editor-script',
            'editor_style'        => ESSENTIAL_BLOCKS_NAME . '-editor-css',
            'render_callback' => function ($attributes, $content) {
                if (!is_admin()) {
                    wp_enqueue_style('essential-blocks-frontend-style');
                    wp_enqueue_script('essential-blocks-popup-frontend');
                }
                return $content;
            }
        )
    );
}
add_action('init', 'popup_block_init');
