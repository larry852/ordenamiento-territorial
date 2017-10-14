    <form class="form-horizontal" role="form" method="POST" action="{{ url('ordenamientos') }}">
    {{ csrf_field() }}

      <h2 align="center">User</h2>

      <div class="form-group">
        <label for="place_name" class="col-sm-2 control-label">First Name (*)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="first_name" placeholder="First Name">
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-2 control-label">Last Name (*)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="last_name" placeholder="Last Name">
        </div>
      </div>
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username (*)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" placeholder="username">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" placeholder="password">
        </div>
      </div>
      <div class="form-group">
        <label for="avatar" class="col-sm-2 control-label">Avatar</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="avatar" placeholder="Avatar">
        </div>
      </div>
      <div class="form-group">
        <label for="gender" class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gender" placeholder="Gender">
        </div>
      </div>
      <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" placeholder="phone">
        </div>
      </div>
      <div class="form-group">
        <label for="institution" class="col-sm-2 control-label">Institution</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="institution" placeholder="institution">
        </div>
      </div>
      <div class="form-group">
        <label for="is_active" class="col-sm-2 control-label">Is active (*)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="is_active" placeholder="is_active">
        </div>
      </div>
      <div class="form-group">
        <label for="ast_login" class="col-sm-2 control-label">Last Login</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="last_login" placeholder="Last login">
        </div>
      </div>
      <div class="form-group">
        <label for="is_staff" class="col-sm-2 control-label">Is staff (*)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="is_staff" placeholder="Is staff">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </form>