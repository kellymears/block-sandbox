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

use Illuminate\Support\Collection;
use \TinyPixel\BlockTools\PostType;

$sandbox = new PostType('sandbox');
$sandbox
    ->set('show_in_rest', true)
    ->set('description', 'A custom post type demo')
    ->label('singular', __('Blocks post', 'yo'))
    ->setBlockTemplate([
        ['core/pullquote', [
            'value' => '<p>“He wakes up soaked, fetally curled, entombed in that kind of psychic darkness where you’re dreading whatever you think of.”</p>',
            'citation' => 'Madame Psychosis',
            'align' => 'full',
            'className' => 'is-style-solid-color',
            'mainColor' => 'vivid-red',
            'textColor' => 'very-light-gray',
        ]],
        ['core/paragraph', [
            'content' => "<p>People of a certain age and level of like life-experience believe they’re immortal: college students and alcoholics/addicts are the worst: they deep-down believe they’re exempt from the laws of physics and statistics that ironly govern everybody else. They’ll piss and moan your ear off if somebody else fucks with the rules, but they don’t deep down see themselves subject to them, the same rules. And they’re constitutionally unable to learn from anybody else’s experience: if some jaywalking B.U. student does get his car towed, your other student’s or addict’s response to this will be to ponder just what imponderable difference makes it possible for that other guy to get splattered or towed and not him, the ponderer. They never doubt the difference — they just ponder it. It’s like a kind of idolatry of uniqueness.</p>"
        ]],
        ['core/gallery', [
            'align'   => 'full',
            'columns' => 3,
            'images'  => [
                ['url' => 'https://source.unsplash.com/random/1200x600'],
                ['url' => 'https://source.unsplash.com/random/1200x599'],
                ['url' => 'https://source.unsplash.com/random/1200x598'],
                ['url' => 'https://source.unsplash.com/random/1200x597'],
                ['url' => 'https://source.unsplash.com/random/1200x596'],
                ['url' => 'https://source.unsplash.com/random/1200x595']
            ],
        ]],
    ])->addBlockToTemplate('core/heading', [
        'level' => 1,
        'content' => 'Booyah.',
    ])->addBlockToTemplate('core/heading', [
        'level' => 2,
        'content' => 'Booyehh.',
        'textColor' => 'vivid-purple',
    ])->addBlockToTemplate('core-embed/vimeo', [
        'caption' => '<em>écoute: El Guincho</em>',
        'url'     => 'https://vimeo.com/70237487'
    ])->addBlocksToTemplate([
        'core/columns', [], [
            ['core/column', [], [
                ['core/image', [
                    'url'     => 'https://source.unsplash.com/random/1600x1600',
                    'caption' => '“Please learn the pragmatics of expressing fear: sometimes words that seem to express really invoke.”'
                ]],
            ]],
            ['core/column', [], [
                ['core/paragraph', [
                    'content' => "‘My application’s not bought,’ I am telling them, calling into the darkness of the red cave that opens out before closed eyes.
                    ‘I am not just a boy who plays tennis. I have an intricate history. Experiences and feelings. I’m complex. ’I read,’ I say.
                    ‘I study and read. I bet I’ve read everything you’ve read. Don’t think I haven’t.",
                    'dropCap' => true,
                ]],
            ]],
        ],
    ]);


/**
 * Activation hook
 */
register_activation_hook(__FILE__, function () {
    if (! get_option('block_sandbox_flush_rewrite')) {
        add_option('block_sandbox_flush_rewrite', true);
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
    if (get_option('block_sandbox_flush_rewrite')) {
        flushRewriteRules();
    }
}

/**
 * Flush rewrite rules and remove rewrite flag
 */
function flushRules()
{
    flush_rewrite_rules();

    delete_option('block_sandbox_flush_rewrite');
}
