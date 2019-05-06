<?php

/**
 * Plugin Name: Block Sandbox
 * Plugin URI:  https://github.com/kellymears/block-test
 * Description: Block testing for meticulous WordPress creatives
 * Version:     0.1.0
 * Author:      Tiny Pixel
 * Author URI:  https://tinypixel.dev/
 * License:     MIT License
 * Text Domain: block-test
 **/

namespace TinyPixel\BlockTools;

require __DIR__ . '/vendor/autoload.php';

use \TinyPixel\BlockTools\Sandbox;

/**
 * Plugin Main
 */
add_action('init', function () {
    $sandbox = new Sandbox();

    $sandbox
        ->create()
        ->applyTemplate()
        ->register();

    checkRewriteRules();
});

/**
 * Activation hook
 */
register_activation_hook(__FILE__, function () {
    if (!get_option('block_sandbox_flush_rules_flag')) {
        add_option('block_sandbox_flush_rules_flag', true);
    }
});

/**
 * Deactivation hook
 */
register_deactivation_hook(__FILE__, function () {
    flushRewriteRules();
});

/**
 * Check if rewrite rules are set to be flushed
 */
function checkRewriteRules()
{
    if (get_option('block_sandbox_flush_rules_flag')) {
        flushRules();
    }
}

/**
 * Flush rewrite rules and remove rewrite flag
 */
function flushRules()
{
    flush_rewrite_rules();
    delete_option('block_sandbox_flush_rules_flag');
}
