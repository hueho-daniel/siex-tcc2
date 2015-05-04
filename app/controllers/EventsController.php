<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of events
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = $this->search('Event')->paginate(20);

		$this->layout->content = View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new event
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('events.create');
	}

	/**
	 * Store a newly created event in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = array_merge(Input::except('how'), [ 'user_id' => Auth::user()->id ]);
		$how = Input::get('how');

		if ($how === 'send')
		{
			$data = array_merge($data, [ 'complete' => true ]);
			$validator = Validator::make($data, Event::$rules);

			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput();
			}
		}

		$event = Event::create($data);
		return Redirect::route('events.show', $event->id)->with('success', 'Criado com sucesso!');

	}

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::findOrFail($id);

		if(!$event->complete && $event->user_id === Auth::user()->id)
		{
			return Redirect::route('events.edit', $event->id);
		}

		$this->layout->content = View::make('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::find($id);

		if($event->complete || $event->user_id !== Auth::user()->id)
		{
			return Redirect::route('events.show', $event->id)->with('message', 'Edição não autorizada!');
		}

		$this->layout->content = View::make('events.edit', compact('event'));
	}

	/**
	 * Update the specified event in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = Event::findOrFail($id);

		if($event->complete || $event->user_id !== Auth::user()->id)
		{
			return Redirect::route('events.show', $event->id)->with('message', 'Edição não autorizada!');
		}

		$data = array_merge(Input::except('how'));
		$how = Input::get('how');
		
		if ($how === 'send')
		{
			$data = array_merge($data, [ 'complete' => true ]);
			$validator = Validator::make($data, Event::$rules);

			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput();
			}
		}

		$event->update($data);
		return Redirect::route('events.show', $event->id)->with('success', 'Salvo com sucesso!');;
	}

	/**
	 * Remove the specified event from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Event::destroy($id);

		return Redirect::route('events.index');
	}

}
