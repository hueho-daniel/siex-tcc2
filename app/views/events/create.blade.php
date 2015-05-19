<h1>Criar novo Evento</h1>
<hr>
<div class="col-md-12">
  <form class="form-horizontal" action="/events" method="post">
    @include('general.form_header', [ 'readonly' => false, 'recorded_at' => Carbon::now()->format('d/m/Y') ])
    @include('general.ev_cr_team'), [ 'readonly' => false ])
    @include('general.ev_cr_contact', [ 'readonly' => false ])
    @include('general.ev_cr_info', [ 'readonly' => false, 'label' => 'Evento' ])

    <fieldset>
      <div class="btn-group col-md-offset-4">
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="save">Salvar</button>
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="send">Enviar</button>
      </div>
    </fieldset>
  </form>
</div>
