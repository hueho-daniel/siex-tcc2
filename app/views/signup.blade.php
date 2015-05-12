<form class="form-signin" method="POST">
  <h2 class="form-signin-heading">Crie seu cadastro</h2>
  <label for="name" class="sr-only">Nome</label>
  <input id="name" value="{{{ Input::old('name') }}}" name="name" class="form-control" placeholder="Nome" required autofocus/>
  <label for="phone" class="sr-only">Telefone</label>
  <input id="phone" value="{{{ Input::old('phone') }}}" name="phone" class="form-control" placeholder="Telefone"/>
  <label for="cel" class="sr-only">Celular</label>
  <input id="cel" value="{{{ Input::old('cel') }}}" name="cel" class="form-control" placeholder="Celular"/>
  <label for="fax" class="sr-only">Fax</label>
  <input id="fax" value="{{{ Input::old('fax') }}}" name="fax" class="form-control" placeholder="Fax"/>
  <label for="cpf" class="sr-only">CPF</label>
  <input id="cpf" value="{{{ Input::old('cpf') }}}" name="cpf" class="form-control" placeholder="CPF"/>
  <label for="email" class="sr-only">Email</label>
  <input type="email" value="{{{ Input::old('email') }}}" id="email" name="email" class="form-control" placeholder="Email" required/>
  <label for="password" class="sr-only">Senha</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required/>
  <label for="password_confirmation" class="sr-only">Repetir Senha</label>
  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmar Senha" required/>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
</form>
