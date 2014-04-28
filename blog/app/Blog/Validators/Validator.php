<?php namespace Blog\Validators;

use Validator as IlluminateValidator;

abstract class Validator {

    /**
     * The validation rules.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * The validation errors.
     *
     * @var \Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * Validate the given input.
     *
     * @param array $input
     * @return boolean
     */
    public function validate(array $input)
    {
        $validator = IlluminateValidator::make($input, $this->rules);

        $isValid = $validator->passes();

        if ( ! $isValid)
        {
            $this->errors = $validator->messages();
        }

        return $isValid;
    }

    /**
     * Get the validation errors.
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

}

