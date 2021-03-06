<?php

use Blog\Repositories\TagRepository;

class TagsController extends \BaseController {

    /**
     * The TagRepository instance.
     *
     * @var Blog\Repositories\TagRepository
     */
    protected $tags;

    /**
     * The constructor.
     *
     * @param Blog\Repositories\TagRepository $tags
     * @return TagsController
     */
    public function __construct(TagRepository $tags)
    {
        $this->tags = $tags;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('tags.index', [
            'tags' => $this->tags->all(),
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('tags.show', [
            'tag' => $this->tags->get($id),
        ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
