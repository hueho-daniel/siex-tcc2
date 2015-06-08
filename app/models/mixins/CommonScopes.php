<?php

/**
 * Trait (mixin) que define escopos comuns de busca a todas as classes
 * de dominio (evento, programa, etc). Para funcionar corretamente, é
 * exigida que entidade na qual os escopos serao adicionados possuam
 * o ID de um usuario (criador da entidade) e um booleano denotando
 * se a entidade foi completa, e nao pode ser mais editada
 * 
 * @author Daniel Gracia dos Santos
 */
trait CommonScopes {

  /**
  * Pesquisa por todos as entidades marcadas como completas no banco
  * de dados.
  * @param Eloquent\Builder $query Busca onde sera aplicado o escopo
  * @param bool $except_own Se marcado como verdadeiro, o escopo retornara tambem
  *   as entidades ainda incompletas do usuáeio logado - isto e utilzado nas telas
  *   de busca. O valor padrao e falso.
  * @return Eloquent\Builder
  */
  public function scopeComplete($query, $except_own = false) {
    // Ignorar o parametro $except_own se o usuario nao estiver logado
    if(Auth::check() && $except_own)
    {
      $user_id = Auth::user()->id;
      return $query->whereRaw("(complete = true OR user_id = {$user_id})");
    } else {
      return $query->whereRaw('(complete = true)');
    }
  }
}