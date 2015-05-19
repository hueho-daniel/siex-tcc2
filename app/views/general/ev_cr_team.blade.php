<fieldset>
  <legend>Equipe organizadora</legend>

  <table class="table" id="coordinators">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Atividade no Evento</th>
        <th>Carga Horaria</th>
        <th>Autorizado a Editar</th>
        <th>Observação</th>
      </tr>
    </thead>
    <tbody id="coordinators">
      @if(isset($object))
        @if($readonly)
          <tr>
            <td>{{{ $coordinator->name }}}</td>
            <td>{{{ $coordinator->cpf }}}</td>
            <td>{{{ $coordinator->activity }}}</td>
            <td>{{{ $coordinator->workload }}}</td>
            <td>{{{ $coordinator->editor ? 'Sim' : ' Nao' }}}</td>
            <td>{{{ $coordinator->observation }}}</td>
          </tr>
        @else
          @foreach($object->coordinators as $coordinator)
            <tr>
              <td><input class="coordinator-search" id="name[]" name="name[]"
                value="{{{ $coordinator->name }}}"/></td>
              <td><input id="cpf[]" name="cpf[]" value="{{{ $coordinator->cpf }}}"/></td>
              <td><input id="workload[]" name="workload[]" value="{{{ $coordinator->workload }}}"/></td>
              <td><select id="activity[]" name="activity[]"
                value="{{{ $coordinator->activity }}}">
                  <option>Ajudante</option>
                  <option>Palestrante</option>
                </select></td>
              <td><input type="checkbox" id="editor[]" name="editor[]" value="{{{ $coordinator->editor }}}"/></td>
              <td><input type="textarea" id="observation[]" name="observation[]" value="{{{ $coordinator->observation }}}"/></td>
              <td><a href="#" class="remove-coordinator">Deletar</a></td>
              <input type="hidden" id="enabled" name="enabled" value="true"/>
            </tr>
          @endforeach
          <tr class="hidden" style="display: none;">
            <td><input class="coordinator-search" id="name[]" name="name[]"/></td>
            <td><input id="cpf[]" name="cpf[]"/></td>
            <td><input id="workload[]" name="workload[]"/></td>
            <td><select id="activity[]" name="activity[]">
                <option>Ajudante</option>
                <option>Palestrante</option>
              </select></td>
            <td><input type="checkbox" id="editor[]" name="editor[]"/></td>
            <td><input type="textarea" id="observation[]" name="observation[]"/></td>
            <td><a href="#" class="remove-coordinator">Deletar</a></td>
            <input type="hidden" id="enabled" name="enabled" value="false"/>
          </tr>
          <a href="#" class="add-coordinator">Adicionar linha</a>
        @endif
      @endif
    </tbody>
  </table>

  <script type="text/javascript">
    var searchs = $('.coordinator-search')
    searchs.select2({
      placeholder: 'Busque o nome de um usuário',
      minimumInputLength: 3,
      ajax: {
        url: '/users',
        dataType: 'json',
        data: function(term) {
          return { q: term };
        },
        results: function(data) {
          return data.map(function(u) {
            return { id: u.name, text: u.name, cpf: u.cpf }
          });
        }
      }
    });

    searchs.on("select2-selecting", function(e) {
      console.log(JSON.stringify(e.choice));
    });

    $('.remove-coordinator').click(function() {
      $(this).parent().remove();
    });

    $('.add-coordinator').click(function() {
      var newLine = $('.hidden').clone();
      newLine.find('#enabled').val('true');
      newLine.appendTo('#coordinators');
    });
  </script>

</fieldset>