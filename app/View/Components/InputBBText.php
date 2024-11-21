<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputBBText extends Component
{
    public $name;
    public $value;
    public $id;
    public $required;
    public $autofocus;
    public $autocomplete;

    /**
     * Create a new component instance.
     */

    public function __construct(
        $name,
        $value = '',
        $id = '',
        $required = false,
        $autofocus = false,
        $autocomplete = ''
    ) {
        $this->name = $name;
        $this->value = old($name, $value);
        $this->id = $id ?: $name;
        $this->required = $required;
        $this->autofocus = $autofocus;
        $this->autocomplete = $autocomplete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-b-b-text');
    }
}
