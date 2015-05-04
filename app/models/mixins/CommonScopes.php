<?php

trait CommonScopes {
  public function scopeComplete($query, $except_own = false) {
    if($except_own && Auth::check())
    {
      $user_id = Auth::user()->id;
      return $query->whereRaw("(complete = true OR user_id = {$user_id})");
    } else {
      return $query->whereRaw('(complete = true)');
    }
  }
}