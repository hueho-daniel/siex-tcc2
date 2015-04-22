<fieldset>
  <legend>Dados do contato</legend>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_name">Nome</label>  
    <div class="col-md-4">
      <input id="contact_name" name="contact_name" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_name }}}"
        class="form-control input-lg" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_phone">Telefone</label>  
    <div class="col-md-4">
      <input id="contact_phone" name="contact_phone" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_phone }}}"
        class="form-control input-md" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_fax">Fax</label>  
    <div class="col-md-4">
      <input id="contact_fax" name="contact_fax" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_fax }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_cel">Celular</label>  
    <div class="col-md-4">
      <input id="contact_cel" name="contact_cel" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_cel }}}"
        class="form-control input-md" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_email">Email</label>  
    <div class="col-md-4">
      <input id="contact_email" name="contact_email" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_email }}}"
        class="form-control input-md" type="text" required="true">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_site">Site</label>  
    <div class="col-md-4">
      <input id="contact_site" name="contact_site" {{{ $readonly ? 'readonly' : '' }}} value="{{{ $object->contact_site }}}"
        class="form-control input-md" type="text">
    </div>
  </div>
</fieldset>