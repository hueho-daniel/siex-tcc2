<h1>Eventos</h1>

<div class="col-md-12">
  @include("general.search")

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Título</th>
        <th>Caracterização</th>
        <th>Tema</th>
        <th>Modalidade</th>
        <th>Detalhes</th>
      </tr>
    </thead>
    <tbody>
      @forelse($events as $event)
        <tr>
          <td>{{{ $event->title }}}</td>
          <td>{{{ $event->characterization }}}</td>
          <td>{{{ $event->main_theme }}}</td>
          <td>{{{ $event->kind }}}</td>
          <td>
            <a href="{{{ URL::route('events.show', [ $event->id ]) }}}">
              <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">Nenhum resultado encontrado.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{{ $events->links() }}}
</div>
