<?php

namespace Akhaled\HybridComponents\Resolve;

use Illuminate\View\ComponentAttributeBag;

/**
 * Available options
 * ['fixed', 'absolute', 'relative', '*-top', '*-bottom']
 */
class Position
{
    public ComponentAttributeBag $attributes;
    public $position;
    public $top;
    public $bottom;
    public $left;
    public $right;
    public $origin = null;

    function __construct(ComponentAttributeBag $attributes)
    {
        $this->attributes = $attributes;
        $this->setPositionAndOrigin();

        if ($this->position) {
            $this->setTop();
            $this->setBottom();
            $this->setLeft();
            $this->setRight();
        }

        return $this;
    }

    public function css(): string
    {
        $css = $this->position;
        $css .= !is_null($this->top) ? ' top-' . $this->top : '';
        $css .= !is_null($this->bottom) ? ' bottom-' . $this->bottom : '';
        $css .= !is_null($this->left) ? ' left-' . $this->left : '';
        $css .= !is_null($this->right) ? ' right-' . $this->right : '';
        return $css;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set the value of position
     *
     * @return self
     */
    public function setPositionAndOrigin()
    {
        $this->position = $this->attributes->get('position');

        if ($this->position && strpos($this->position, '-') > -1)
            [$this->position, $this->origin] = explode('-', $this->position);

        return $this;
    }

    /**
     * Get the value of top
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set the value of top
     *
     * @return self
     */
    public function setTop()
    {
        $defaultTop = ($this->origin && $this->origin == 'top') ? 0 : null;

        $this->top = $this->attributes->get('top', $defaultTop);

        return $this;
    }

    /**
     * Get the value of bottom
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Set the value of bottom
     *
     * @return self
     */
    public function setBottom()
    {
        $defaultBottom = ($this->origin && $this->origin == 'bottom') ? 0 : null;

        $this->bottom = $this->attributes->get('bottom', $defaultBottom);

        return $this;
    }

    /**
     * Get the value of left
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Set the value of left
     *
     * @return self
     */
    public function setLeft()
    {
        $this->left = $this->attributes->get('left', 0);

        return $this;
    }

    /**
     * Get the value of right
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Set the value of right
     *
     * @return self
     */
    public function setRight()
    {
        $this->right = $this->attributes->get('right', 0);

        return $this;
    }
}
