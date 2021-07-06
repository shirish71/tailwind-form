<?php

namespace Shirish71\TailwindForm\Components;

use Illuminate\View\View;
use Illuminate\Support\ViewErrorBag;

class Form extends Component
{
    public string $method, $url, $action;

    public bool $files = false, $file = false, $errorMessage = false, $successMessage = false;

    public bool $spoofMethod = false;


    /**
     * Form constructor.
     * @param  string  $method
     * @param  string  $action
     * @param  bool  $files
     * @param  bool  $file
     * @param  bool  $errorMessage
     * @param  bool  $successMessage
     */
    public function __construct(
        string $method = 'POST',
        string $action = '#',
        bool $files = false,
        bool $file = false,
        bool $errorMessage = false,
        bool $successMessage = false
    ) {
        $this->method = strtoupper($method);
        $this->spoofMethod = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);
        $this->method = $method;
        $this->files = $files;
        $this->file = $file;
        $this->action = $action;
        $this->errorMessage = $errorMessage;
        $this->successMessage = $successMessage;
    }


    public function hasError($bag = 'default'): bool
    {
        $errors = View::shared('errors', fn() => request()->session()->get('errors', new ViewErrorBag()));

        return $errors->getBag($bag)->isNotEmpty();
    }

}
