<?php
namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = '',
        public ?string $id = null,
        public ?string $label = null,
        public ?string $placeholder = null,
        public mixed $value = null,
        public int $rows = 5,
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public string $size = 'md',
        public string $variant = 'default',
        public bool $fullWidth = false,
        public ?string $helperText = null,
        public ?string $error = null,
    ) {
        $this->id = $id ?? $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.shared.textarea', [
            'name' => $this->name,
            'id' => $this->id,
            'label' => $this->label,
            'placeholder' => $this->placeholder,
            'value' => $this->value,
            'rows' => $this->rows,
            'required' => $this->required,
            'disabled' => $this->disabled,
            'readonly' => $this->readonly,
            'size' => $this->size,
            'variant' => $this->variant,
            'fullWidth' => $this->fullWidth,
            'helperText' => $this->helperText,
            'error' => $this->error,
        ]);
    }
}