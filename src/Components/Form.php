<?php

namespace Shirish71\TailwindForm\Components;

use Illuminate\View\View;

class Form extends Component
{
    public string $method, $url, $action;

    public bool $files, $file, $errorMessage = false, $successMessage = false;

    public bool $spoofMethod = false;


    public function __construct(string $method = 'POST', $url, $files, $action, $errorMessage, $successMessage)
    {
        $this->method = strtoupper($method);
        $this->url = $url;
        $this->spoofMethod = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);
        $this->method = $method;
        $this->files = $files;
        $this->action = $action;
        $this->errorMessage = $errorMessage;
        $this->successMessage = $successMessage;
    }


    public function hasError($bag = 'default'): bool
    {
        $errors = View::shared('errors', fn() => request()->session()->get('errors', new ViewErrorBag));

        return $errors->getBag($bag)->isNotEmpty();
    }

    public function render()
    {
        // TODO: Implement render() method.
    }
}
