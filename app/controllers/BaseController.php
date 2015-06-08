<?php

class BaseController extends Controller {

	protected $layout = "layout";

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * Realiza uma busca para determinada tabela
	 *
	 * @return array
	 */
	protected function search($model)
	{
		$title = Input::get('title');
		$theme = Input::get('theme');
		$only_own = Input::get('only_own');

		// Retorna apenas os itens publicados de outros usuários
		// e todos os itens do usuário logado
		$result = $model::complete(true);

		if ($title !== "")
		{
			$result = $result->where('title', 'ilike', "%{$title}%");
		}

		if (!empty($theme) && $theme !== "Todas")
		{
			$result = $result->where('theme', '=', "{$theme}");
		}

		if ($only_own)
		{
			$result = $result->where('user_id', '=', Auth::user()->id);
		}

		return $result;
	}

	public function __construct()
	{
		// Exigir login para páginas privadas
		$this->beforeFilter('auth', [ 'except' => [ 'index', 'show', 'login_page', 'login', 'signup_page', 'signup', 'logout' ] ]);
	}

}
