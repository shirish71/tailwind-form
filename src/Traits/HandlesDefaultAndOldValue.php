<?php

namespace Shirish71\TailwindForm\Traits;

trait HandlesDefaultAndOldValue
{
    use HandlesBoundValues;

    private function setValue(
        string $name,
        string $label = '',
        $bind = null,
        $default = null,
        $language = null,
        string $placeholder = '',
        string $id = ''
    ) {
        if ($this->isWired()) {
            return;
        }

        $inputName = static::convertBracketsToDots($name);

        if (!$language) {
            $default = $this->getBoundValue($bind, $name) ?: $default;

            return $this->value = old($inputName, $default);
        }

        if ($bind !== false) {
            $bind = $bind ?: $this->getBoundTarget();
        }

        if ($bind) {
            $default = $bind->getTranslation($name, $language, false) ?: $default;
        }

        if ($label) {
            $this->label = $label;
        } else {
            $this->label = str_replace('_', ' ', ucfirst($name));
        }
        if ($id) {
            $this->id = $id;
        } else {
            $this->id = $name;
        }
        if ($placeholder) {
            $this->placeholder = $placeholder;
        } else {
            $this->placeholder = "Please enter {$this->label}";
        }
        $this->value = old("{$inputName}.{$language}", $default);
    }
}
