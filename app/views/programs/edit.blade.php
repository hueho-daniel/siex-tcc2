<h1>Editar Programa</h1>
<hr>
<div class="col-md-12">
  {{ Form::open([ 'route' => [ 'programs.update', $program->id ], 'class' => 'form-horizontal' ]) }}
    <input type="hidden" name="_method" id="_method" value="PUT"/> 
    @include('general.form_header', [ 'readonly' => false, 'recorded_at' => $program->recorded_at ])
    @include('general.contact', [ 'readonly' => false, 'object' => $program ])
    @include('general.pg_pj_info', [ 'readonly' => false, 'label' => 'programa', 'object' => $program ])

    <fieldset>
      <div class="btn-group col-md-offset-4">
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="save">Salvar</button>
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="send">Enviar</button>
      </div>
    </fieldset>
  {{ Form::close() }}
</div>
