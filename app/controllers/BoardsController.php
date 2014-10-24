<?php

class BoardsController extends \BaseController {

	/**
	 * Display a listing of boards
	 *
	 * @return Response
	 */
	public function index()
	{
		$boards = Board::all();

		return View::make('boards.index', compact('boards'));
	}

	/**
	 * Show the form for creating a new board
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('boards.create');
	}

	/**
	 * Store a newly created board in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Board::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Board::create($data);

		return Redirect::route('boards.index');
	}

	/**
	 * Display the specified board.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$board = Board::findOrFail($id);

		return View::make('boards.show', compact('board'));
	}

	/**
	 * Show the form for editing the specified board.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$board = Board::find($id);

		return View::make('boards.edit', compact('board'));
	}

	/**
	 * Update the specified board in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$board = Board::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Board::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$board->update($data);

		return Redirect::route('boards.index');
	}

	/**
	 * Remove the specified board from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Board::destroy($id);

		return Redirect::route('boards.index');
	}

}
