<?php

use Blog\Repositories\PostRepository;
use Blog\Validators\PostValidator;

class PostsController extends \BaseController {

    /**
     * The PostRepository instance.
     *
     * @var PostRepository
     */
    protected $posts;

    /**
     * The validator.
     *
     * @var PostValidator
     */
    protected $validator;

    /**
     * The constructor.
     *
     * @param PostRepository $posts
     * @param PostValidator $validator
     * @return PostsController
     */
    public function __construct(PostRepository $posts, PostValidator $validator)
    {
        $this->posts = $posts;

        $this->validator = $validator;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('posts.index', [
            'posts' => $this->posts->all(),
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        $input = Input::only(['title', 'content']);

        if ( ! $this->validator->validate($input))
        {
            return Redirect::to('posts/create')
                ->withErrors($this->validator->getErrors())
                ->withInput();
        }

        $id = $this->posts->add($input);

        return Redirect::to('posts/'.$id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('posts.show', [
            'post' => $this->posts->get($id),
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
        return View::make('posts.edit', [
            'post' => $this->posts->get($id),
        ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::only(['title', 'content']);

        if ( ! $this->validator->validate($input))
        {
            return Redirect::to("posts/{$id}/edit")
                ->withErrors($this->validator->getErrors())
                ->withInput();
        }

        $this->posts->update($id, $input);

        return Redirect::to('posts/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = $this->posts->get($id);

        if ( ! Input::get('pretend', '1'))
        {
            $post->delete();
        }

        return Redirect::to('posts');
	}

}

