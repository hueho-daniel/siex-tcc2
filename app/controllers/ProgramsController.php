<?php

class ProgramsController extends \BaseController {

	/**
	 * Display a listing of programs
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = $this->search('Program')->paginate(20);

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
		$data = array_merge(Input::except('how'), [ 'user_id' => Auth::user()->id ]);
		$how = Input::get('how');
		if (!$data['financial_aid'])
		{
			$data['financial_aid'] = null;
		}
		
		if ($how === 'send')
		{
			$data = array_merge($data, [ 'complete' => true ]);
			$validator = Validator::make($data, Program::$rules);

			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput();
			}
		}

		$program = Program::create($data);
		return Redirect::route('programs.show', $program->id)->with('success', 'Criado com sucesso!');
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

		if(!$program->complete && $program->user_id === Auth::user()->id)
		{
			return Redirect::route('programs.edit', $program->id);
		}

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

		if($program->complete || $program->user_id !== Auth::user()->id)
		{
			return Redirect::route('programs.show', $program->id)->with('message', 'Edição não autorizada!');
		}

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

		if($program->complete || $program->user_id !== Auth::user()->id)
		{
			return Redirect::route('programs.show', $program->id)->with('message', 'Edição não autorizada!');
		}

		$data = array_merge(Input::except('how'));
		$how = Input::get('how');
		if (!$data['financial_aid'])
		{
			$data['financial_aid'] = null;
		}
		
		if ($how === 'send')
		{
			$data = array_merge($data, [ 'complete' => true ]);
			$validator = Validator::make($data, Program::$rules);

			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput();
			}
		}

		$program->update($data);
		return Redirect::route('programs.show', $program->id)->with('success', 'Salvo com sucesso!');;
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
