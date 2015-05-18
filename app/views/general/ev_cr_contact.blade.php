<fieldset>
  <legend>Referências</legend>

  @foreach(Misc::ev_cr_contact_fields() as $field => $label)
    <div class="form-group">
      <label class="col-md-4 control-label" for="{{{ $field }}}">Nome</label>  
      <div class="col-md-4">
        <input id="{{{ $field }}}" name="{{{ $field }}}" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->$field }}}"
          class="form-control input-lg" type="text" required="true">
      </div>
    </div>
  @endforeach

  <div class="form-group">
    <label class="col-md-4 control-label" for="campus">Campus</label>
    <div class="col-md-4">
      @if($readonly)
        <input id="campus" name="campus" readonly value="{{{ $object->campus }}}" class="form-control input-md"/> 
      @else
        {{ Form::select('campus', Misc::campi(), isset($object) ? $object->campus : null, [ 'class' => 'form-control']) }}
      @endif
    </div>
  </div>

</fieldset>