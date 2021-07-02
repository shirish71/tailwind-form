<?php

namespace Shirish71\TailwindForm;

use Illuminate\Support\Facades\Facade;

class TailwindFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tailwind-form';
    }
}
