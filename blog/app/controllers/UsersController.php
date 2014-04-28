<?php

use Blog\Validators\UserValidator;

class UsersController extends \BaseController {

    /**
     * The validator instance.
     *
     * @var UserValidator
     */
    protected $validator;

    /**
     * The constructor.
     *
     * @param UserValidator $validator
     * @return UsersController
     */
    public function __construct(UserValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Display the login page.
     *
     * @return Response
     */
    public function login()
    {
        return View::make('users.login');
    }

    /**
     * Validate the user input and create a session.
     *
     * @return Response
     */
    public function createSession()
    {

    }

}

