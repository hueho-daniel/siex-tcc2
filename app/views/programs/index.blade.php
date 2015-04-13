<h1>Programas</h1>

<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Título</th>
        <th>Tema</th>
        <th>Campus</th>
        <th>Detalhes</th>
      </tr>
    </thead>
    <tbody>
      @forelse($programs as $program)
        <tr>
          <td>{{ $program->title }}</td>
          <td>{{ $program->theme }}</td>
          <td>{{ $program->campus }}</td>
          <td>
            <a href="{{ URL::route('programs.show', [ 'resource' => $program->id ]) }}">
              <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">Nenhum resultado encontrado.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
