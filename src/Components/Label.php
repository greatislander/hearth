<?php

namespace Hearth\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Label extends Component
{
    /**
     * The label for the form input.
     *
     * @var null|string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @param string $value The label for the form input.
     *
     * @return void
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('hearth::components.label');
    }
}
