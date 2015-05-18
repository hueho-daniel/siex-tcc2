<h1>Editar Evento</h1>
<hr>
<div class="col-md-12">
  {{ Form::open([ 'route' => [ 'events.update', $event->id ], 'class' => 'form-horizontal' ]) }}
    <input type="hidden" name="_method" id="_method" value="PUT"/> 
    @include('general.form_header', [ 'readonly' => false, 'recorded_at' => $event->recorded_at ])
    @include('general.ev_cr_contact', [ 'readonly' => false, 'object' => $event ])
    @include('general.ev_cr_info', [ 'readonly' => false, 'label' => 'evento', 'object' => $event ])

    <fieldset>
      <div class="btn-group col-md-offset-4">
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="save">Salvar</button>
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="send">Enviar</button>
      </div>
    </fieldset>
  {{ Form::close() }}
</div>
