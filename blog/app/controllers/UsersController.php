<?php

class UsersController extends \BaseController {

    /**
     * Display the login page.
     *
     * @return Response
     */
    public function login()
    {
        return View::make('users.login');
    }

}

