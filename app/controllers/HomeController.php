<?php

class HomeController extends \BaseController {

	/**
	 * Página inicial
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('index');
	}

}