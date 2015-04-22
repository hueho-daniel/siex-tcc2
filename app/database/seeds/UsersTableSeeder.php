<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
      'email' => 'usuario@unifesp.br',
      'password' => Hash::make('senha'),
      'name' => 'Fulano de Tal',
      'phone' => '(11) 34567890',
      'cel' => '(11) 997149935',
      'site' => 'www.unifesp.br',
      'cpf' => '828.590.323-04',
		]);
	}

}