<?php

namespace TinyPixel\BlockTools;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/**
 * TinyPixel\PostTypes
 *
 * @author  Kelly Mears <developers@tinypixel.dev>
 * @license MIT <https://opensource.org/licenses/MIT>
 **/
class PostType
{
    /** \Illuminate\Support\Collection */
    public $labels;

    /** \Illuminate\Support\Collection  */
    public $args;

    /**
     * Collect postType labels
     */
    public function __construct($name)
    {
        $this->name = $name;

        $this->postType = Collection::make([
            'label'               => __('CPT', 'tinypixel'),
            'description'         => __('CPT is good.', 'tinypixel'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_nav_menus'   => true,
            'show_in_rest'        => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'has_archive'         => true,
            'can_export'          => true,
            'menu_icon'           => 'dashicons-layout',
            'supports' => Collection::make(),
            'labels'   => Collection::make([
                'name'               =>  __('Cpt', 'tinypixel'),
                'singular_name'      =>  __('Cpt', 'tinypixel'),
                'add_new'            =>  __('Add new', 'tinypixel'),
                'add_new_item'       =>  __('Add new Cpt', 'tinypixel'),
                'edit_item'          =>  __('Edit Cpt', 'tinypixel'),
                'new_item'           =>  __('New Cpt', 'tinypixel'),
                'view_item'          =>  __('View Cpt', 'tinypixel'),
                'search_items'       =>  __('Search Cpts', 'tinypixel'),
                'not_found'          =>  __('No Cpts found.', 'tinypixel'),
                'not_found_in_trash' =>  __('Cpt not found in trash.', 'tinypixel'),
                'parent_item_colon'  =>  __('Parent Cpt:', 'tinypixel'),
                'menu_name'          =>  __('Cpts', 'tinypixel'),
            ]),
            'rewrite' => Collection::make([
                'slug'       => 'cpt',
                'with_front' => true,
                'feeds'      => true,
                'pages'      => true,
            ]),
            'capabilities' => Collection::make(),
            'template'     => Collection::make(),
        ]);

        $this->register();
    }

    /**
     * Buid postType for WP
     */
    public function register()
    {
        add_action('init', function () {
            register_post_type($this->name, $this->postType->map(function ($arg) {
                if (! $arg instanceof Collection) {
                    return $arg;
                }

                return $arg->toArray();
            })->toArray());
        });
    }

    /**
     * Setup the postType for registration
     */
    public function build()
    {
        return $this->postType->mapWithKeys(
            function ($value, $designation) {
                return [$designation => is_object($value)
                    ? (array) $value : $value];
            }
        )->toArray();
    }


    /**
     * Supports
     */
    public function getSupports()
    {
        return $this->postType['supports']->toArray();
    }

    /**
     * Get capabilities
     */
    public function getCapabilities()
    {
        return $this->postType['capabilities']->toArray();
    }

    /**
     * Get capabilities
     */
    public function get($thing)
    {
        return $this->postType->get($thing);
    }

    /**
     * Set block template.
     */
    public function setBlockTemplate($blocks)
    {
        $this->set('template', Collection::make($blocks));

        return $this;
    }

    /**
     * Add block to template.
     */
    public function addBlockToTemplate($blockName, $attrs = [], $innerContent = '', $innerHtml = '')
    {
        $this->postType['template']->push([$blockName, $attrs, $innerContent, $innerHtml]);

        return $this;
    }

    /**
     * Add blocks to template.
     */
    public function addBlocksToTemplate($blocks)
    {
        $this->postType['template']->push($blocks);

        return $this;
    }

    /**
     * Get block template.
     */
    public function getBlockTemplate()
    {
        return Collection::make($this->postType['template']);
    }

    /**
     * Labels
     */
    public function getLabels()
    {
        return $this->postType['labels']->toArray();
    }

    /**
     * Rewrite
     */
    public function getRewrite()
    {
        return $this->postType['rewrite']->toArray();
    }

    /**
     * Set postType argument
     */
    public function set($arg, $value)
    {
        $this->postType[$arg] = $value;

        return $this;
    }

    /**
     * Forget postType argument
     */
    public function forget($arg)
    {
        $this->postType->$arg = null;

        return $this;
    }

    /**
     * Set postType label
     */
    public function label($designation, $value)
    {
        $this->postType->$designation = $value;

        return $this;
    }

    /**
     * Remove postType label
     */
    public function erase($designation)
    {
        $this->postType['labels']->$designation = null;

        return $this;
    }
}
