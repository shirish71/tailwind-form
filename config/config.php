<?php

use Shirish71\TailwindForm\Components;

/*
 * You can place your custom package configuration in here.
 */
return [
    'prefix' => '',

    /** tailwind | tailwind-2 | bootstrap-4 */
    'framework' => 'tailwind',

    'components' => [
        'form' => [
            'view' => 'tailwind-form::{framework}.form',
            'class' => Components\Form::class,
        ],
        'success-message' => [
            'view' => 'tailwind-form::{framework}.form',
            'class' => Components\SuccessMessage::class,
        ],
        'form-error' => [
            'view' => 'form-components::{framework}.form-errors',
            'class' => Components\FormError::class,
        ],

//        'form-checkbox' => [
//            'view' => 'form-components::{framework}.form-checkbox',
//            'class' => Components\FormCheckbox::class,
//        ],
//
//
//        'form-group' => [
//            'view' => 'form-components::{framework}.form-group',
//            'class' => Components\FormGroup::class,
//        ],
//
//        'form-input' => [
//            'view' => 'form-components::{framework}.form-input',
//            'class' => Components\FormInput::class,
//        ],
//
//        'form-label' => [
//            'view' => 'form-components::{framework}.form-label',
//            'class' => Components\FormLabel::class,
//        ],
//
//        'form-radio' => [
//            'view' => 'form-components::{framework}.form-radio',
//            'class' => Components\FormRadio::class,
//        ],
//
//        'form-select' => [
//            'view' => 'form-components::{framework}.form-select',
//            'class' => Components\FormSelect::class,
//        ],
//
//        'form-submit' => [
//            'view' => 'form-components::{framework}.form-submit',
//            'class' => Components\FormSubmit::class,
//        ],
//
//        'form-textarea' => [
//            'view' => 'form-components::{framework}.form-textarea',
//            'class' => Components\FormTextarea::class,
//        ],
    ],
];
