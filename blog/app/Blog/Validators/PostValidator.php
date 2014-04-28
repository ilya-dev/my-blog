<?php namespace Blog\Validators;

class PostValidator extends Validator {

    /**
     * The validation rules.
     *
     * @var array
     */
    protected $rules = [
        'title'   => 'required',
        'content' => 'required',
    ];

}

