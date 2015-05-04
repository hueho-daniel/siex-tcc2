<h1>Detalhes do Programa</h1>
<hr>
<div class="col-md-12">
  <form class="form-horizontal" action="/none" method="get">
    @include('general.form_header', [ 'readonly' => true, 'recorded_at' => $program->recorded_at ])
    @include('general.contact', [ 'readonly' => true, 'object' => $program ])
    @include('general.ev_cr_info', [ 'readonly' => true, 'label' => 'programa', 'object' => $program ])
  </form>
</div>
