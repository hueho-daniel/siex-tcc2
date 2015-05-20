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
      @if($readonly)
        @if(isset($object))
        @foreach($object->coordinators as $coordinator)
          <tr>
          <td>{{{ $coordinator->name }}}</td>
          <td>{{{ $coordinator->cpf }}}</td>
          <td>{{{ $coordinator->activity }}}</td>
          <td>{{{ $coordinator->workload }}}</td>
          <td>{{{ $coordinator->editor ? 'Sim' : ' Nao' }}}</td>
          <td>{{{ $coordinator->observation }}}</td>
        </tr>
        @endforeach
        @endif
      @else
        @if(isset($object))
        @foreach($object->coordinators as $coordinator)
          <tr>
            <td><input class="coordinator-search" id="coordinator[name][]" name="coordinator[name][]"
              value="{{{ $coordinator->name }}}"/></td>
            <td><input id="coordinator[cpf][]" name="coordinator[cpf][]" value="{{{ $coordinator->cpf }}}"/></td>
            <td><select id="coordinator[activity][]" name="coordinator[activity][]"
              value="{{{ $coordinator->activity }}}">
                <option>Ajudante</option>
                <option>Palestrante</option>
              </select></td>
            <td><input id="coordinator[workload][]" name="coordinator[workload][]" value="{{{ $coordinator->workload }}}"/></td>
            <td><input type="checkbox" id="coordinator[editor][]" name="coordinator[editor][]" {{{ $coordinator->editor ? 'checked' : '' }}} value="true"/></td>
            <td><input type="textarea" id="coordinator[observation][]" name="coordinator[observation][]" value="{{{ $coordinator->observation }}}"/></td>
            <td><a href="#" class="remove-coordinator">Deletar</a></td>
          </tr>
        @endforeach
        @endif
        <tr class="template-line" style="display: none;">
          <td><input class="hidden-coordinator-search" id="coordinator[name][]" name="coordinator[name][]"/></td>
          <td><input data-cpf="true" id="coordinator[cpf][]" name="coordinator[cpf][]"/></td>
          <td><select id="coordinator[activity][]" name="coordinator[activity][]">
              <option>Ajudante</option>
              <option>Palestrante</option>
            </select></td>
          <td><input id="coordinator[workload][]" name="coordinator[workload][]"/></td>
          <td><input type="checkbox" id="coordinator[editor][]" name="coordinator[editor][]"/></td>
          <td><input type="textarea" id="coordinator[observation][]" name="coordinator[observation][]"/></td>
          <td><a href="#" class="remove-coordinator">Deletar</a></td>
        </tr>
      @endif
    </tbody>
  </table>
  @unless($readonly)
  <a href="#" class="add-coordinator">Adicionar linha</a>
  @endunless

  <script type="text/javascript">
    var enableSearch = function($e) {
      $e.select2({
        placeholder: 'Busque o nome de um usuário',
        minimumInputLength: 3,
        initSelection: function (element, callback) {
          callback({
            id: element.val(),
            text: element.val()
          });
        },
        ajax: {
          url: '/users',
          dataType: 'json',
          data: function(term) {
            return { q: term };
          },
          results: function(data) {
            return {
              results: data.map(function(u) {
                return { id: u.name, text: u.name, cpf: u.cpf }
              })
            };
          }
        }
      });

      $e.change(function(e) {
        $(this).parent().parent().find('input[data-cpf="true"]').val(e.added.cpf);
      });
    };

    var searchs = $('.coordinator-search');
    enableSearch(searchs);

    $('.remove-coordinator').click(function() {
      $(this).parent().parent().remove();
    });

    $('.add-coordinator').click(function() {
      var newLine = $('.template-line').clone();
      newLine.find('#enabled').val('true');
      enableSearch(newLine.find('.hidden-coordinator-search'));
      newLine.appendTo('#coordinators');
      newLine.show();
      newLine.find('.remove-coordinator').click(function() {
        newLine.remove();
      });
    });
  </script>

</fieldset>
<hr/>