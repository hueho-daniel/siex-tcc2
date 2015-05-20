<fieldset>
  <legend>Dados do {{{ $label }}}</legend>
  <div class="form-group">
    <label class="col-md-4 control-label" for="title">Título</label>  
    <div class="col-md-4">
      <input id="title" name="title" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->title : "" }}}"
        class="form-control input-lg" type="text">
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
        class="form-control" type="text">
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
        class="form-control input-lg" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="minimum_seats">Número mínimo de vagas preenchidas</label>  
    <div class="col-md-4">
      <input id="minimum_seats" name="minimum_seats" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->minimum_seats : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="workload">Carga horária</label>  
    <div class="col-md-4">
      <input id="workload" name="workload" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->workload : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="subscribe_date_from">Inscrição de:</label>  
    <div class="col-md-4">
      <input class="use-date-picker" id="subscribe_date_from" name="subscribe_date_from" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->subscribe_date_from : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="subscribe_date_to">Inscrição até:</label>  
    <div class="col-md-4">
      <input class="use-date-picker" id="subscribe_date_to" name="subscribe_date_to" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->subscribe_date_to : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_date_from">Realização de:</label>  
    <div class="col-md-4">
      <input class="use-date-picker" id="realization_date_from" name="realization_date_from" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_date_from : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_date_to">Realização até:</label>  
    <div class="col-md-4">
      <input class="use-date-picker" id="realization_date_to" name="realization_date_to" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_date_to : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <script type="text/javascript">
    $('.use-date-picker').datepicker({
        format: "dd/mm/yyyy"
    });
  </script>

  <div class="form-group">
    <label class="col-md-4 control-label" for="subscribe_link">Link de inscrição</label>  
    <div class="col-md-4">
      <input id="subscribe_link" name="subscribe_link" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->subscribe_link : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="site">Site</label>  
    <div class="col-md-4">
      <input id="site" name="site" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->site : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="entry_fee">Tem taxa de inscrição</label>  
    <div class="col-md-4">
      <input id="entry_fee" name="entry_fee" {{{ $readonly ? 'readonly' : '' }}} {{{ (isset($object) && $object->entry_fee) ? 'checked' : '' }}}
        class="form-control input-md" type="checkbox">
    </div>
  </div>
</fieldset>
<fieldset>
  <legend>Endereço de realização</legend>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_street">Rua</label>  
    <div class="col-md-4">
      <input id="realization_address_street" name="realization_address_street" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_street : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_number">Número</label>  
    <div class="col-md-4">
      <input id="realization_address_number" name="realization_address_number" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_number : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_complement">Complemento</label>  
    <div class="col-md-4">
      <input id="realization_address_complement" name="realization_address_complement" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_complement : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_district">Bairro</label>  
    <div class="col-md-4">
      <input id="realization_address_district" name="realization_address_district" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_district : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_postal_code">CEP</label>  
    <div class="col-md-4">
      <input id="realization_address_postal_code" name="realization_address_postal_code" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_postal_code : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_city">Cidade</label>  
    <div class="col-md-4">
      <input id="realization_address_city" name="realization_address_city" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_city : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="realization_address_state">Estado</label>  
    <div class="col-md-4">
      <input id="realization_address_state" name="realization_address_state" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->realization_address_state : "" }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="first_target_audience">Publico-Alvo 1</label>  
      <div class="col-md-4">
        <input id="first_target_audience" name="first_target_audience" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->first_target_audience : "" }}}"
          class="form-control input-md" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="first_target_audience_seats">Vagas</label>  
      <div class="col-md-4">
        <input id="first_target_audience_seats" name="first_target_audience_seats" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->first_target_audience_seats : "" }}}"
          class="form-control input-md" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="second_target_audience">Publico-Alvo 2</label>  
      <div class="col-md-4">
        <input id="second_target_audience" name="second_target_audience" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->second_target_audience : "" }}}"
          class="form-control input-md" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="second_target_audience_seats">Vagas</label>  
      <div class="col-md-4">
        <input id="second_target_audience_seats" name="second_target_audience_seats" {{{ $readonly ? 'readonly' : '' }}} value="{{{ isset($object) ? $object->second_target_audience_seats : "" }}}"
          class="form-control input-md" type="text">
      </div>
    </div>
  </fieldset>
</fieldset>
