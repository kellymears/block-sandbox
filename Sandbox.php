<?php

namespace TinyPixel\BlockTools;

use Silk\PostType\Builder;

/**
 * Sandbox class
 *
 * Creates sandbox posttype,
 * inserts and updates sandbox post
 */
class Sandbox
{
    /**
     * @var int post_id
     */
    public $id;

    /**
     * @var string title
     */
    public $posttype  = 'sandbox';

    /**
     * @var string label
     */
    public $posttype_label = 'Sandbox';

    /**
     * @var string plural label
     */
    public $posttype_plural = 'Sandboxes';

    /**
     * @var array template
     */
    public $template = [];

    public function __construct()
    {
        $this->template = (array) require dirname(__FILE__) .'/Blocks.php';

        return $this;
    }

    /**
     * Register Sandbox CPT
     *
     * @param  void
     * @return self
     */
    public function createSandbox()
    {
        $sandbox = Builder::make($this->posttype);

        $sandbox
                ->closed()
                ->withUI()
                ->oneIs($this->posttype_label)
                ->manyAre($this->posttype_plural)
                ->supports('editor', 'title')
                ->set('has_archive', true)
                ->set('show_in_rest', true)
                ->set('template', $this->template);

        return $sandbox->register();
    }
}
