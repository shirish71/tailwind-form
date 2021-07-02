<?php


namespace Shirish71\TailwindForm\Components;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

class Alert extends Component
{
    public string $title, $message, $type;

    public function __construct($title, $message, $type)
    {
        $this->title = $title;
        $this->message = $message;
        $this->type = $type;
    }

    public function hasError($bag = 'default'): bool
    {
        $errors = View::shared('errors', fn() => request()->session()->get('errors', new ViewErrorBag()));

        return $errors->getBag($bag)->isNotEmpty();
    }
}
