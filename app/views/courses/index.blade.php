<h1>Cursos</h1>

<div class="col-md-12">
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
      @forelse($courses as $course)
        <tr>
          <td>{{ $course->title }}</td>
          <td>{{ $course->characterization }}</td>
          <td>{{ $course->main_theme }}</td>
          <td>{{ $course->kind }}</td>
          <td>
            <a href="{{ URL::route('courses.show', [ $course->id ]) }}">
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
</div>
