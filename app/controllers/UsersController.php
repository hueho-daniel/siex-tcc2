<?php

class UsersController extends \BaseController {

	/**
	 * Retorna listagem de usuários
	 *
	 * @return Response
	 */
	public function index()
	{
		return User::all();
	}
}
