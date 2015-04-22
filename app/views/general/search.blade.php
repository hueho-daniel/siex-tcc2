<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Busca</h3>
  </div>
  <div class="panel-body">
    <form role="form" method="GET">
      <div class="form-group row">
        <div class="col-md-4">
          <label class="control-label" for="title">Título</label>  
          <input id="title" name="title" class="form-control input-md" type="text">
        </div>

        <div class="col-md-4">
          <label class="control-label" for="theme">Área Temática</label>
          {{ Form::select('theme', array_merge([ 'Todas' => 'Todas' ], Misc::themes()), null, [ 'class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="only_own" name="only_own" value="true">Somente de minha autoria 
            </label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <button type="submit" class="btn btn-default">Filtrar</button>
        </div>
      </div>
    </form>
  </div>
</div>
