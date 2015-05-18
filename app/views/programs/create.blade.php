<h1>Criar novo Programa</h1>
<hr>
<div class="col-md-12">
  <form enctype="multipart/form-data" class="form-horizontal" action="/programs" method="post">
    @include('general.form_header', [ 'readonly' => false, 'recorded_at' => Carbon::now()->format('d/m/Y') ])
    @include('general.contact', [ 'readonly' => false, 'object' => Auth::user() ])
    @include('general.pg_pj_info', [ 'readonly' => false, 'label' => 'programa' ])

    <fieldset>
      <div class="btn-group col-md-offset-4">
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="save">Salvar</button>
        <button type="submit" name="how" id="how" class="btn btn-default btn-center" value="send">Enviar</button>
      </div>
    </fieldset>
  </form>
</div>
