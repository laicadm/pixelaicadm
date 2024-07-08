<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $text;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @param  string  $text
     * @return void
     */
    public function __construct($type = 'submit', $text = 'Button')
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
