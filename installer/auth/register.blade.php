<div class="container-fluid">
  <div class="row">
    <div class="col-lg-offset-3 col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">
          {!! BootForm::openHorizontal(['sm' => [4, 8], 'md' => [3, 9]]) !!}
          {!! BootForm::text('Username', 'username') !!}
          {!! BootForm::password('Password', 'password') !!}
          {!! BootForm::password('Confirm Password', 'password_confirmation') !!}
          {!! BootForm::text('Email', 'email') !!}
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9">
              <input type="submit" value="Register" class="btn btn-primary">
              <a href="{!! route('auth.login') !!}" class="btn btn-link">
                Login
              </a>
            </div>
          </div>
          {!! BootForm::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
