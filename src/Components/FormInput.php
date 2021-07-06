<?php

namespace Shirish71\TailwindForm\Components;

use Shirish71\TailwindForm\Traits\HandlesValidationErrors;
use Shirish71\TailwindForm\Traits\HandlesDefaultAndOldValue;

class FormInput extends Component
{
    use HandlesValidationErrors, HandlesDefaultAndOldValue;

    public string $name, $label, $type, $value, $placeholder, $id;

    public bool $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $type = 'text',
        string $label = '',
        string $id = '',
        string $placeholder = '',
        bool $required = false,
        $bind = null,
        $default = null,
        $language = null,
        bool $showErrors = true
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->showErrors = $showErrors;

        if ($language) {
            $this->name = "{$name}[{$language}]";
        }

        $this->placeholder = $placeholder;
        $this->id = $id;
        $this->required = $required;
        $this->setValue($name, $label, $bind, $default, $language, $placeholder);
    }
}
