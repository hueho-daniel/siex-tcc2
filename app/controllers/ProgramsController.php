<?php

class ProgramsController extends \BaseController {

	/**
	 * Display a listing of programs
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = Program::all();

		$this->layout->content = View::make('programs.index', compact('programs'));
	}

	/**
	 * Show the form for creating a new program
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('programs.create');
	}

	/**
	 * Store a newly created program in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Program::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Program::create($data);

		return Redirect::route('programs.index');
	}

	/**
	 * Display the specified program.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$program = Program::findOrFail($id);

		$this->layout->content = View::make('programs.show', compact('program'));
	}

	/**
	 * Show the form for editing the specified program.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$program = Program::find($id);

		$this->layout->content = View::make('programs.edit', compact('program'));
	}

	/**
	 * Update the specified program in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$program = Program::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Program::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$program->update($data);

		return Redirect::route('programs.index');
	}

	/**
	 * Remove the specified program from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Program::destroy($id);

		return Redirect::route('programs.index');
	}

}
