# Block Editor Sandbox

This plugin registers a `Sandbox` posttype preset with a template including many common/core blocks in diverse configurations. It requires zero configuration to start utilizing.

It was inspired by `coblocks/block-unit-test` (now `godaddy/block-unit-test` 😬).

**In comparison, `block-sandbox` aims to be:**

✅ Hackable, with an easy-to-read and fun-to-modify API

✅ Easy to keep updated as the block spec continues to change

✅ Not the intellectual property of Godaddy. Nothing against Rich Tabor (get it!) but _no, thanks_.

## Simple usage

```console
$ composer require tiny-pixel\block-sandbox
$ wp plugin activate block-sandbox
```

## Programmatic usage & configuration

At a minimum you need to create the CPT, apply the template and register it with WordPress:

```php
add_action('init', function () {
    (new Sandbox())
        ->create()
        ->applyTemplate()
        ->register();
});
```

Additionally, there are several methods available for you to utilize in modifying the behavior of the plugin.

### Append extra blocks

If you would like to add additional blocks to the template you can do so with the `appendBlocks` method.

```php
$extra = [['core/cover', [
    'align'   => 'wide',
    'url'     => 'example.png',
    'title'   => 'Additional block'
]]];

add_action('init', function () use ($extra) {
    (new Sandbox())
        ->createSandbox()
        ->appendBlocks($extra)
        ->applyTemplate()
        ->register();
});
```

### Overwrite template

If you would like to wholesale replace the included template with your own you can do so using `setTemplate`. Just pass in an array of the blocks.

```php
$template = [
  ['core/cover', [
    'align'   => 'wide',
    'url'     => 'example.png',
    'title'   => 'Additional block']],

  ['core-embed/vimeo', [
    'caption' => '<em>écoute: El Guincho</em>',
    'align'   => 'wide',
    'url'     => 'https://vimeo.com/70237487']],
];

add_action('init', function () use ($template) {
    (new Sandbox())
        ->createSandbox()
        ->setTemplate($template)
        ->applyTemplate()
        ->register();
});
```

### Modify labels

If you would like to change `sandbox` to something else you can do that using `setLabel`. It takes an array with a new `id`, `singular`, and `plural` form of your desired label.

```php
$label = [
  'id'       => 'test',
  'singular' => 'Test',
  'plural'   => 'Tests',
];

add_action('init', function () use ($label) {
    (new Sandbox())
        ->create()
        ->setLabel($label)
        ->applyTemplate()
        ->register();
});
```

So, in conjunction:

```php
add_action('init', function () use ($template, $extra, $posttype) {
    (new Sandbox())
        ->create()
        ->setLabel($posttype)
        ->setTemplate($template)
        ->appendBlocks($extra)
        ->applyTemplate()
        ->register();
});
```

## License

MIT License. Happy hacking!
