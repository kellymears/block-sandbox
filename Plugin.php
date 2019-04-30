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
 * Run the plugin
 * @hook init
 */
add_action('init', function () {
    (new Sandbox())->create()
                   ->applyTemplate()
                   ->register();
});
