<?php namespace Blog\Validators;

class UserValidator extends Validator {

    /**
     * The validation rules.
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email|exists:users,email',
        'password' => 'required',
    ];

}

