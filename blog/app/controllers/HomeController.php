<?php

class HomeController extends BaseController {

    /**
     * Display the admin dashboard page.
     *
     * @return Response
     */
	public function index()
	{
		return View::make('dashboard');
	}

}

