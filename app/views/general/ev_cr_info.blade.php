<fieldset>
  <legend>Dados do {{{ $label }}}</legend>
  <div class="form-group">
    <label class="col-md-4 control-label" for="title">Título</label>  
    <div class="col-md-4">
      <input id="title" name="title" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->title : "" }}}"
        class="form-control input-lg" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="theme">Área Temática</label>
    <div class="col-md-4">
      @if($readonly)
        <input id="theme" name="theme" readonly value="{{{ $object->theme }}}" class="form-control input-md"/> 
      @else
        {{ Form::select('theme', Misc::themes(), isset($object) ? $object->theme : null, [ 'class' => 'form-control']) }}
      @endif
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="characterization">Caracterização</label>
    <div class="col-md-4">
      @if($readonly)
        <input id="characterization" name="characterization" readonly value="{{{ $object->characterization }}}" class="form-control input-md"/> 
      @else
        {{ Form::select('characterization', Misc::characterizations(), isset($object) ? $object->characterization : null, [ 'class' => 'form-control']) }}
      @endif
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="summary">Resumo</label>  
    <div class="col-md-4">
      <textarea id="summary" name="summary" {{{ $readonly ? 'readonly' : '' }}}
        class="form-control" type="text" required="true">
        {{{ isset($object) ? $object->summary : "" }}}
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="kind">Modalidade</label>
    <div class="col-md-4">
      @if($readonly)
        <input id="kind" name="kind" readonly value="{{{ $object->kind }}}" class="form-control input-md"/> 
      @else
        {{ Form::select('kind', Misc::kinds(), isset($object) ? $object->kind : null, [ 'class' => 'form-control']) }}
      @endif
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="knowledge_area">Area do Conhecimento</label>
    <div class="col-md-4">
      @if($readonly)
        <input id="knowledge_area" name="knowledge_area" readonly value="{{{ $object->knowledge_area }}}" class="form-control input-md"/> 
      @else
        {{ Form::select('knowledge_area', Misc::knowledge_areas(), isset($object) ? $object->knowledge_area : null, [ 'class' => 'form-control']) }}
      @endif
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="seats">Número de vagas</label>  
    <div class="col-md-4">
      <input id="seats" name="seats" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->seats : "" }}}"
        class="form-control input-lg" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="minimum_seats">Número mínimo de vagas preenchidas</label>  
    <div class="col-md-4">
      <input id="minimum_seats" name="minimum_seats" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->minimum_seats : "" }}}"
        class="form-control input-md" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="workload">Carga horária</label>  
    <div class="col-md-4">
      <input id="workload" name="workload" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->workload : "" }}}"
        class="form-control input-md" type="text" required="true">
    </div>
  </div>  
</fieldset>
