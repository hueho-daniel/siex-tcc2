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

  /**
   * Login do sistema - form inicial
   *
   * @return Response
   */
  public function login_page()
  {
    $this->layout->content = View::make('login');
  }

  /**
   * Login do sistema - ação de login
   *
   * @return Redirect
   */
  public function login()
  {
    $email = Input::get('email');
    $password = Input::get('password');

    if (Auth::check() || Auth::attempt([ 'email' => $email, 'password' => $password ]))
    {
      return Redirect::intended();
    } else {
      return Redirect::back()->with('message', 'Login inválido, tente novamente.');
    }
  }

  /**
   * Cadastro do sistema - form inicial
   *
   * @return Response
   */
  public function signup_page()
  {
    $this->layout->content = View::make('signup');
  }

  /**
   * Cadastro do sistema - ação de signup
   *
   * @return Redirect
   */
  public function signup()
  {
    $validator = Validator::make(Input::all(), User::$rules);

    if ($validator->fails())
    {
      return Redirect::back()->withErrors($validator)->withInput();
    }

    $user = User::create(Input::except('password_confirmation'));
    Auth::login($user);

    return Redirect::intended();
  }

  /**
   * Login do sistema - form inicial
   *
   * @return Redirect
   */
  public function logout()
  {
    Auth::logout();

    return Redirect::to('/')->with('success', 'Deslogado com sucesso');
  }

}