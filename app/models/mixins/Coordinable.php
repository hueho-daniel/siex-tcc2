<?php

trait Coordinable {
	public function coordinators() {
		return $this->morphMany('Coordinator', 'coordinable');
	}

  /**
   * Recebe um array retirado do formulário de edição da
   * entidade, representando os dados de coordenadores,
   * converte o array em um formato que pode ser processado
   * e passado como argumento para a criação de coordenadores
   * , e salva no banco
   *
   */
  public function updateCoordinators($data) {
    $formatted = [];
    foreach ($data as $field => $values) {
      foreach ($values as $idx => $value) {
        if(!isset($formatted[$idx])) {
          $formatted[$idx] = [];
        }
        $formatted[$idx][$field] = $value;
      }
    }

    $formatted = array_filter($formatted, function($elem)
    {
      return !empty($elem['name']);
    });

    $newCoordinators = array_map(function($elem)
    {
      return new Coordinator($elem);
    }, $formatted);

    $this->coordinators()->delete();
    $this->coordinators()->saveMany($newCoordinators);
  }
}