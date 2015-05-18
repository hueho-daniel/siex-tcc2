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
    <label class="col-md-4 control-label" for="description">Descrição</label>  
    <div class="col-md-4">
      <textarea id="description" name="description" {{{ $readonly ? 'readonly' : '' }}}
        class="form-control" type="text" required="true">
        {{{ isset($object) ? $object->description : "" }}}
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="full_content">Arquivo completo</label>  
    <div class="col-md-4">
      @if(isset($object->full_content))
        <a href="file">Download {{{ $object->full_content_file_name }}}</a>
      @endif

      @if(!$readonly)
        <input id="full_content" name="full_content" class="form-control" type="file">
      @endif
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="student_count">Quantidade de alunos</label>  
    <div class="col-md-4">
      <input id="student_count" name="student_count" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->student_count : "" }}}"
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

  <div class="form-group">
    <label class="col-md-4 control-label" for="estimated_audience">Público atíngido/mês</label>  
    <div class="col-md-4">
      <input id="estimated_audience" name="estimated_audience" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->estimated_audience : "" }}}"
        class="form-control input-md" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="action">Ação</label>  
    <div class="col-md-4">
    <input id="status" name="status" readonly="true" value="Curricular"
      class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="financial_aid">Ajuda Financeira</label>  
    <div class="col-md-4">
      <input id="financial_aid" name="financial_aid" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->financial_aid : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>
</fieldset>
