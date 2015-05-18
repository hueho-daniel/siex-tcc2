<h1>Detalhes do Evento</h1>
<hr>
<div class="col-md-12">
  <form class="form-horizontal" action="/none" method="get">
    @include('general.form_header', [ 'readonly' => true, 'recorded_at' => $event->recorded_at ])
    @include('general.ev_cr_contact', [ 'readonly' => true, 'object' => $event ])
    @include('general.pg_pj_info', [ 'readonly' => true, 'label' => 'evento', 'object' => $event ])
  </form>
</div>
