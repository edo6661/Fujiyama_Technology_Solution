<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'button',
        public string $variant = 'primary',
        public ?string $href = null,
        public ?string $size = 'md',
        public bool $disabled = false,
        public bool $fullWidth = false,
    ) {}

    /**
     * Get the tag that should be used for the button.
     */
    public function buttonTag(): string
    {
        return $this->href ? 'a' : 'button';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.shared.button');
    }
}