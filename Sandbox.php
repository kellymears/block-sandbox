<?php

namespace TinyPixel\BlockTools;

use Silk\PostType\Builder;

/**
 * Sandbox
 *
 * Registers posttype and posttype template
 *
 * @author  Kelly Mears <developers@tinypixel.dev>
 * @license MIT <https://opensource.org/licenses/MIT>
 **/
class Sandbox
{
    /**
     * Posttype id
     * @var string
     */
    private $posttype_id = 'sandbox';

    /**
     * Posttype label
     * @var string
     */
    private $posttype_label = 'Sandbox';

    /**
     * Posttype plural label
     * @var string plural
     */
    private $posttype_plural = 'Sandboxes';

    /**
     * Posttype
     * @var object silk builder instance
     */
    private $posttype;

    /**
     * Posttype template
     * @var array template
     */
    private $template;

    /**
     * Construct
     *
     * @param  void
     * @return self
     */
    public function __construct()
    {
        $this->template = require dirname(__FILE__) . '/Blocks.php';

        return $this;
    }

    /**
     * Set Posttype label
     *
     * @param  array label
     * @return self
     */
    public function setLabel(array $label)
    {
        $label = (object) $label;
        $this->posttype_id = $label->id;
        $this->posttype_label = $label->singular;
        $this->posttype_plural = $label->plural;

        return $this;
    }

    /**
     * Initialize builder instance
     *
     * @param  void
     * @return self
     */
    public function create()
    {
        $this->sandbox = Builder::make($this->posttype_id);

        $this->sandbox
             ->open()
             ->withUI()
             ->oneIs($this->posttype_label)
             ->manyAre($this->posttype_plural)
             ->supports('editor', 'title')
             ->set('has_archive', true)
             ->set('show_in_rest', true)
             ->set('template', $this->template);

         return $this;
    }

    /**
     * Append blocks
     *
     * @param  array blocks
     * @return self
     */
    public function appendBlocks($blocks)
    {
        $this->template = array_merge($this->template, $blocks);

        return $this;
    }

    /**
     * Set template
     *
     * @param  array template
     * @return self
     */
    public function setTemplate(array $template)
    {
        $this->template = $template;

        $this->sandbox->set('template', $this->template);

        return $this;
    }

    /**
     * Apply template
     * @param  void
     * @return self
     */
    public function applyTemplate()
    {
        $this->sandbox->set('template', $this->template);

        return $this;
    }

    /**
     * Register posttype
     *
     * @param  void
     * @return void
     */
    public function register()
    {
        $this->sandbox->register();

        return $this;
    }
}
