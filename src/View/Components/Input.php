<?php

namespace App\View\Components;

class Input extends Component
{
    /* @var string|null */
    public $label;
    /* @var string|null */
    public $type;
    /* @var string|null */
    public $value;
    /* @var string|null */
    public $class;
    /* @var string|null */
    public $placeholder;
    /* @var string|null */
    public $name;
    /* @var string|null */
    public $props;
    /* @var array|null */
    public $options;
    /* @var string|null */
    public $cols;

    public function __construct(?string $label = '', ?string $type = 'text', ?string $value = '', ?string $class = '', ?string $placeholder = '', ?string $name = '', ?string $props = '', ?array $options = [], ?string $cols = '')
    {
        $this->label       = $label;
        $this->type        = $type;
        $this->value       = $value;
        $this->class       = $class;
        $this->placeholder = $placeholder;
        $this->name        = $name;
        $this->props       = $props;
        $this->options     = $options;
        $this->cols        = $cols;
    }

    /**
     * @return string
     */
    public function render()
    {
        if ($this->type === 'select') {
            return view('components/input/select', $this->slots());
        }

        if ($this->type === 'textarea') {
            return view('components/input/textarea', $this->slots());
        }

        return view('components/input/input', $this->slots());
    }
}
