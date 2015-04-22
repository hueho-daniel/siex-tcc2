<h1>Projetos</h1>

<div class="col-md-12">
  @include("general.search")

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Título</th>
        <th>Tema</th>
        <th>Campus</th>
        <th>Programa</th>
        <th>Detalhes</th>
      </tr>
    </thead>
    <tbody>
      @forelse($projects as $project)
        <tr>
          <td>{{{ $project->title }}}</td>
          <td>{{{ $project->theme }}}</td>
          <td>{{{ $project->campus }}}</td>
          <td>
            <a href="{{{ URL::route('programs.show', [ $project->program->id ]) }}}">
              {{{ $project->program->title }}}
            </a>
          </td>
          <td>
            <a href="{{{ URL::route('projects.show', [ $project->id ]) }}}">
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

  {{{ $projects->links() }}}
</div>
