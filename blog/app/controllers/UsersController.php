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
        $input = Input::only(['email', 'password']);

        if ( ! $this->validator->validate($input))
        {
            return Redirect::to('login')
                ->withErrors($this->validator->getErrors())
                ->withInput();
        }

        if (Auth::attempt($input))
        {
            return Redirect::to('/');
        }
        else
        {
            $bag = new Illuminate\Support\MessageBag([
                'The password is invalid.'
            ]);

            return Redirect::to('login')
                ->withErrors($bag)
                ->withInput();
        }
    }

    /**
     * Destroy the session and redirect to the homepage.
     *
     * @return Response
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::to('login');
    }

}

